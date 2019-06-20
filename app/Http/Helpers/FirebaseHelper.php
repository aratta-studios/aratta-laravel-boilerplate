<?php


namespace App\Http\Helpers;


class FirebaseHelper
{
    public static function sendFcmNotificationMessage($PlayerIDs, $Data, $subtitle)
    {

        $server_key = config('fcmsettings.token');

        $headers = array(
            'Content-Type: application/json; charset=utf-8',
            'Authorization: key=' . $server_key
        );


        $msg = array('title' => 'تراشیپ', 'sub_title' => $subtitle, 'activitydata' => $Data);
        $notificationBody = array('subtitle'=>$subtitle);
        $notification = array('title' => 'تراشیپ', 'body' => $subtitle);

        $fields = array(
            "content_available" => true,
            "priority" => "high",
            'registration_ids' => $PlayerIDs,
            'notification' => $notification,
            'data' => $msg
        );

        $fields = json_encode($fields);
        $url = 'https://fcm.googleapis.com/fcm/send';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);

        curl_close($ch);

        return $response;
    }
}
