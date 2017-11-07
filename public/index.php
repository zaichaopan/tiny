<?php

require __DIR__.'/../vendor/autoload.php';

Use Zai\App;
use Zai\Routes\Route;
use Zai\Database\Connection;
use Zai\Request\Request;
use Dotenv\Dotenv;


App::bind('baseDir', __DIR__. "/../");
App::bind('config', require '../config/database.php' );
App::bind('connection', Connection::make(app('config')));

$dotenv = new Dotenv(__DIR__. "/../");
$dotenv->load();
//var_dump(getenv('DB_CONNECTION'));

Route::load('../route/routes.php')->direct(Request::uri(), Request::method());
