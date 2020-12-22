
    <div class="row articles" style="width: 1193px;margin: 0;">
        <div class="col-sm-4 col-md-5 col-lg-4 col-xl-3 offset-sm-2 offset-md-2 offset-lg-2 offset-xl-3 item" style="padding: 40px;height: 305px;">
            <form class="bg-white border rounded-0 border-dark shadow" method="post" style="height: 260px;width: 265px;padding: 0px;margin: 0;background-color: rgba(255,255,255,0.02);">
                <div align="center" id="wrapper">
                    <img src="assets/img/clima.svg" style=" align-content:center; height: 130px;width: 80px;">
                    <h4 class="city"></h4>
                    <h2 ><b><span class="clima">0</span>ºC</b></h2>
                    <?php foreach($cidades as $cidade){
                        $nome =$_GET["city"];
                        $teste = strcmp($cidade->nome , $nome);
                        if($teste==0){ ?>
                            <NOSCRIPT id="let"><?=$cidade->latitude?></NOSCRIPT>
                            <NOSCRIPT id="long"><?=$cidade->longitude?></NOSCRIPT>
                        <?php } ?>
                    <?php } ?>

                </div>
            </form>
            <h2 class="text-center" style="color: rgb(7,9,10);font-size: 18px;padding: 2px;height: 28px;width: 265px;">Previsao Clima tempo</h2>
        </div>
        <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3 offset-md-0 offset-lg-0 item" style="padding: 40px;height: 350px;">
            <form class="bg-white border rounded-0 border-dark shadow" method="post" style="background-color: #ffff;height: 259px;width: 265px;margin: 0;">
                <h2 class="sr-only">Login Form</h2>
            </form>
            <h2 class="text-center" style="color: rgb(7,9,10);font-size: 18px;padding: 2px;height: 54px;width: 265px;">Estabelecimentos <br>comerciais</h2>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/temp.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>