<?php namespace Atyagi\Specifier;

use Atyagi\Specifier\Stubs\Entities\Customer;
use Atyagi\Specifier\Stubs\Specs\CustomerIsPremium;
use Atyagi\Specifier\Stubs\Specs\CustomerRegisteredBeforeLastWeek;
use Carbon\Carbon;

class ChainedOrSpecificationTest extends \PHPUnit_Framework_TestCase
{
    public function testOrSpecification_SucceedsWhenBothAreTrue()
    {
        $customer = new Customer(Carbon::now()->subWeeks(3), true);
        $this->assertTrue($this->applySpecification($customer));
    }

    public function testOrSpecification_SucceedsWhenOneIsFalse()
    {
        $customer = new Customer(Carbon::now(), true);
        $this->assertTrue($this->applySpecification($customer));
    }

    public function testOrSpecification_FailsWhenBothAreFalse()
    {
        $customer = new Customer(Carbon::now(), false);
        $this->assertFalse($this->applySpecification($customer));
    }

    private function applySpecification(Customer $customer)
    {
        return (new CustomerIsPremium())
            ->either(new CustomerRegisteredBeforeLastWeek())
            ->isSatisfiedBy($customer);
    }

}