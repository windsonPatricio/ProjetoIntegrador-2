<?php

namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Pacote;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class PaginaLoginController implements IController
{
    use Flash;

    public function request(): void
    {
        echo Render::html(
            [
                "paginaLogin.php",
            ],[

            "titulo"=>"Sisinfo"

        ]);
    }
}