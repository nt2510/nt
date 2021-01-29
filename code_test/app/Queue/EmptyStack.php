<?php

namespace App\Queue;

use App\Queue\StackInterface;

class EmptyStack implements StackInterface{
    public function push($value)
    {
        return new ImmutableStack($value,$this,1);
    }

    // Removes the element at the beginning of the immutable queue, and returns the new queue.
    public function pop()
    {
        throw new \Exception('stack is empty, can not pop');
    }

    public function peek()
    {
        throw new \Exception('stack is empty, can not peek');
    }

    public function isEmpty()
    {
        return true;
    }
}
