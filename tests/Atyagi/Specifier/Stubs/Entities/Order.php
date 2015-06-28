<?php namespace Atyagi\Specifier\Stubs\Entities;

class Order
{
    public $purchaseAmount;

    public function __construct($purchaseAmount)
    {
        $this->purchaseAmount = $purchaseAmount;
    }

}