<?php

namespace App\Models;

class Result
{
    static public function success($data, $message) {
        return (object) array(
            'data' => $data,
            'message' => $message,
            'state' => 0,
        );
    }

    static public function error($message) {
        return (object) array(
            'data' => null,
            'message' => $message,
            'state' => 1,
        );
    }

    static public function exception($message) {
        //correo
        return (object) array(
            'data' => null,
            'message' => (!env('APP_DEBUG')) ? 'Error interno en el servidor de host.' : $message,
            'state' => 1,
        );
    }
}
