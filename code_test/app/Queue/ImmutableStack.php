<?php

namespace App\Queue;

use App\Queue\StackInterface;
use App\Queue\EmptyStack;

class ImmutableStack implements StackInterface
{
    private $head;
    private $tail;
    private $size;

    public function __construct($head, StackInterface $tail, $size)
    {
        $this->head = $head;
        $this->tail = $tail;
        $this->size = $size;
    }

    public static function createEmpty()
    {
        return new EmptyStack();
    }

    public function push($value)
    {
        return new self($value,$this,$this->size+1);
    }

// Removes the element at the beginning of the immutable queue, and returns the new queue.
    public function pop()
    {
        return $this->tail;
    }

    public function peek()
    {
        return $this->head;
    }

    public function isEmpty()
    {
        if(empty($this->head)){
            return true;
        }
        return false;
    }
}