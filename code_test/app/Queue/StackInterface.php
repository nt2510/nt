<?php

namespace App\Queue;

interface StackInterface{
    public function push($value);

    public function pop();

    public function peek();

    public function isEmpty();
}
