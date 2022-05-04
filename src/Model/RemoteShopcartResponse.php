<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields and containers for the member's eBay cart
 * information.
 */
class RemoteShopcartResponse extends AbstractModel
{
    /**
     * An array of the items in the member's eBay cart.
     *
     * @var \Ebay\Buy\Browse\Model\CartItem[]
     */
    public $cartItems = null;

    /**
     * This is the cost of all the items in the member's eBay cart. This does not
     * include taxes, shipping costs, discounts, etc. It is the sum of each item's <b>
     * price</b> * <b> quantity</b>.
     *
     * @var \Ebay\Buy\Browse\Model\Amount
     */
    public $cartSubtotal = null;

    /**
     * The URL of the member's eBay cart.
     *
     * @var string
     */
    public $cartWebUrl = null;

    /**
     * An array of items in the cart that are unavailable. This can be for a variety of
     * reasons such as, when the listing has ended or the item is out of stock. Because
     * a cart never expires, these items will remain in the cart until they are
     * removed.
     *
     * @var \Ebay\Buy\Browse\Model\CartItem[]
     */
    public $unavailableCartItems = null;

    /**
     * An array of warning messages. These type of errors do not prevent the call from
     * executing but should be checked.
     *
     * @var \Ebay\Buy\Browse\Model\Error[]
     */
    public $warnings = null;
}
