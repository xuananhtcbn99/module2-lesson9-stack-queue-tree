<?php

class Queue
{
    public $queue;
    public $limit;

    /**
     * @param $stack
     * @param $limit
     */
    public function __construct($limit=10)
    {
        $this->queue = [];
        $this->limit = $limit;
    }

    public function enqueue($data)
    {
        if (!$this->isFull()) {
            array_push($this->queue, $data);
        } else {
            echo "Queue is full";
        }
    }


    public function dequeue()
    {
        if ($this->iSEmpty()) {
            echo "Stack is empty!!";
        } else {
            return array_shift($this->queue);
        }
    }

//    Hien thi ptu tren cung
    public function top()
    {
        if (!$this->iSEmpty()) {
            return $this->queue[0];
        }else {
            return "Có gì đâu mà soi";
        }
    }

    public function iSEmpty()
    {
        return count($this->queue)<=0;
    }

    public function isFull()
    {
        return count($this->queue) >= $this->limit;
    }

}