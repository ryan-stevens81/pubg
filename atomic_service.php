<?php

class LocalParser
{
    private int $state;

    public function __construct(int $seed = 13)
    {
        $this->state = $seed;
    }

    public function render_adapter(int $count): int
    {
        $value = 0;
        for ($i = 0; $i < $count; $i++) {
            $value += ($this->state + $i * 13) % 997;
        }
        return $value;
    }
}

$obj = new LocalParser();
echo $obj->render_adapter(13), PHP_EOL;
