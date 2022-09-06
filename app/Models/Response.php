<?php

namespace App\Models;

use Illuminate\Support\Facades\Response as _;

class Response
{
    static public function success($data, $message) {
        $result = (object) array(
            'data' => (object) $data,
            'message' => $message,
            'state' => 0,
        );
        return _::json($result, 200);
    }

    static public function generateSuccess($data, $key, $message) {
        $result = (object) array(
            'data' => (object) array($key => $data),
            'message' => $message,
            'state' => 0,
        );
        return _::json($result, 200);
    }

    static public function exception($message) {
        //correo
        $result = (object) array(
            'data' => null,
            'message' => $message,
            'state' => 1,
        );
        return _::json($result, 200);
    }

    static public function error($message) {
        $result = (object) array(
            'data' => null,
            'message' => $message,
            'state' => 1,
        );
        return _::json($result, 200);
    }

    static public function requestException($message, $code) {
        $result = (object) array(
            'data' => null,
            'message' => $message,
            'state' => 1,
        );
        return _::json($result, $code);
    }

    static public function serverException($exception) {
        //correo
        $result = (object) array(
            'data' => null,
            'message' => (!env('APP_DEBUG')) ? 'Error interno en el servidor de host.' : $exception->getMessage(),
            'state' => 1,
        );
        return _::json($result, 500);
    }

    static public function unprocessableEntity() {
        $result = (object) array(
            'data' => null,
            'message' => 'Entidad no procesable.',
            'state' => 1,
        );
        return _::json($result, 422);
    }
}
