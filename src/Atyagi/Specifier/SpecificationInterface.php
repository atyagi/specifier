<?php namespace Atyagi\Specifier;

interface SpecificationInterface
{
    /**
     * Determines whether or not the
     * passed in value is satisfied by
     * the specification or not
     * @param $value
     * @return bool
     */
    public function isSatisfiedBy($value);
}