<?php declare(strict_types=1);

namespace Core\Auth;

class csrfToken {
    private static string $key = "csrf_token";

    public static function setGet() : string {
        start_session();
        $token_key = self::$key;
        $token_exist = isset($_SESSION[$token_key]);
        
        if($token_exist) return $_SESSION[$token_key];

        $token = unique_id(60);

        $_SESSION[$token_key] = $token;
        return $token;
    }

    public static function validate(string $inputToken) : bool {
        start_session();
        $token_key = self::$key;
        $token_exist = isset($_SESSION[$token_key]);

        if(!$token_exist) return false;
        $token = $_SESSION[$token_key];

        $isValid = hash_equals($token, $inputToken);

        return $isValid;
    }
}