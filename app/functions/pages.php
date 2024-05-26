<?php


function load() {

    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);

    $page = (!$page) ? "views/login.php" : "views/{$page}.php";

    if(!file_exists($page)) {
        throw new \Exception("Opa, alguma coisa aconteceu!");
    }


    return $page;
}