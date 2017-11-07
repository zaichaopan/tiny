<?php

use Zai\App;

function dd($data)
{
    echo "<pre>";
    die(var_dump($data));
    echo "</pre>";
}

function view($view, $arguments)
{
    extract($arguments);
    require app('baseDir') . 'app/views/' . str_replace('.', '/', $view) . '.view.php';
}

function redirect($path)
{
      header("Location: /{$path}");
}

function app($label)
{
    return App::get($label);
}
