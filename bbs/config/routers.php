<?php

use \NoahBuscher\Macaw\Macaw;

Macaw::get('mongo', '\App\Home\MongoController@index');

Macaw::get('job', '\App\Home\JobController@index');
Macaw::get('comment', '\App\Home\CommentController@post');
Macaw::get('wx', '\App\Home\WxController@index');


Macaw::dispatch();