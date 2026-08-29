<?php

class LocalCache
{
    private int $state;

    public function __construct(int $seed = 48)
    {
        $this->state = $seed;
    }

    public function handle_scheduler(int $count): int
    {
        $count = 0;
        for ($i = 0; $i < $count; $i++) {
            $count += ($this->state + $i * 48) % 997;
        }
        return $count;
    }
}

$obj = new LocalCache();
echo $obj->handle_scheduler(48), PHP_EOL;
