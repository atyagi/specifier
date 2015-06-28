<?php namespace Atyagi\Specifier\Stubs\Specs;

use Atyagi\Specifier\AbstractSpecification;
use Atyagi\Specifier\Stubs\Entities\Customer;

class CustomerIsPremium extends AbstractSpecification
{
    /**
     * Determines whether or not the
     * passed in value is satisfied by
     * the specification or not
     * @param Customer $customer
     * @return bool
     */
    public function isSatisfiedBy($customer)
    {
        return $customer->isPremium;
    }
}