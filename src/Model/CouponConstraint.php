<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used to provide the expiration date of a coded coupon.
 */
class CouponConstraint extends AbstractModel
{
    /**
     * This timestamp provides the expiration date of the coded coupon.
     *
     * @var string
     */
    public $expirationDate = null;
}
