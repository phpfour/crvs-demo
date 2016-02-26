<?php

namespace AppBundle\Google;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

class Client
{
    /** @var \Google_Client */
    private $client;

    /** @var string */
    private $clientId;

    /** @var string */
    private $clientSecret;

    /** @var string */
    private $redirectUri;

    /** @var string */
    private $scope;

    /** @var SessionInterface */
    private $session;

    public function __construct($clientId, $clientSecret, $redirectUri, $scope, $session)
    {
        $this->clientId     = $clientId;
        $this->clientSecret = $clientSecret;
        $this->redirectUri  = $redirectUri;
        $this->scope        = $scope;
        $this->session      = $session;
    }

    /**
     * Returns an authorized API client.
     *
     * @return \Google_Client the authorized client object
     */
    public function getInstance()
    {
        if (is_null($this->client)) {
            $this->client = new \Google_Client();
            $this->client->setApplicationName('IslamKosh');
            $this->client->setClientId($this->clientId);
            $this->client->setClientSecret($this->clientSecret);
            $this->client->setScopes($this->scope);
            $this->client->setRedirectUri($this->redirectUri);
            $this->client->setAccessType("offline");
            $this->client->setApprovalPrompt("auto");
        }

        if ($this->session->has('oauth_token')) {
            $oauthToken = $this->session->get('oauth_token');
            $this->client->setAccessToken(json_encode($oauthToken->getRawToken()));
        }

        return $this->client;
    }
}
