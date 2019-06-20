<?php


namespace App\Http\Helpers;

use Kavenegar\KavenegarApi;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;

class SmsPanelHelper
{

    public static function sendSms($phoneNumber,$tempCode)
    {
        try {
            $api = new KavenegarApi(config('kavenegar.apikey'));
            $sender = "10004346";
            $message = "کد احراز هویت شما: ".$tempCode;
            $receptor = array($phoneNumber);
            $result = $api->Send($sender, $receptor, $message);

        } catch (ApiException $e) {
            //In case that error throw 200
            echo $e->errorMessage();
        } catch (HttpException $e) {
//in case that there is any problem to connect to webservie  this error thow
            echo $e->errorMessage();
        }

    }

    public static function sendBatchSms($receptor,$message)
    {
        try {
            $api = new KavenegarApi(config('kavenegar.apikey'));
            $sender = "10004346";

            $result = $api->Send($sender, $receptor, $message);

        } catch (ApiException $e) {
            //In case that error throw 200
            echo $e->errorMessage();
        } catch (HttpException $e) {
//in case that there is any problem to connect to webservie  this error thow
            echo $e->errorMessage();
        }

    }

}
