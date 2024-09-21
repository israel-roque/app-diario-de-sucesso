<?php

function loadPage()
{
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);

    $page = (!$page) ? 'pages/login.php' : 'pages/' . $page . '.php';

    if (!file_exists($page)) {
        throw new Exception('Opps... houve um erro inesperado, entre em contato com o administrador e informe o erro acima', 1);
    }

    return $page;
}