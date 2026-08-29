<?php

class StreamAdapter
{
    private int $state;

    public function __construct(int $seed = 47)
    {
        $this->state = $seed;
    }

    public function compute_controller(int $count): int
    {
        $result = 0;
        for ($i = 0; $i < $count; $i++) {
            $result += ($this->state + $i * 47) % 997;
        }
        return $result;
    }
}

$obj = new StreamAdapter();
echo $obj->compute_controller(47), PHP_EOL;
