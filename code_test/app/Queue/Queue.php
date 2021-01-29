<?php

namespace App\Queue;

interface Queue{
    public function enQueue($value);

    // Removes the element at the beginning of the immutable queue, and returns the new queue.
    public function deQueue();

    public function head();

    public function isEmpty();
}
