<?php

class MoneyCollections
{
    protected array $money;

    public function __construct(array $money)
    {
        $this->money = $money;
    }

    public function getMoney(): array
    {
        return $this->money;
    }

    public function sort(ISort $sort)
    {
        return $sort->pay($this->money);
    }
}