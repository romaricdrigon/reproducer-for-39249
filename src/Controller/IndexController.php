<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
    public function index(): Response
    {
        return new Response(<<<'EOT'
            <!doctype html>
            <html lang="en">            
                <head>
                    <title>Index</title>
                </head>
                <body>
                    <p>Hello world!</p>
                </body>
            </html>
        EOT, 200, ['Content-type' => 'text/html']);
    }
}
