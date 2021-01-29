<?php

namespace App\Queue;

use App\Queue\Queue;
use App\Queue\EmptyQueue;

class ImmutableQueue implements Queue
{
    private $incoming;
    private $outgoing;
    private $size;

    public function __construct(StackInterface $incoming, StackInterface $outgoing, $size)
    {
        $this->incoming = $incoming;
        $this->outgoing = $outgoing;

        /*if(!$incoming->isEmpty() && $outgoing->isEmpty()){
            $this->incoming = ImmutableStack::createEmpty();
            $this->outgoing = $this->flip();
        }else{
            $this->incoming = $incoming;
            $this->outgoing = $outgoing;
        }*/

        $this->size = $size;
    }

    public static function createEmpty()
    {
        return new EmptyQueue();
    }

    public function enQueue($value)
    {
        return new self($this->incoming->push($value),$this->outgoing,$this->size+1);
    }

    // Removes the element at the beginning of the immutable queue, and returns the new queue.
    public function deQueue()
    {
        /*var_dump('#outgoing#');
        var_dump($this->outgoing);
        var_dump('#outgoing empty#'.$this->outgoing->isEmpty());
        var_dump('#incoming#');
        var_dump($this->incoming);
        var_dump('#incoming empty#'.$this->incoming->isEmpty());*/
        if($this->outgoing->isEmpty() && $this->incoming->isEmpty()){
            return self::createEmpty();
        }
        if($this->outgoing->isEmpty()){
            //var_dump('flip active');
            $fliped = $this->flip();
            //var_dump('#fliped#');
            //var_dump($fliped);
            $popFliped = $fliped->pop();
            //var_dump('#$popFliped#');
            //var_dump($popFliped);
            //var_dump(new self(ImmutableStack::createEmpty(),$popFliped,$this->size-1));
            return new self(ImmutableStack::createEmpty(),$popFliped,$this->size-1);
        }
        /*if($this->outgoing->isEmpty()){
            $fliped = $this->flip();
            $this->outgoing = $fliped;
            //var_dump('#fliped#');
            //var_dump($fliped);
            //$popFliped = $fliped->pop();
            $this->outgoing = $this->outgoing->pop();
            //var_dump('#$popFliped#');
            //var_dump($popFliped);
            //var_dump(new self(ImmutableStack::createEmpty(),$popFliped,$this->size-1));
            return new self(ImmutableStack::createEmpty(),$this->outgoing,$this->size-1);
        }*/
        $pop = $this->outgoing->pop();

        return new self($this->incoming, $pop, $this->size-1);
    }

    private function flip()
    {
        $flipStack = ImmutableStack::createEmpty();
        /*while(!$this->incoming->isEmpty()){
            $flipStack = $flipStack->push($this->incoming->peek());
            $this->incoming = $this->incoming->pop();
        }*/

        $incoming = $this->incoming;
        while(!$incoming->isEmpty()){
            $flipStack = $flipStack->push($incoming->peek());
            $incoming = $incoming->pop();
        }
        return $flipStack;
    }

    public function head()
    {
        /*var_dump('outgoing');
        var_dump($this->outgoing);
        var_dump('incoming');
        var_dump($this->incoming);*/
        try{
            if($this->outgoing->isEmpty() && !$this->incoming->isEmpty()){
                $fliped = $this->flip();
                //$this->outgoing = $fliped;
                return $fliped->peek();
            }
            //var_dump('outgoing flip');
            //var_dump($this->outgoing);
            return $this->outgoing->peek();
        }catch(\Exception $e){
            throw new \Exception('queue is empty, can not head');
        }

    }

    public function isEmpty()
    {
        if($this->incoming->isEmpty() && $this->outgoing->isEmpty()){
            return true;
        }
        return false;
    }
}