<?php

namespace WebTools\Output;

class Json
{
    public static function show($data = null, int $http_status = 200, $error = null)
    {
        http_response_code($http_status);
        header('Content-Type: application/json; charset=utf-8');

        if ($error !== null) {
            $response = [
                'error' => [
                    'message' => is_array($error) ? ($error['message'] ?? null) : $error,
                    'code'    => $http_status
                ]
            ];
        } else {
            $response = $data ?? [];
        }

        echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        exit;
    }
}
