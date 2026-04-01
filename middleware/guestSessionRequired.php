<?php declare(strict_types=1);

namespace Middleware;

class guestSessionRequired {

    public static function run() : void {
        start_session();
        if(!isset($_SESSION['sid'])) throw new \RuntimeException("'sid' not declared in app bootstrap");
        if($_SESSION['sid'] === '') self::block();
        return;
    }

    private static function block() {
        http_response_code(401);
        // header('Location: /');
        exit;
    }
}