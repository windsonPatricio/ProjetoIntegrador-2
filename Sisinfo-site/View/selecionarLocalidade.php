<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Projeto Intergrador 2Sem</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Footer-Big-Logo.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body class="text-center" style="background-image: url(&quot;assets/img/13162448904561.jpg&quot;);background-size: cover;background-repeat: no-repeat;">
    <h2 class="text-center" style="color: rgb(7,9,10);font-size: 24px;padding: 0;height: 78px;margin: 15px;letter-spacing: 0px;font-style: normal;font-weight: bold;">Para onde vamos?</h2>

    <form action="" id="create-class">
    <fieldset>

                <select name="uf" required class="border rounded-0 border-dark shadow-lg" style="height: 50px;width: 160px;margin: 28px;font-size: 20px;">
                    <option value="">Selecione o Estado</option>
                </select>
                <input type="hidden" name="state">

                <label for="city"></label>
                <select name="city" disabled required class="border rounded-0 border-dark shadow-lg" style="height: 50px;width: 200px;font-size: 20px;">
                    <option value="">Selecione a Cidade</option>
                </select>

    </fieldset>
        <a class="btn btn-success" href="\pagInicial">Selecionar</a>

    </form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/estado-municipio.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>