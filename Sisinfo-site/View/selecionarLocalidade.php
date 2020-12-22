<body class="text-center" style="background-image: url(&quot;assets/img/13162448904561.jpg&quot;);background-size: cover;background-repeat: repeat;">
    <h3 class="text-center" style="color: rgb(7,9,10);font-size: 60px;padding: 0;height: 78px;margin: 5px;letter-spacing: 0px;font-style: normal;font-weight: bold;">Bem Vindo <?= $user->getFirstName()?> <?= $user->getLastName()?> !!</h3>
    <h2 class="text-center" style="color: rgb(7,9,10);font-size: 50px;padding: 0;height: 78px;margin: 5px;letter-spacing: 0px;font-style: normal;font-weight: bold;">Para onde vamos?</h2>

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