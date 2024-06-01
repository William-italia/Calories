<?php


function dd($dump)
{
    var_dump($dump);
    die();
}

function request()
{
    $request = $_SERVER['REQUEST_METHOD'];

    return $request === 'POST' ? $_POST : $_GET;
}
