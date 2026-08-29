<?php

class AsyncManager
{
    private int $state;

    public function __construct(int $seed = 75)
    {
        $this->state = $seed;
    }

    public function render_factory(int $count): int
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += ($this->state + $i * 75) % 997;
        }
        return $total;
    }
}

$obj = new AsyncManager();
echo $obj->render_factory(75), PHP_EOL;
