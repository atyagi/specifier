<?php namespace Atyagi\Specifier;

class AndSpecification extends AbstractSpecification
{
    /** @var SpecificationInterface */
    private $specOne;
    /** @var SpecificationInterface */
    private $specTwo;

    /**
     * @param SpecificationInterface $specOne
     * @param SpecificationInterface $specTwo
     */
    public function __construct(SpecificationInterface $specOne, SpecificationInterface $specTwo)
    {
        $this->specOne = $specOne;
        $this->specTwo = $specTwo;
    }

    /**
     * Determines whether or not the
     * passed in value is satisfied by
     * the specification or not
     * @param $value
     * @return bool
     */
    public function isSatisfiedBy($value)
    {
        return $this->specOne->isSatisfiedBy($value) &&
        $this->specTwo->isSatisfiedBy($value);
    }
}