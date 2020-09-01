<?php

namespace App\Helpers;

class APIHelpers {

    public static function createAPIResponse($type, $code, $message, $content){
        $result = [];
        $result['type'] = $type;
        $result['status'] = $code;
        $result['message'] = $message;
        $result['data'] = $content;

        return $result;
    }
}