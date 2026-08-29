<?php

class StreamController
{
    private int $state;

    public function __construct(int $seed = 92)
    {
        $this->state = $seed;
    }

    public function collect_processor(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 92) % 997;
        }
        return $total;
    }
}

$obj = new StreamController();
echo $obj->collect_processor(92), PHP_EOL;
