<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SisInfo - Site</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Footer-Big-Logo.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
</head>

<?php  /** @var \League\OAuth2\Client\Provider\GoogleUser $user*/

$user = unserialize($_SESSION['userLogin']);?>

<body style="background-image: url(&quot;assets/img/13162448904561.jpg&quot;);background-size: cover;background-repeat: repeat;">
<nav class="navbar navbar-light navbar-expand-md custom-header">
    <div class="container-fluid">
        <div><a class="navbar-brand" href="#" style="height: 92px;background-image: url(&quot;assets/img/Sisinfo%20cabecalho.jpg&quot;);width: 185px;"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
        <div
                class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav links">
                <!--<li class="nav-item" role="presentation"><a class="nav-link custom-navbar" href="#"> Roles</a></li>-->
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="width: 113px;height: 83px;"> <img class="dropdown-image" src="<?= $user ->getAvatar()?>" style="width: 62px;"></a>
                    <div class="dropdown-menu dropdown-menu-right"
                         role="menu"><a class="dropdown-item" role="presentation" href="?off=true">Logout </a></div>
                    <?= $off =filter_input(INPUT_GET, "off", FILTER_VALIDATE_BOOLEAN);
                            if($off){
                            unset($_SESSION["userLogin"] );
                            header("location: /portal");
                        }?>
                </li>
            </ul>
        </div>
    </div>
</nav>