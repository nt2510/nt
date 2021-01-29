<?php

namespace App\Queue;

use App\Queue\Queue;
use App\Queue\ImmutableQueue;

class EmptyQueue implements Queue{
    public function enQueue($value)
    {
        return new ImmutableQueue(ImmutableStack::createEmpty()->push($value),ImmutableStack::createEmpty(),1);
    }

    // Removes the element at the beginning of the immutable queue, and returns the new queue.
    public function deQueue()
    {
        throw new \Exception('queue is empty, can not pop');
    }

    public function head()
    {
        throw new \Exception('queue is empty, can not head');
    }

    public function isEmpty()
    {
        return true;
    }
}
