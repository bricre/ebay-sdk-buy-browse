<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

class PaymentMethod extends AbstractModel
{
    /**
     * The payment method type, such as credit card or cash. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:PaymentMethodTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $paymentMethodType = null;

    /**
     * The payment method brands, including the payment method brand type and logo
     * image.
     *
     * @var \Ebay\Buy\Browse\Model\PaymentMethodBrand[]
     */
    public $paymentMethodBrands = null;

    /**
     * The payment instructions for the buyer, such as <i>cash in person</i> or
     * <i>contact seller</i>.
     *
     * @var string[]|
     */
    public $paymentInstructions = null;

    /**
     * The seller instructions to the buyer, such as <i>accepts credit cards</i> or
     * <i>see description</i>.
     *
     * @var string[]|
     */
    public $sellerInstructions = null;
}
