<?php declare(strict_types=1);

namespace Middleware;

use Core\Alerts\AlertManager;
use Core\Auth\csrfToken;

class csrfVerificationRequired {
    public static function run() : void{
        start_session();
        
        if(!isset($_SESSION["csrf_token"])) self::redirectIfIsNotValid();
        $token = $_POST["_csrf"];
        $isValid = csrfToken::validate($token);
        if(!$isValid) self::redirectIfIsNotValid();
        return;
    }

    private static function redirectIfIsNotValid() {
        start_session();

        unset($_SESSION["csrf_token"]);
        AlertManager::error("Algio salió mal :(", "La sesión expiró o el formulario es inválido. Por favor intentalo nuevamente");
        header("Location: /");
        exit;
    }
}