<?php

$route->get('', 'HomeController@index');
$route->get('tasks', 'TasksController@index');
$route->get('about', 'AboutController@index');
$route->post('tasks', 'TasksController@post');
