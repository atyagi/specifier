<?php namespace Atyagi\Specifier;

use Atyagi\Specifier\Stubs\Entities\Customer;
use Atyagi\Specifier\Stubs\Specs\CustomerIsPremium;
use Atyagi\Specifier\Stubs\Specs\CustomerRegisteredBeforeLastWeek;
use Carbon\Carbon;

class ChainedAndSpecificationTest extends \PHPUnit_Framework_TestCase
{
    public function testAndSpecification_SucceedsWhenBothAreTrue()
    {
        $customer = new Customer(Carbon::now()->subWeeks(3), true);
        $this->assertTrue($this->applySpecification($customer));
    }

    public function testAndSpecification_FailsWhenOneIsFalse()
    {
        $customer = new Customer(Carbon::now(), true);
        $this->assertFalse($this->applySpecification($customer));
    }

    public function testAndSpecification_FailsWhenBothAreFalse()
    {
        $customer = new Customer(Carbon::now(), false);
        $this->assertFalse($this->applySpecification($customer));
    }

    private function applySpecification($customer)
    {
        return (new CustomerIsPremium())
            ->plus(new CustomerRegisteredBeforeLastWeek())
            ->isSatisfiedBy($customer);
    }

}