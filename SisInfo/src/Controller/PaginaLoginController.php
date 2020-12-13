<?php

namespace Ifnc\Tads\Controller;



use Ifnc\Tads\Helper\Render;
use Ifnc\Tads\Helper\Flash;


class PaginaLoginController implements IController
{
    use Flash;

    public function request(): void
    {
        echo Render::html(
            [
                "paginaLogin.php",
            ],[

        ]);
    }
}