<?php

namespace AppBundle\EventListener;

use AppBundle\Repository\ImageRepository;
use Symfony\Component\EventDispatcher\GenericEvent;

class PopulateImageListener
{
    /** @var ImageRepository */
    private $imageRepository;

    public function __construct(ImageRepository $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    public function onTaskCreate(GenericEvent $event)
    {
        $this->imageRepository->populateImages($event->getSubject());
    }
}
