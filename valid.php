<?php
$data = [
    'secret' => "0x95FF796FbB7cD20f6E98d277416073dba5Cc610c",
    'response' => $_POST['h-captcha-response']
];
$verify = curl_init();
curl_setopt($verify, CURLOPT_URL, "https://hcaptcha.com/siteverify");
curl_setopt($verify, CURLOPT_POST, true);
curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($verify);
// var_dump($response);
$responseData = json_decode($response);
if ($responseData->success) {
    echo "<pre>";
    print_r($responseData);
    echo "</pre>";
} else {
    // return error to user; they did not pass

    echo "<pre>";
    print_r($responseData);
    echo "</pre>";
}
