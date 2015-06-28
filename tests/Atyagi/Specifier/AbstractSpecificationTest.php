<?php namespace Atyagi\Specifier;

use Atyagi\Specifier\Stubs\Entities\Order;
use Atyagi\Specifier\Stubs\Specs\OrderIsOverTenDollars;

class AbstractSpecificationTest extends \PHPUnit_Framework_TestCase
{
    public function testIsNotSatisfied_IsInverseOfSatisfied()
    {
        $notSatisfied = (new OrderIsOverTenDollars())->isNotSatisfiedBy(new Order(8));
        $this->assertTrue($notSatisfied);
    }
}