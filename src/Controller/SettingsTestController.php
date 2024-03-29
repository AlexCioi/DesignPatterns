<?php

namespace App\Controller;

use App\Helpers\Singleton\Settings;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SettingsTestController
{
    #[Route('/app/singleton_test', name: 'singleton')]
    public function singletonTest(): Response {

        $settings = Settings::getInstance();

        $message = $settings->showMessage("Settings can be globally accessed");

        return new Response(
            '<html>
                <body style="color:green">
                  <br>
                    <h3>'.$message.'</h3>
                </body>
              </html>'
        );
    }
}