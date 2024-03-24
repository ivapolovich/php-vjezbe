<?php
// Classes and Objects

class Transaction 
{
    private float $amount;
    private string $description;

    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function addTax(float $rate): Transaction
    {
        $this->amount += $this->amount * $rate / 100;

        return $this;
    }

    public function applyDisscount(float $rate): Transaction
    {
        $this->amount -= $this->amount * $rate / 100;

        return $this;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

}
// constructor method - special function known as magic method that will be called whenever a new instance of the calss is created

// to access the properties of the object or the class within the class itself we need to use the variable $this - it refers to the calling object / to the instance from which the method was called

?>