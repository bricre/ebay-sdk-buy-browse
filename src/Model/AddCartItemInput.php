<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the <b>addItems</b> request.
 */
class AddCartItemInput extends AbstractModel
{
    /**
     * The eBay RESTful identifier of the item you want added to the cart. <br /><br />
     * <b>RESTful Item ID Format:
     * </b><code>v1</code>|<code><i>#</i></code>|<code><i>#</i></code> <br /><b> For
     * example: </b> <br /><code>v1|2**********2|0</code> <br
     * /><code>v1|1**********2|4**********2</code> <br /><br />For more information
     * about item ID for RESTful APIs, see the <a
     * href="/api-docs/buy/static/api-browse.html#Legacy">Legacy API compatibility</a>
     * section of the <i>Buy APIs Overview</i>.<br /><br /><b> Maximum number of items
     * in a cart: </b> 100.
     *
     * @var string
     */
    public $itemId = null;

    /**
     * The number of this item the buyer wants to purchase. If this value is greater
     * than the number available, the service will change this value to the number
     * available. If this happens, a warning is returned.<br /><br /><b> Maximum: </b>
     * <i>number available</i>.
     *
     * @var int
     */
    public $quantity = null;
}
