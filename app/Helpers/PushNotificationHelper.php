<?php
// namespace App\Helpers;
use \App\Models\Notification;
use Google\Client as GoogleClient;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\RequestException;

if (!function_exists('sendPushNotification')) {
    function sendPushNotification($title, $message, $tokens = [], $extra = [])
    {
        foreach ($tokens as $userId => $token) {

            $credentialsFilePath = base_path('fcm.json');

            $client = new GoogleClient();
            $client->setAuthConfig($credentialsFilePath);
            $client->addScope('https://www.googleapis.com/auth/firebase.messaging');

            try {
                $accessToken = $client->fetchAccessTokenWithAssertion()['access_token'];

                $projectID ='focussubs-a4efa';
                $apiUrl = "https://fcm.googleapis.com/v1/projects/{$projectID}/messages:send";

                $message = [
                    'message' => [
                        'token' => $token,
                        'notification' => [
                            'title' => $title,
                            'body' => $message,
                        ],
                        // 'data' => $extra
                    ],
                ];

                $httpClient = new HttpClient();
                $response = $httpClient->post($apiUrl, [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $accessToken,
                        'Content-Type' => 'application/json',
                    ],
                    'json' => $message,
                ]);

                return response()->json([
                    'response' => json_decode($response->getBody()->getContents(), true),
                ]);
            } catch (RequestException $e) {
                return response()->json([
                    'error' => $e->getMessage(),
                ], $e->getCode());
            } catch (\Exception $e) {
                return response()->json([
                    'error' => $e->getMessage(),
                ], $e->getCode());
            }
        }
    }
}
