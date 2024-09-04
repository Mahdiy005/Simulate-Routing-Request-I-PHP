<?php

declare(strict_types=1);

use App\Routes;

require __DIR__.'/vendor/autoload.php';


$route = new Routes();

$route->addRoute('GET', '/oop3/blog', function(){
  echo 'Blog';
  // exit();
})->addRoute('POST', '/oop3/ok',function(){
  echo 'OK';
  // exit();
})->addRoute('GET', '/oop3/login', function(){
  echo 'Login';
  // exit();
});

$route->matchRoute();