<?php

namespace Controllers;

class NotFoundController {
    // La forma de desplegar la vista de este controlador se cambiará en un futuro.
    public static function index() : void{
        echo "<!DOCTYPE html>";
        echo "<body style=\"background-color: black; color: white;\">";
        echo "<h2>Error de direccionamiento</h2>";
        echo "<h1>404</h1>";
        echo "<h3>Página no encontrada</h3>";
        echo "</body>";
        http_response_code(404);
        exit;
    }
}