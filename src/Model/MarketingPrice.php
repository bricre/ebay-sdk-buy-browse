<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields that describe a seller discount.
 */
class MarketingPrice extends AbstractModel
{
    /**
     * This container returns the monetary amount of the seller discount.
     *
     * @var \Ebay\Buy\Browse\Model\ConvertedAmount
     */
    public $discountAmount = null;

    /**
     * This field expresses the percentage of the seller discount based on the value in
     * the <b>  originalPrice</b> container.
     *
     * @var string
     */
    public $discountPercentage = null;

    /**
     * This container returns the monetary amount of the item without the discount.
     *
     * @var \Ebay\Buy\Browse\Model\ConvertedAmount
     */
    public $originalPrice = null;

    /**
     * Indicates the pricing treatment (discount) that was applied to the price of the
     * item. <br /><br /><span class="tablenote"><b>Note: </b> The pricing treatment
     * affects the way and where the discounted price can be displayed.</span> For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:PriceTreatmentEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $priceTreatment = null;
}
