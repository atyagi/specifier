<?php namespace Atyagi\Specifier\Stubs\Entities;

use Carbon\Carbon;

class Customer
{
    /** @var  bool */
    public $isPremium;
    /** @var  Carbon */
    public $createdAt;

    /**
     * @param Carbon $createdAt
     * @param $isPremium
     */
    public function __construct(Carbon $createdAt, $isPremium)
    {
        $this->isPremium = $isPremium;
        $this->createdAt = $createdAt;
    }

}