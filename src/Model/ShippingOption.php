<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the details of a shipping provider.
 */
class ShippingOption extends AbstractModel
{
    /**
     * Any per item additional shipping costs for a multi-item purchase. For example,
     * let's say the shipping cost for a power cord is $3. But for an additional cord,
     * the shipping cost is only $1. So if you bought 3 cords, the <b> shippingCost</b>
     * would be $3 and this value would be $2 ($1 for each additional item).
     *
     * @var \Ebay\Buy\Browse\Model\ConvertedAmount
     */
    public $additionalShippingCostPerUnit = null;

    /**
     * The deadline date that the item must be purchased by in order to be received by
     * the buyer within the delivery window (<b> maxEstimatedDeliveryDate</b> and  <b>
     * minEstimatedDeliveryDate</b> fields). This field is returned only for items that
     * are eligible for 'Same Day Handling'. For these items, the value of this field
     * is what is displayed in the <b> Delivery</b> line on the View Item page.  <br
     * /><br />This value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which
     * you can convert into the local time of the buyer.
     *
     * @var string
     */
    public $cutOffDateUsedForEstimate = null;

    /**
     * If the item is being shipped by eBay's <a
     * href="https://pages.ebay.com/seller-center/shipping/global-shipping-program.html
     * ">Global Shipping Program</a>, this field returns <code>GLOBAL_SHIPPING</code>.
     * Otherwise this field is null. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:FulfilledThroughEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $fulfilledThrough = null;

    /**
     * Indicates if the seller has committed to shipping the item with eBay Guaranteed
     * Delivery. With eBay Guaranteed Delivery, the  seller is committed to getting the
     * line item to the buyer within 4 business days or less. See the <a
     * href="https://www.ebay.com/help/buying/shipping-delivery/buying-items-ebay-guaranteed-delivery?id=4641
     * ">Buying items with eBay Guaranteed Delivery</a> help topic for more details
     * about eBay Guaranteed Delivery.
     *
     * @var bool
     */
    public $guaranteedDelivery = null;

    /**
     * The <a
     * href="https://pages.ebay.com/seller-center/shipping/global-shipping-program.html
     * ">Global Shipping Program</a> import charges for this item.
     *
     * @var \Ebay\Buy\Browse\Model\ConvertedAmount
     */
    public $importCharges = null;

    /**
     * The end date of the delivery window (latest projected delivery date).  This
     * value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can
     * convert into the local time of the buyer. <br /> <br /> <span class="tablenote">
     * <b> Note: </b> For the best accuracy, always include the location of where the
     * item is be shipped in the <code> contextualLocation</code> values of the <a
     * href="/api-docs/buy/static/api-browse.html#Headers">
     * <code>X-EBAY-C-ENDUSERCTX</code></a> request header.</span>.
     *
     * @var string
     */
    public $maxEstimatedDeliveryDate = null;

    /**
     * The start date of the delivery window (earliest projected delivery date). This
     * value is returned in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can
     * convert into the local time of the buyer. <br /> <br /><span class="tablenote">
     * <b> Note: </b> For the best accuracy, always include the location of where the
     * item is be shipped in the <code> contextualLocation</code> values of the <a
     * href="/api-docs/buy/static/api-browse.html#Headers">
     * <code>X-EBAY-C-ENDUSERCTX</code></a> request header.</span>.
     *
     * @var string
     */
    public $minEstimatedDeliveryDate = null;

    /**
     * The number of items used when calculating the estimation information.
     *
     * @var int
     */
    public $quantityUsedForEstimate = null;

    /**
     * The name of the shipping provider, such as FedEx, or USPS.
     *
     * @var string
     */
    public $shippingCarrierCode = null;

    /**
     * The final shipping cost for all the items after all discounts are applied.<br
     * /><br /><span class="tablenote"><b> Note: </b>The cost does include the
     * value-added tax (VAT) for applicable jurisdictions when requested from supported
     * marketplaces. In this case, users must pass the <a
     * href="/api-docs/static/rest-request-components.html#HTTP"><code>X-EBAY-C-MARKETPLACE-ID</code></a>
     * request header specifying the supported marketplace (such as
     * <code>EBAY_GB</code>) to see the VAT-inclusive cost. For more information on
     * VAT, refer to <a
     * href="https://www.ebay.co.uk/help/listings/default/vat-obligations-eu?id=4650&st=12&pos=1&query=Your%20VAT%20obligations%20in%20the%20EU&intent=VAT">VAT
     * Obligations in the EU</a>.</span>.
     *
     * @var \Ebay\Buy\Browse\Model\ConvertedAmount
     */
    public $shippingCost = null;

    /**
     * Indicates the class of the shipping cost. <br /><br /><b> Valid Values: </b>
     * FIXED or CALCULATED <br /><br />Code so that your app gracefully handles any
     * future changes to this list.
     *
     * @var string
     */
    public $shippingCostType = null;

    /**
     * The type of shipping service. For example, USPS First Class.
     *
     * @var string
     */
    public $shippingServiceCode = null;

    /**
     * The container that returns the country and postal code of where the item is to
     * be shipped. These values come from the <code>contextualLocation</code> values in
     * the  <a href="/api-docs/buy/static/api-browse.html#Headers">
     * <code>X-EBAY-C-ENDUSERCTX</code></a> request header. If the header is not
     * submitted, marketplace is used.
     *
     * @var \Ebay\Buy\Browse\Model\ShipToLocation
     */
    public $shipToLocationUsedForEstimate = null;

    /**
     * Any trademark symbol, such as &#8482; or &reg;, that needs to be shown in
     * superscript next to the shipping service name.
     *
     * @var string
     */
    public $trademarkSymbol = null;

    /**
     * The type of a shipping option, such as EXPEDITED, ONE_DAY, STANDARD, ECONOMY,
     * PICKUP, etc.
     *
     * @var string
     */
    public $type = null;
}
