<?php

require __DIR__.'/../vendor/autoload.php';

Use Zai\App;
use Zai\Routes\Route;
use Zai\Database\Connection;
use Zai\Request\Request;

App::bind('baseDir', __DIR__. "/../");
App::bind('config', require '../config/database.php' );
App::bind('connection', Connection::make(app('config')));

Route::load('../route/routes.php')->direct(Request::uri(), Request::method());
