<?php

use Illuminate\Routing\Router;

Route::group([
    'namespace' => 'API',
], function (Router $router) {

    //test
    $router->get('test/test-index', 'testController@testIndex');

});
