<?php

namespace AppBundle\EventListener;

use AppBundle\Repository\ImageRepository;
use Leezy\PheanstalkBundle\Proxy\PheanstalkProxy;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\HttpFoundation\Session\Session;

class PopulateImageListener
{
    /** @var ImageRepository */
    private $imageRepository;

    /** @var PheanstalkProxy */
    private $pheanstalk;

    private $session;

    public function __construct(ImageRepository $imageRepository, PheanstalkProxy $pheanstalk, Session $session)
    {
        $this->imageRepository = $imageRepository;
        $this->pheanstalk      = $pheanstalk;
        $this->session         = $session;
    }

    public function onTaskCreate(GenericEvent $event)
    {
        $this->imageRepository->populateImages($event->getSubject());

        $oauthToken = $this->session->get('oauth_token');

        $this->pheanstalk->put(json_encode([
            'task'   => 'process_image',
            'params' => [
                'task_id' => $event->getSubject()->getId(),
                'token'   => $oauthToken->getRawToken()
            ]
        ]));
    }
}
