<?php

namespace Ebay\Buy\Browse\Api;

use Ebay\Buy\Browse\Model\AddCartItemInput;
use Ebay\Buy\Browse\Model\RemoteShopcartResponse;
use Ebay\Buy\Browse\Model\RemoveCartItemInput;
use Ebay\Buy\Browse\Model\UpdateCartItemInput;

class Cart extends AbstractAPI
{
    /**
     * <span class="tablenote"><b>Note: </b><img
     * src="/cms/img/docs/experimental-icon.svg" class="legend-icon experimental-icon"
     * alt="Experimental Release" title="Experimental Release" alt="Experimental
     * Release" title="Experimental Release" />  This is an <a
     * href="https://developer.ebay.com/api-docs/static/versioning.html#experimental">Experimental</a>
     * method that is available as a <a
     * href="https://developer.ebay.com/api-docs/static/versioning.html#limited"
     * target="_blank"> <img src="/cms/img/docs/partners-api.svg" class="legend-icon
     * partners-icon" title="Limited Release"  alt="Limited Release" />(Limited
     * Release)</a> to select developers approved by business units.</span>  <p>This
     * method creates an eBay cart for the eBay member, if one does not exist, and adds
     * items to that cart. Because a cart never expires, any item added to the cart
     * will remain in the cart until it is removed.  <br /><br />To use this method,
     * you must submit a RESTful item ID and the quantity of the item. If the <b>
     * quantity</b> value is greater than the number of available, the <b> quantity</b>
     * value is changed to the number available and a warning is returned. For example,
     * if there are 15 baseballs available and you set the <b> quantity</b> value to
     * 50, the service automatically changes the value of <b>quantity</b> to 15.    <br
     * /><br />The response returns all the items in the eBay member's cart; items
     * added to the cart while on ebay.com as well as items added to the cart using the
     * Browse API.   The quantity and state of an item changes often. If the item
     * becomes "unavailable" such as, when the listing has ended or the item is out of
     * stock, whether it has just been added to the cart or has been in the cart for
     * some time, the item will be returned in the <b> unavailableCartItems</b>
     * container.</p>       <p span class="tablenote"><b>Note: </b>There are
     * differences between how legacy APIs, such as Finding, and RESTful APIs, such as
     * Browse, return the identifier of an "item" and what the item ID represents. If
     * you have an item ID from one of the legacy APIs, you can use the legacy item ID
     * with the <a
     * href="/api-docs/buy/browse/resources/item/methods/getItemByLegacyId">
     * getItemByLegacyId</a> method to retrieve the RESTful ID for that item. For more
     * information about how to use legacy IDs with the Buy APIs, see <a
     * href="/api-docs/buy/static/api-browse.html#Legacy">Legacy API compatibility</a>
     * in the Buying Integration guide.</p>           <h3><b>URLs for this
     * method</b></h3>           <p><ul>  <li><b> Production URL: </b>
     * <code>https://api.ebay.com/buy/browse/v1/shopping_cart/add_item</code></li>
     *       <li><b> Sandbox URL:
     * </b><code>https://api.sandbox.ebay.com/buy/browse/v1/shopping_cart/add_item</code>
     *  <br /><br /><b>Note: </b>This method is not available in the eBay API
     * Explorer.</li>    </ul>    </p>            <h3><b>Restrictions </b></h3> <ul>
     * <li>This method can be used only for eBay members.</li>  <li>You can only add
     * FIXED_PRICE items.  </li> </ul> <p>For a list of supported sites and other
     * restrictions, see <a href="/api-docs/buy/browse/overview.html#API">API
     * Restrictions</a>.</p>.
     *
     * @param AddCartItemInput $Model
     *
     * @return RemoteShopcartResponse
     */
    public function addItem(AddCartItemInput $Model): RemoteShopcartResponse
    {
        return $this->request(
        'addItem',
        'POST',
        'shopping_cart/add_item',
        $Model->getArrayCopy(),
        [],
        []
        );
    }

