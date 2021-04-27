<?php

set_time_limit(15);

session_start();



// sms url
$smsUrl = 'http://mobile1.ssexpertsystem.com/vendorsms/pushsms.aspx';
$username = 'jdscon';
$password = 'jds@121';
$senderId = 'ANANDA';


// default response
header('Content-Type: application/json');
$response = array(
    'status' => false,
    'message' => 'Internal server error occured while processing the request',
);
http_response_code(500);


main();

function generateOtp()
{
    try {
        return (rand(10, 99) . rand(10, 99) . rand(10, 99));
    } catch (Exception $err) {
        return $err;
    }
}

function sendOtp($mobile)
{
    try {
        global $response;
        global $username;
        global $password;
        global $smsUrl;
        global $senderId;

        global $proxy;

        $_SESSION['verified'] = false;

        if (!is_null($mobile)) {
            $_SESSION['otp'] = generateOtp();

            $curl_handle = curl_init();

            $url = $smsUrl . '?user=' . $username . '&password=' . $password . '&msisdn=' . $mobile . '&sid=' . $senderId . '&msg='.  urlencode("OTP for mobile verification is {$_SESSION['otp']}") . '&fl=0&gwid=2';

            $defaults = array(
                CURLOPT_URL            => $url,
                CURLOPT_HEADER         => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_RETURNTRANSFER => 1,
            );

            curl_setopt_array($curl_handle, $defaults);

            $url_response = curl_exec($curl_handle);
            $url_response = json_decode($url_response, true);

            if(is_null($url_response))  {
                return;
            } else if (isset($url_response['ErrorCode']) && $url_response['ErrorCode'] != "000")   {
                http_response_code(500);
                $response['status'] = true;
                $response['err'] = $url_response['ErrorMessage'];
                $response['message'] = 'Failed to send OTP to mobile number ' . $mobile;
            } else {
                http_response_code(200);
                $response['status'] = true;
                $response['message'] = 'OTP sent to mobile number ' . $mobile;
            }
            curl_close($curl_handle);
        } else {
            http_response_code(400);
            $response['message'] = 'Invalid mobile number';
        }

    } catch (Exception $err) {
        return $err;
    }
}

function verifyOtp($input_otp)
{
    try {
        global $response;

        if (!is_null($input_otp) and isset($_SESSION['otp'])) {
            if ($input_otp === $_SESSION['otp']) {
                $_SESSION['verified'] = true;
                unset($_SESSION['otp']);

                http_response_code(200);
                $response['status'] = true;
                $response['message'] = 'OTP valid';

                return;
            }
        }

        http_response_code(400);
        $response['status'] = false;
        $response['message'] = 'OTP invalid';

        return;
    } catch (Exception $err) {
        return $err;
    }
}

function main()
{
    global $response;

    try {

        $params = $_GET;

        $mobile = null;
        $input_otp = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $body = $_POST;

            // mobile number validation
            if (isset($body['mobile']) and strlen($body['mobile']) === 10 and is_numeric($body['mobile'])) {                
                $_SESSION['mobile'] = $body['mobile'];
                $mobile = $body['mobile'];
            }

            // otp validation
            if (isset($body['otp']) and strlen($body['otp']) === 6) {
                $input_otp = $body['otp'];
            }
        }

        if (isset($params['action'])) {
            switch ($params['action']) {
                case 'send':
                    sendOtp($mobile);
                    break;
                case 'verify':
                    verifyOtp($input_otp);
                    break;
                default:
                    http_response_code(400);
                    $response['message'] = 'action parameter is invalid';
                    break;
            }
        } else {
            http_response_code(400);
            $response['message'] = 'action parameter required';
        }

        echo json_encode($response, JSON_HEX_QUOT | JSON_HEX_TAG);
    } catch (Exception $err) {
        echo json_encode($response, JSON_HEX_QUOT | JSON_HEX_TAG);
    }
}
