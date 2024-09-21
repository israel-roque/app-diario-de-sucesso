<?php

function validate(array $fields)
{
    $request = request();
    $validate = [];

    foreach ($fields as $field => $type) {
        
        switch ($type) {
            case 's':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_STRING);
                break;
            case 'e':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_EMAIL);
                break;
            case 'i':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_NUMBER_INT);
                break;
            case 'f':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_NUMBER_FLOAT);
                break;
        }
    }

    return (object) $validate;
}


function isEmpty()
{
    $request = request();

    $empty = false;

    foreach ($request as $field => $value) {
        
        if (empty($request[$field])) {
            $empty = true;
        }
    }

    return $empty;
}


function isLogged()
{
    return (!isset($_SESSION['logged']) || $_SESSION['logged'] != true);
}   