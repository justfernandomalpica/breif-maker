<?php

function debug(mixed $var, bool $kill = true) : void {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    if($kill) exit;
}

function s(string $html) : string{
    return htmlspecialchars($html);
}

function start_session() : void {
    if(session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
}

function unique_id(int $length) : string {
    $length = $length < 1 ? 1 : $length;
    $lengthIsOdd = (($length % 2) === 1) ? true : false;

    $length = $lengthIsOdd ? ($length + 1) : $length;
    $len = $length / 2;
    $bin = random_bytes($len);
    $hex = bin2hex($bin);

    if($lengthIsOdd) $hex = mb_substr($hex,0,-1);

    return $hex;
}