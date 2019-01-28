<?php
/**
 * Created by PhpStorm.
 * User: Best
 * Date: 1/24/2019
 * Time: 3:30 AM
 */
declare(strict_types = 1);

/**
 * use this package for dependency injection
 * resolving the class dependencies
 */
$injector = new \Auryn\Injector;
$injector->alias('Http\Request', 'Http\HttpRequest');
$injector->share('Http\HttpRequest');
$injector->define('Http\HttpRequest', [
    ':get' => $_GET,
    ':post' => $_POST,
    ':cookies' => $_COOKIE,
    ':files' => $_FILES,
    ':server' => $_SERVER,
]);

$injector->alias('Http\Response', 'Http\HttpResponse');
$injector->share('Http\HttpResponse');
$injector->alias('App\Repository\Resturant', 'App\Repository\ResturantRepository');
return $injector;