<?php

function flash($key, $message, $type = 'danger')
{
    if (!isset($_SESSION['flash'][$key])) {
        $alertClasses = 'w-100 position-absolute text-center alert alert-' . $type . ' alert-dismissible fade show';
        $alertCloseButton = '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        $_SESSION['flash'][$key] = '<div class="' . $alertClasses . '">' . $message . $alertCloseButton . '</div>'; 
    }
}

function get($key)
{
    if (isset($_SESSION['flash'][$key])) {
        $message = $_SESSION['flash'][$key];

        unset($_SESSION['flash'][$key]);

        return $message ?? '';
    }
}