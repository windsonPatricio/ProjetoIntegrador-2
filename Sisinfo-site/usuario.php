<?php
ob_start();
session_start();

require __DIR__ . "/vendor/autoload.php";
use League\OAuth2\Client\Provider\Google;

define("GOOGLE", [
    'clientId'     => '704885881523-70al1favqv1gcbqemtuc27lslb6trsc9.apps.googleusercontent.com',
    'clientSecret' => 'slAffxASlONckM6hhBr4kamv',
    'redirectUri'  => 'http://localhost:8090',
]);

if(empty($_SESSION["userLogin"])) {

    $google = new Google(GOOGLE);
    $authUrl = $google->getAuthorizationUrl();

    $error = filter_input( INPUT_GET , "error", FILTER_SANITIZE_STRING);

    $code = filter_input( INPUT_GET , "code", FILTER_SANITIZE_STRING);

    if($error){
        echo "<h1> voce precisa logar </h1>";
    }
    if($code){
        $token = $google -> getAccessToken ("authorization_code ", [
            "code" => $code
        ]);

        $_SESSION["userLogin"] = serialize($google->getResourceOwner($token));
        header("location: ".GOOGLE["redirectUri"]);
        exit();
    }

    echo "<a title='login google' href='{$authUrl}'> logar com o google</a>";

} else {
    /** @var \League\OAuth2\Client\Provider\GoogleUser $user*/

    $user = unserialize($_SESSION['userLogin']);
    var_dump($user -> toArray());

    echo "<img width='170' src='{$user ->getAvatar() }' alt='{$user-> getFirstName()}' title='{$user-> getFirstName()}' /><h1> bem vindo {$user-> getFirstName()}</h1>";

}

ob_end_flush();