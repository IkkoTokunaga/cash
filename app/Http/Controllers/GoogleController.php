<?php

namespace App\Http\Controllers;

use App\Service\GoogleService;
use App\Models\GmailToken;
use Carbon\Carbon;
use Google_Service_Gmail_Message;

class GoogleController extends Controller
{
    protected $googleService;

    public function __construct()
    {
        $this->googleService = new GoogleService;
    }

    public function redirectToGoogle()
    {
        return redirect($this->googleService->getAuthUrl());
    }

    public function handleGoogleCallback()
    {
        $code = request('code');
        $token = $this->googleService->handleCallback($code);
        $insertData = [];
        $insertData['access_token'] = $token['access_token'];
        $insertData['refresh_token'] = $token['refresh_token'];
        $insertData['expires_in'] = Carbon::now()->addSeconds($token['expires_in']);
        $insertData['created_at'] = now();
        $insertData['updated_at'] = now();
        GmailToken::store($insertData);

        return redirect()->route('welcome');
    }

    public function sendGmail($to, $subject, $body)
    {
        $token = GmailToken::get();
        $token->expires_in = 3599;
        $this->googleService->setToken(json_encode($token));

        // if ($this->client->isAccessTokenExpired()) {
        //     $this->client->fetchAccessTokenWithRefreshToken($this->client->getRefreshToken());
        //     $request->session()->put('google_token', $this->client->getAccessToken());
        // }

        $gmail = $this->googleService->getGmailService();
        $message = new Google_Service_Gmail_Message();

        $subject = mb_encode_mimeheader($subject, 'ISO-2022-JP');
        $rawMessageString = "From: cash.canvas.info@gmail.com\r\n";
        $rawMessageString .= "To: {$to}\r\n";
        $rawMessageString .= "Subject: {$subject}\r\n\r\n";
        $rawMessageString .= $body;

        $rawMessage = strtr(base64_encode($rawMessageString), array('+' => '-', '/' => '_'));
        $message->setRaw($rawMessage);

        try {
            $gmail->users_messages->send('me', $message);
            return "Email sent successfully.";
        } catch (\Exception $e) {
            return "Error in sending email: " . $e->getMessage();
        }
    }
}
