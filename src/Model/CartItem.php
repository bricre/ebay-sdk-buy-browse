<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the individual items in a cart.
 */
class CartItem extends AbstractModel
{
    /**
     * The identifier for the item being added to the cart. This is generated when the
     * item is added to the cart.
     *
     * @var string
     */
    public $cartItemId = null;

    /**
     * This is the subtotal of cost of a specific item in the cart. This does not
     * include taxes, shipping costs, discounts, etc. It is <b> price</b> * <b>
     * quantity</b>.
     *
     * @var \Ebay\Buy\Browse\Model\Amount
     */
    public $cartItemSubtotal = null;

    /**
     * The primary image of the item. This is the image that appears on the eBay view
     * item page for this item.
     *
     * @var \Ebay\Buy\Browse\Model\Image
     */
    public $image = null;

    /**
     * The RESTful identifier of the item. This identifier is generated when the item
     * was listed. <br /><br /> <b>RESTful Item ID Format:
     * </b><code>v1</code>|<code><i>#</i></code>|<code><i>#</i></code> <br /><b> For
     * example: </b><br /> <code>v1|2**********2|0</code> <br
     * /><code>v1|1**********2|4**********2</code>.
     *
     * @var string
     */
    public $itemId = null;

    /**
     * The URL of the eBay view item page for the item.
     *
     * @var string
     */
    public $itemWebUrl = null;

    /**
     * The cost of the item.
     *
     * @var \Ebay\Buy\Browse\Model\Price
     */
    public $price = null;

    /**
     * The number of this item the buyer wants to purchase.
     *
     * @var int
     */
    public $quantity = null;

    /**
     * The title of the item. This can be written by the seller or come from the eBay
     * product catalog.
     *
     * @var string
     */
    public $title = null;
}