    /**
     * <span class="tablenote"><b>Note: </b><img
     * src="/cms/img/docs/experimental-icon.svg" class="legend-icon experimental-icon"
     * alt="Experimental Release" title="Experimental Release" />  This is an <a
     * href="https://developer.ebay.com/api-docs/static/versioning.html#experimental">experimental</a>
     * method that is available as a <a
     * href="https://developer.ebay.com/api-docs/static/versioning.html#limited"
     * target="_blank"> <img src="/cms/img/docs/partners-api.svg" class="legend-icon
     * partners-icon" title="Limited Release"  alt="Limited Release" />(Limited
     * Release)</a> to select developers approved by business units.</span>    <p>This
     * method retrieves all the items in the eBay member's cart; items added to the
     * cart while on ebay.com as well as items added to the cart using the Browse API.
     * There are no URI parameters or request payload.  <br /><br />The response
     * returns the summary details of all the items in the eBay member's cart; items
     * added to the cart while on ebay.com as well as items added to the cart using the
     * Browse API. If the cart is empty, the response is HTTP 204. </p>   <br /><br />
     * The quantity and state of an item changes often. If the item becomes
     * "unavailable" such as, when the listing has ended or the item is out of stock,
     * the item will be returned in the <b> unavailableCartItems</b> container.
     *                 <h3><b>URLs for this method</b></h3>           <p><ul>  <li><b>
     * Production URL: </b>
     * <code>https://api.ebay.com/buy/browse/v1/shopping_cart/</code></li>
     * <li><b> Sandbox URL:
     * </b><code>https://api.sandbox.ebay.com/buy/browse/v1/shopping_cart/</code>  <br
     * /><br /><b>Note: </b>This method is not available in the eBay API Explorer.</li>
     *    </ul>    </p>         <h3><b>Restrictions </b></h3> <p>This method can be
     * used only for eBay members. For a list of supported sites and other
     * restrictions, see <a href="/api-docs/buy/browse/overview.html#API">API
     * Restrictions</a>.</p>.
     *
     * @return RemoteShopcartResponse
     */
    public function get(): RemoteShopcartResponse
    {
        return $this->request(
        'getShoppingCart',
        'GET',
        'shopping_cart/',
        null,
        [],
        []
        );
    }

    /**
     * <span class="tablenote"><b>Note: </b><img
     * src="/cms/img/docs/experimental-icon.svg" class="legend-icon experimental-icon"
     * alt="Experimental Release" title="Experimental Release" />  This is an <a
     * href="https://developer.ebay.com/api-docs/static/versioning.html#experimental">experimental</a>
     * method that is available as a <a
     * href="https://developer.ebay.com/api-docs/static/versioning.html#limited"
     * target="_blank"> <img src="/cms/img/docs/partners-api.svg" class="legend-icon
     * partners-icon" title="Limited Release"  alt="Limited Release" />(Limited
     * Release)</a> to select developers approved by business units.</span>  <p>This
     * method removes a specific item from the eBay member's cart. You specify the ID
     * of the item in the cart (<b>cartItemId</b>) that you want to remove.   <br /><br
     * />The response returns all the items in the eBay member's cart; items added to
     * the cart while on ebay.com as well as items added to the cart using the Browse
     * API. If you remove the last item in the cart, the response is HTTP 204.<br /><br
     * />  The quantity and state of an item changes often. If the item becomes
     * "unavailable" such as, when the listing has ended or the item is out of stock,
     * the item will be returned in the <b> unavailableCartItems</b> container.</p>  <p
     * span class="tablenote"><b>Note: </b> The  <b> cartItemId</b> is not the same as
     * the item ID. The <b> cartItemId</b> is the identifier of a specific item
     * <i>in</i> the cart and is generated when the item was added to the
     * cart.</span></p>               <h3><b>URLs for this method</b></h3>
     * <p><ul>  <li><b> Production URL: </b>
     * <code>https://api.ebay.com/buy/browse/v1/shopping_cart/remove_item</code></li>
     *          <li><b> Sandbox URL:
     * </b><code>https://api.sandbox.ebay.com/buy/browse/v1/shopping_cart/remove_item</code>
     *  <br /><br /><b>Note: </b>This method is not available in the eBay API
     * Explorer.</li>    </ul>    </p>         <h3><b>Restrictions </b></h3> <p>This
     * method can be used only for eBay members. For a list of supported sites and
     * other restrictions, see <a href="/api-docs/buy/browse/overview.html#API">API
     * Restrictions</a>.</p>.
     *
     * @param RemoveCartItemInput $Model
     *
     * @return RemoteShopcartResponse
     */
    public function removeItem(RemoveCartItemInput $Model): RemoteShopcartResponse
    {
        return $this->request(
        'removeItem',
        'POST',
        'shopping_cart/remove_item',
        $Model->getArrayCopy(),
        [],
        []
        );
    }

