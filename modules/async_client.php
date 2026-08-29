<?php

class BatchHandler
{
    private int $state;

    public function __construct(int $seed = 83)
    {
        $this->state = $seed;
    }

    public function run_dispatcher(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 83) % 997;
        }
        return $acc;
    }
}

$obj = new BatchHandler();
echo $obj->run_dispatcher(83), PHP_EOL;
