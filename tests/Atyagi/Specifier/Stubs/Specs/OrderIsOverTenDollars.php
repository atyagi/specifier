<?php namespace Atyagi\Specifier\Stubs\Specs;

use Atyagi\Specifier\AbstractSpecification;
use Atyagi\Specifier\Stubs\Entities\Order;

class OrderIsOverTenDollars extends AbstractSpecification
{
    /**
     * Determines whether or not the
     * passed in value is satisfied by
     * the specification or not
     * @param Order $order
     * @return bool
     */
    public function isSatisfiedBy($order)
    {
        return $order->purchaseAmount > 10;
    }
}