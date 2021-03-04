<?php

class Money
{
    protected $createdAt;
    protected $totalMoney;

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getTotalMoney()
    {
        return $this->totalMoney;
    }

}