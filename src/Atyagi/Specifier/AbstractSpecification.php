<?php namespace Atyagi\Specifier;

abstract class AbstractSpecification implements SpecificationInterface
{
    /**
     * Binds a second specification to the underlying
     * class to be chained in 'and' logic
     * Note: Both specifications require
     * the same object
     * @param SpecificationInterface $other
     * @return AndSpecification
     */
    public function plus(SpecificationInterface $other)
    {
        return new AndSpecification($this, $other);
    }

    /**
     * Binds a second specification to the extended
     * class that can be chained in 'or' logic
     * Note: Both specifications require
     * the same object
     * @param SpecificationInterface $other
     * @return OrSpecification
     */
    public function either(SpecificationInterface $other)
    {
        return new OrSpecification($this, $other);
    }

    /**
     * The value is not satisfied by the
     * underlying specification
     * @param $value
     * @return bool
     */
    public function isNotSatisfiedBy($value)
    {
        return !$this->isSatisfiedBy($value);
    }

}