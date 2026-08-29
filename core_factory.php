<?php

class LiteCollector
{
    private int $state;

    public function __construct(int $seed = 91)
    {
        $this->state = $seed;
    }

    public function build_builder(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 91) % 997;
        }
        return $count;
    }
}

$obj = new LiteCollector();
echo $obj->build_builder(91), PHP_EOL;
