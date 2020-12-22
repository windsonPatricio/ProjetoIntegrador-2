<?php
ob_start();
session_start();

require "../vendor/autoload.php";
use League\OAuth2\Client\Provider\Google;

define("GOOGLE", [
    'clientId'     => '704885881523-70al1favqv1gcbqemtuc27lslb6trsc9.apps.googleusercontent.com',
    'clientSecret' => 'slAffxASlONckM6hhBr4kamv',
    'redirectUri'  => 'http://localhost:8090/usuario.php',
]);

if(empty($_SESSION["userLogin"])) {

    $google = new League\OAuth2\Client\Provider\Google(GOOGLE);
    $authUrl = $google->getAuthorizationUrl();

    $error = filter_input(INPUT_GET, "error", FILTER_SANITIZE_STRING);

    $code = filter_input(INPUT_GET, "code", FILTER_SANITIZE_STRING);

    if ($error) {
        echo "<h1> voce precisa logar </h1>";
    }
    if ($code) {
        $token = $google->getAccessToken("authorization_code", [
            "code" => $code
        ]);

        $_SESSION["userLogin"] = serialize($google->getResourceOwner($token));
        header("location: \selLocalidade ");
        exit();
    }
}
ob_end_flush();
