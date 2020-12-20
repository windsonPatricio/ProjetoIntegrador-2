<?php

session_start();

require __DIR__ . "/vendor/autoload.php";

if(empty($_SESSION["userLogin"])) {

    $google = new Google ("GOOGLE");
    $authUrl = $google->getAuthorizationUri;

    $error = filter_input( INPUT_GET , "error", FILTER_SANITIZE_STRING);

    $code = filter_input( INPUT_GET , "code", FILTER_SANITIZE_STRING);

    if($error){
        echo "<h1> voce precisa logar </h1>";
    }
    if($code){
        $token = $google -> getAccessToken ("authorization_code ", [
            "code" => $code
        ]);

        $_SESSION["userLogin"] = serialize($google-> getResourceOwner($token));
        header("location: ".GOOGLE["redirecturi"]);
        exit();
    }

    echo "<a title='login google' href='{$authUrl}'> logar com o googel</a>"

} else {

    echo "<img width='' src='{$user->getAvatar()}' alt='{$user->getFirstName()}' title='' /><h1> bem vindo {$user->getFirstName()}</h1>  "
    var_dump($_SESSION["userLogin"]);
}