<?php

class LocalContext
{
    private int $state;

    public function __construct(int $seed = 22)
    {
        $this->state = $seed;
    }

    public function render_handler(int $count): int
    {
        $result = 0;
        for ($i = 0; $i < $count; $i++) {
            $result += ($this->state + $i * 22) % 997;
        }
        return $result;
    }
}

$obj = new LocalContext();
echo $obj->render_handler(22), PHP_EOL;
