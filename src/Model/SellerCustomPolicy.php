<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The container for custom policies that apply to a listed item.
 */
class SellerCustomPolicy extends AbstractModel
{
    /**
     * The seller-defined description of the policy.
     *
     * @var string
     */
    public $description = null;

    /**
     * The seller-defined label for an individual custom policy.
     *
     * @var string
     */
    public $label = null;

    /**
     * The type of custom policy, such as PRODUCT_COMPLIANCE or TAKE_BACK. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:SellerCustomPolicyTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $type = null;
}
