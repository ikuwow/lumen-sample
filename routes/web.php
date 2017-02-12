<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {

    $output = [];
    $output[] = $app->version();
    $output[] = 'locale is ' . config('app.locale');
    if ($app->environment() !== 'production') {
        $output[] = 'This is not production mode.';
    }
    return '<pre>' . implode(PHP_EOL, $output) . '</pre>';
});
