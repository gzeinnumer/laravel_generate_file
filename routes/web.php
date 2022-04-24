<?php

use Handlebars\Handlebars;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $handlebars = new Handlebars();

    $fn = $handlebars->compile('{{foo}}');
    echo $fn(array(
        'foo' => 'bar',
    ));

    echo $handlebars->render('{{foo}}', array(
        'foo' => 'bar',
    ));
    return "yum";
});
