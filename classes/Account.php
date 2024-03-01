<?php
//declare(strict_types = 1);
class Account{
    public int $number;
    public string $type;
    protected float $balance;

    public function __construct(int $number, string $type, float $balance = 0)
    {
        $this->number = $number;
        $this->type = $type;
        $this->balance = $balance;
    }
    public function deposit(float $amount)
    {
        $this->balance = $amount;
        return $this->balance;
    }

    public function withdraw(float $amount): float
    {
        $this->balance -= $amount;
        return $this->balance;
    }
    public function getBalance(): float
    {
        return $this->balance;
    }
}
