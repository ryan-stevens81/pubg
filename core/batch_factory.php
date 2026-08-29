<?php

class StreamHandler
{
    private int $state;

    public function __construct(int $seed = 65)
    {
        $this->state = $seed;
    }

    public function dispatch_loader(int $count): int
    {
        $acc = 0;
        for ($i = 0; $i < $count; $i++) {
            $acc += ($this->state + $i * 65) % 997;
        }
        return $acc;
    }
}

$obj = new StreamHandler();
echo $obj->dispatch_loader(65), PHP_EOL;
