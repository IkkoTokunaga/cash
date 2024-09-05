<?php

namespace App\Service;

use Google\Client;
use Google\Service\Gmail;

class GoogleService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
        $this->client->setClientId(config('services.google.client_id'));
        $this->client->setClientSecret(config('services.google.client_secret'));
        $this->client->setRedirectUri(config('services.google.redirect'));
        // $this->client->addScope(Gmail::GMAIL_READONLY);
        $this->client->addScope('https://www.googleapis.com/auth/gmail.send');

    }

    public function setToken($token)
    {
        $this->client->setAccessToken($token);
    }

    public function getAuthUrl()
    {
        $this->client->setAccessType('offline');
        return $this->client->createAuthUrl();
    }

    public function handleCallback($code)
    {
        $token = $this->client->fetchAccessTokenWithAuthCode($code);
        $this->client->setAccessToken($token);

        return $token;
    }

    public function getGmailService()
    {
        return new Gmail($this->client);
    }
}
