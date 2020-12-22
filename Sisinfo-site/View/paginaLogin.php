<!DOCTYPE html>
<html style="background-color: #f4f1f1;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SisInfo</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Footer-Big-Logo.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">

</head>
    <?php
        define("GOOGLE", [
        'clientId'     => '704885881523-70al1favqv1gcbqemtuc27lslb6trsc9.apps.googleusercontent.com',
        'clientSecret' => 'slAffxASlONckM6hhBr4kamv',
        'redirectUri'  => 'http://localhost:8090/usuario.php',
          ]);

        $google = new League\OAuth2\Client\Provider\Google(GOOGLE);
        $authUrl = $google->getAuthorizationUrl();?>

<body style="color: #fbf8fc;background-color: #ffff;height: 650px; background-size: cover; background-repeat: repeat;">
    <div class="bg-white login-clean" style="background-color: #ff;height: 650px;background-image: url(&quot;assets/img/13162448904561.jpg&quot;);">
        <form class="bg-white border rounded-0 border-white shadow-lg" method="post" style="background-color: #ffff;height: 389px;width: 323px;">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration" style="background-image: url(&quot;assets/img/SIS%20INFO.jpg&quot;);height: 214px;margin: 0px;padding: 0px;color: rgb(244,240,241);background-size: cover;"></div>
            <h3 class="text-center" style="color: rgb(7,9,10);font-size: 18px;padding: 2px;height: 28px;width: 236px;">Entre com sua conta Google</h3>
			<div id="meu-boto">
                <a title='login google' class="nav-link" href="<?=$authUrl?>" method="post" href="" ><img src="assets/img/google.jpg" style="background-color: #ffff;height: 90px;width: 230px; "></a>
            </div>
        </form>
    </div>
    <form action ="/login" method="post" style="background-color: #ffff;">
        <h2 class="sr-only">Login Form</h2>
    </form>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>

