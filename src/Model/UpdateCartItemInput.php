<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the <b>updateQuantity</b> request.
 */
class UpdateCartItemInput extends AbstractModel
{
    /**
     * The identifier of the item in the cart to be updated. This ID is generated when
     * the item was added to the cart.
     *
     * @var string
     */
    public $cartItemId = null;

    /**
     * The new quantity for the item that is being updated.
     *
     * @var int
     */
    public $quantity = null;
}
