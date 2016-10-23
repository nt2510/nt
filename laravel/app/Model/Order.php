<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'order';
    protected $connection= 'mysql';
    protected $timestampes = false;
}