    /**
     * <span class="tablenote"><b>Note: </b><img
     * src="/cms/img/docs/experimental-icon.svg" class="legend-icon experimental-icon"
     * alt="Experimental Release" title="Experimental Release" />  This is an <a
     * href="https://developer.ebay.com/api-docs/static/versioning.html#experimental">experimental</a>
     * method that is available as a <a
     * href="https://developer.ebay.com/api-docs/static/versioning.html#limited"
     * target="_blank"> <img src="/cms/img/docs/partners-api.svg" class="legend-icon
     * partners-icon" title="Limited Release"  alt="Limited Release" />(Limited
     * Release)</a> to select developers approved by business units.</span>  <p>This
     * method updates the quantity value of a specific item in the eBay member's cart.
     * You specify the ID of the item in the cart (<b>cartItemId</b>) and the new value
     * for the quantity. If the <b> quantity</b> value is greater than the number of
     * available, the <b> quantity</b> value is changed to the number available and a
     * warning is returned. For example, if there are 15 baseballs available and you
     * set the <b> quantity</b> value to 50, the service automatically changes the
     * value of <b>quantity</b> to 15.   <br /><br />The response returns all the items
     * in the eBay member's cart; items added to the cart while on ebay.com as well as
     * items added to the cart using the Browse API.   The quantity and state of an
     * item changes often. If the item becomes "unavailable" such as, the listing has
     * ended or the item is out of stock, the item will be returned in the <b>
     * unavailableCartItems</b> container.</p>  <p span class="tablenote"><b>Note: </b>
     * The  <b> cartItemId</b> is not the same as the item ID. The <b> cartItemId</b>
     * is the identifier of a specific item <i>in</i> the cart and is generated when
     * the item was added to the cart.</span></p>                 <h3><b>URLs for this
     * method</b></h3>           <p><ul>  <li><b> Production URL: </b>
     * <code>https://api.ebay.com/buy/browse/v1/shopping_cart/update_quantity</code></li>
     *            <li><b> Sandbox URL:
     * </b><code>https://api.sandbox.ebay.com/buy/browse/v1/shopping_cart/update_quantity</code>
     *  <br /><br /><b>Note: </b>This method is not available in the eBay API
     * Explorer.</li>    </ul>    </p>         <h3><b>Restrictions </b></h3> <p>This
     * method can be used only for eBay members. For a list of supported sites and
     * other restrictions, see <a href="/api-docs/buy/browse/overview.html#API">API
     * Restrictions</a>.</p>.
     *
     * @param UpdateCartItemInput $Model
     *
     * @return RemoteShopcartResponse
     */
    public function updateQuantity(UpdateCartItemInput $Model): RemoteShopcartResponse
    {
        return $this->request(
        'updateQuantity',
        'POST',
        'shopping_cart/update_quantity',
        $Model->getArrayCopy(),
        [],
        []
        );
    }
}
