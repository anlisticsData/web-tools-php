<?php

namespace WebTools\Output;

class Xml
{
    public static function show($data = null, int $http_status = 200, $error = null)
    {
        http_response_code($http_status);
        header('Content-Type: application/xml; charset=utf-8');

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

        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><response></response>');
        self::arrayToXml($response, $xml);

        echo $xml->asXML();
        exit;
    }

    private static function arrayToXml(array $data, \SimpleXMLElement &$xml)
    {
        foreach ($data as $key => $value) {

            // Evita chaves numéricas inválidas em XML
            if (is_numeric($key)) {
                $key = 'item';
            }

            if (is_array($value)) {
                $subnode = $xml->addChild($key);
                self::arrayToXml($value, $subnode);
            } else {
                $xml->addChild($key, htmlspecialchars((string) $value));
            }
        }
    }
}
