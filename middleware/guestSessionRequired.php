<?php declare(strict_types=1);

namespace Middleware;

use Core\Alerts\AlertManager;

class guestSessionRequired {

    public static function run() : void {
        start_session();
        if(!isset($_SESSION['sid'])) throw new \RuntimeException("'sid' not declared in app bootstrap");
        if($_SESSION['sid'] === '') self::block();
        return;
    }

    private static function block() {
        AlertManager::error("Algio salió mal :(", "Es necesario identificarse");
        header("Location: /");
        exit;
    }
}