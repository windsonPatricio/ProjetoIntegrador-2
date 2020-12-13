<?php

namespace Ifnc\Tads\Controller;


use Ifnc\Tads\Entity\Pacote;
use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Transaction;

class PaginaLoginController implements IController
{

    public function request(): void
    {
        Transaction::open();
        echo Render::html(
            [
                "index.php"
            ],[

            "titulo"=>"Sisinfo"

        ]);
    }
}