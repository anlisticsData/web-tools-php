<?php

namespace WebTools\Http;

class Request
{
    private static array $buffer = [];

    public static function init()
    {
        $raw  = file_get_contents('php://input');
        $data = json_decode($raw, true);

        if (!empty($_POST)) {
            self::setBuffer(array_change_key_case($_POST, CASE_LOWER));
        }

        if (!empty($_GET)) {
            self::setBuffer(array_change_key_case($_GET, CASE_LOWER));
        }

        if (is_array($data)) {
            self::setBuffer(array_change_key_case($data, CASE_LOWER));
        }

        return self::$buffer;
    }


    private static function setBuffer(array $inputs): void
    {
        foreach ($inputs as $key => $input) {
            self::$buffer[strtolower($key)] = $input;
        }
    }

    public static function get(string $key, $default = null)
    {
        $key = strtolower($key);
        return self::$buffer[$key] ?? $default;
    }

    
}
