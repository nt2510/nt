<?php

namespace App\Queue;

use App\Queue\ImmutableQueue;
use \PHPUnit\Framework\TestCase;

class ImmutableQueueTest extends TestCase{

    private function createQueue(array $values = array())
    {
        $queue = ImmutableQueue::createEmpty();
        foreach ($values as $value) {
            $queue = $queue->enQueue($value);
        }

        return $queue;
    }

    public function testEmtpyQueueIsEmpty()
    {
        $this->assertTrue($this->createQueue()->isEmpty());
    }

    public function testNotEmptyQueueIsNotEmpty()
    {
        $this->assertFalse($this->createQueue([1,2,3])->isEmpty());
    }

    public function testAfterDequeueIsNotEmtpy()
    {
        $this->assertFalse($this->createQueue([1,2,3])->deQueue()->deQueue()->isEmpty());
    }

    public function testAfterFullDequeueIsEmpty()
    {
        $this->assertTrue($this->createQueue([1,2,3])->deQueue()->deQueue()->deQueue()->isEmpty());
    }

    public function testEnqueueDequeueInOrder()
    {
        $queue = $this->createQueue([1,2,3]);
        $this->assertEquals(1,$queue->head());

        $queue = $queue->deQueue();
        $this->assertEquals(2,$queue->head());

        $queue = $queue->deQueue();
        $this->assertEquals(3,$queue->head());
    }

    public function testEnqueueImmutable()
    {
        $queue = $this->createQueue([1]);

        $queue->enQueue([2]);

        $this->assertEquals(1,$queue->head());

        $this->assertTrue($queue->deQueue()->isEmpty());
    }

    public function testDeQueneImmutable()
    {
        $queue = $this->createQueue([1]);
        $this->assertEquals(1, $queue->head());

        $queue->deQueue();
        $this->assertEquals(1, $queue->head());
    }

    public function testInqueueDequeue()
    {
        $queue = $this->createQueue();

        $queue = $queue->enQueue(1)->enQueue(2);
        $this->assertEquals(1,$queue->head());

        $queue = $queue->deQueue();
        $this->assertEquals(2,$queue->head());

        $queue = $queue->enQueue(3)->enQueue(4);
        $this->assertEquals(2,$queue->head());

        $queue = $queue->deQueue();
        $this->assertEquals(3,$queue->head());
    }



}
