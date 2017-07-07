<?php

use \NoahBuscher\Macaw\Macaw;

Macaw::get('mongo', '\App\Home\MongoController@index');

Macaw::get('job', '\App\Home\JobController@index');
Macaw::get('comment', '\App\Home\CommentController@post');
Macaw::get('wx', '\App\Home\WxController@index');
Macaw::post('wx', '\App\Home\WxController@index');
Macaw::get('createMenu', '\App\Home\WxController@createMenu');
Macaw::get('hello', '\App\Home\WxController@hello');


Macaw::dispatch();