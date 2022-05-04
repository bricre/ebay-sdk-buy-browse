<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the details of a specific item.
 */
class ItemSummary extends AbstractModel
{
    /**
     * An array of containers with the URLs for the images that are in addition to the
     * primary image.  The primary image is returned in the <b> image.imageUrl</b>
     * field.
     *
     * @var \Ebay\Buy\Browse\Model\Image[]
     */
    public $additionalImages = null;

    /**
     * This indicates if the item is for adults only. For more information about
     * adult-only items on eBay, see <a
     * href="https://pages.ebay.com/help/policies/adult-only.html "
     * target="_blank">Adult items policy</a> for sellers and <a
     * href="https://www.ebay.com/help/terms-conditions/default/searching-adult-items?id=4661
     * " target="_blank">Adult-Only items on eBay</a> for buyers.
     *
     * @var bool
     */
    public $adultOnly = null;

    /**
     * This boolean attribute indicates if coupons are available for the item.
     *
     * @var bool
     */
    public $availableCoupons = null;

    /**
     * This integer value indicates the total number of bids that have been placed for
     * an auction item. This field is only returned for auction items.
     *
     * @var int
     */
    public $bidCount = null;

    /**
     * A comma separated list of all the purchase options available for the item.
     * <br><br><b> Values Returned: </b>   <ul> <li><b>FIXED_PRICE</b> - Indicates the
     * buyer can purchase the item for a set price using the Buy It Now button. </li>
     * <li><b> AUCTION</b> - Indicates the buyer can place a bid for the item. After
     * the first bid is placed, this becomes a live auction item and is the only buying
     * option for this item.</li>  <li><b> BEST_OFFER</b> - Items where the buyer can
     * send the seller a price they're willing to pay for the item. The seller can
     * accept, reject, or send a counter offer. For details about Best Offer, see <a
     * href="https://www.ebay.com/help/selling/listings/selling-buy-now/adding-best-offer-listing?id=4144
     * " target="_blank">Best Offer</a>.  </li></ul> Code so that your app gracefully
     * handles any future changes to this list.
     *
     * @var string[]
     */
    public $buyingOptions = null;

    /**
     * This container returns the primary category ID of the item (as well as the
     * secondary category if the item was listed in two categories).
     *
     * @var \Ebay\Buy\Browse\Model\Category[]
     */
    public $categories = null;

    /**
     * This indicates how well the item matches the <b>compatibility_filter</b> product
     * attributes.  <br><br><b> Valid Values: </b> EXACT or POSSIBLE <br /><br />Code
     * so that your app gracefully handles any future changes to this list. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:CompatibilityMatchEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $compatibilityMatch = null;

    /**
     * This container returns only the product attributes that are compatible with the
     * item. These attributes were specified in the <b>compatibility_filter</b> in the
     * request. This means that if you passed in 5 attributes and only 4 are
     * compatible, only those 4 are returned. If none of the attributes are compatible,
     * this container is not returned.
     *
     * @var \Ebay\Buy\Browse\Model\CompatibilityProperty[]
     */
    public $compatibilityProperties = null;

    /**
     * The text describing the condition of the item, such as New or Used. For a list
     * of condition names, see <a
     * href="https://developer.ebay.com/devzone/finding/callref/enums/conditionIdList.html
     * " target="_blank">Item Condition IDs and Names</a>.  <br /><br />Code so that
     * your app gracefully handles any future changes to this list.</span>.
     *
     * @var string
     */
    public $condition = null;

    /**
     * The identifier of the condition of the item. For example, 1000 is the identifier
     * for NEW. For a list of condition names and IDs, see <a
     * href="https://developer.ebay.com/devzone/finding/callref/enums/conditionIdList.html
     * " target="_blank">Item Condition IDs and Names</a>. <br /><br />Code so that
     * your app gracefully handles any future changes to this list.
     *
     * @var string
     */
    public $conditionId = null;

    /**
     * This container returns the current highest bid for an auction item. The <b>
     * value</b> field shows the dollar value of the current highest bid, and the <b>
     * currency</b> field (3-digit ISO code) denotes the currency associated with that
     * bid value. This field is only returned for auction items.
     *
     * @var \Ebay\Buy\Browse\Model\ConvertedAmount
     */
    public $currentBidPrice = null;

    /**
     * This container returns the distance away that the item is from the <b>
     * pickupPostalCode</b>  value that was supplied in the method request. This
     * container is only returned if the 'local pickup' filter fields are used in the
     * request.
     *
     * @var \Ebay\Buy\Browse\Model\TargetLocation
     */
    public $distanceFromPickupLocation = null;

    /**
     * This indicates the <a
     * href="https://en.wikipedia.org/wiki/European_Union_energy_label ">European
     * energy efficiency</a> rating (EEK) of the item.  Energy efficiency ratings apply
     * to products listed by commercial vendors in electronics categories only. <br
     * /><br />Currently, this field is only applicable for the Germany site, and  is
     * only returned if the seller specified the energy efficiency rating through item
     * specifics at listing time. Rating values include <code>A+++</code>,
     * <code>A++</code>, <code>A+</code>, <code>A</code>, <code>B</code>,
     * <code>C</code>, <code>D</code>, <code>E</code>, <code>F</code>, and
     * <code>G</code>.
     *
     * @var string
     */
    public $energyEfficiencyClass = null;

    /**
     * An ePID is the eBay product identifier of a product from the eBay product
     * catalog.  This indicates the product in which the item belongs.
     *
     * @var string
     */
    public $epid = null;

    /**
     * The URL to the primary image of the item.
     *
     * @var \Ebay\Buy\Browse\Model\Image
     */
    public $image = null;

    /**
     * The URL to the View Item page of the item, which includes the affiliate tracking
     * ID. This field is only returned if the seller enables affiliate tracking for the
     * item by including the <code><a
     * href="/api-docs/buy/static/api-browse.html#Headers">X-EBAY-C-ENDUSERCTX</a></code>
     * request header in the method.  <br /> <br /><span class="tablenote"><b>Note:
     * </b> eBay Partner Network, in order to receive a commission for your sales, you
     * must use this URL to forward your buyer to the ebay.com site. </span>.
     *
     * @var string
     */
    public $itemAffiliateWebUrl = null;

    /**
     * The date and time when the item listing was created.  This value is returned in
     * UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into the local time
     * of the buyer.
     *
     * @var string
     */
    public $itemCreationDate = null;

    /**
     * The date and time up to which the item can be purchased.  This value is returned
     * in UTC format (yyyy-MM-ddThh:mm:ss.sssZ), which you can convert into the local
     * time of the buyer.<br /><br /><span class="tablenote"><b> Note: </b>This field
     * is not returned for Good 'Til Cancelled (GTC) listings.</span>.
     *
     * @var string
     */
    public $itemEndDate = null;

    /**
     * The HATEOAS reference of the parent page of the item group. An item group is an
     * item that has various aspect differences, such as color, size, storage capacity,
     * etc. <br /> <br /><span class="tablenote"> <b>  Note: </b>This field is returned
     * only for item groups.</span>.
     *
     * @var string
     */
    public $itemGroupHref = null;

    /**
     * The indicates the item group type. An item group is an item that has various
     * aspect differences, such as color, size, storage capacity, etc. <br /><br
     * />Currently only the <code>SELLER_DEFINED_VARIATIONS</code> is supported and
     * indicates this is an item group created by the seller. <br /> <br /><span
     * class="tablenote"> <b> Note: </b>This field is returned only for item
     * groups.</span><br /><br />Code so that your app gracefully handles any future
     * changes to this list.
     *
     * @var string
     */
    public $itemGroupType = null;

    /**
     * The URI for the Browse API <a
     * href="/api-docs/buy/browse/resources/item/methods/getItem">getItem</a> method,
     * which can be used to retrieve more details about items in the search results.
     *
     * @var string
     */
    public $itemHref = null;

    /**
     * The unique RESTful identifier of the item.
     *
     * @var string
     */
    public $itemId = null;

    /**
     * This container returns the location of the item. This container consists of
     * fields you typically see for an address, including postal code, county,
     * state/province, street address, city, and country (2-digit ISO code).
     *
     * @var \Ebay\Buy\Browse\Model\ItemLocationImpl
     */
    public $itemLocation = null;

    /**
     * The URL to the View Item page of the item.  This enables you to include a
     * "Report Item on eBay" hyperlink that takes the buyer to the View Item page on
     * eBay. From there they can report any issues regarding this item to eBay.
     *
     * @var string
     */
    public $itemWebUrl = null;

    /**
     * The unique identifier of the eBay listing that contains the item. This is the
     * traditional/legacy ID that is often seen in the URL of the listing View Item
     * page.
     *
     * @var string
     */
    public $legacyItemId = null;

    /**
     * The ID of the eBay marketplace where the item is listed. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/ba:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $listingMarketplaceId = null;

    /**
     * This container is returned if the item is eligible for a seller discount and
     * contains the item's original price, and the seller discount amount and
     * percentage.
     *
     * @var \Ebay\Buy\Browse\Model\MarketingPrice
     */
    public $marketingPrice = null;

    /**
     * This container returns the local pickup options available to the buyer. This
     * container is only returned if the user is searching for local pickup items and
     * set the local pickup filters in the method request.
     *
     * @var \Ebay\Buy\Browse\Model\PickupOptionSummary[]
     */
    public $pickupOptions = null;

    /**
     * The price of the item after it has been converted into another currency.<br
     * /><br />The price includes the value-added tax (VAT) for applicable
     * jurisdictions when requested from supported marketplaces. In this case, users
     * must do one or more of the following to see VAT-inclusive pricing:<ul><li>Pass
     * the <a
     * href="/api-docs/static/rest-request-components.html#HTTP"><code>X-EBAY-C-MARKETPLACE-ID</code></a>
     * request header specifying the supported marketplace (such as
     * <code>EBAY_GB</code>)</li><li>Pass the <code>contextualLocation</code> values
     * for the supported marketplace in the <a
     * href="/api-docs/buy/static/api-browse.html#Headers"><code>X-EBAY-C-ENDUSERCTX</code></a>
     * request header</li><li>Specify the supported marketplace using the <a
     * href="/api-docs/buy/static/ref-buy-browse-filters.html#deliveryCountry"><code>deliveryCountry</code></a>
     * <b>filter</b> URI parameter (such as
     * <code>filter=deliveryCountry:GB</code>)</li></ul><span class="tablenote"><b>
     * Note: </b>For more information on VAT, refer to <a
     * href="https://www.ebay.co.uk/help/listings/default/vat-obligations-eu?id=4650&st=12&pos=1&query=Your%20VAT%20obligations%20in%20the%20EU&intent=VAT">VAT
     * Obligations in the EU</a>.</span>.
     *
     * @var \Ebay\Buy\Browse\Model\ConvertedAmount
     */
    public $price = null;

    /**
     * Indicates when in the buying flow the item's price can appear for minimum
     * advertised price (MAP) items, which is the lowest price a retailer can
     * advertise/show for this item. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:PriceDisplayConditionEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $priceDisplayCondition = null;

    /**
     * This field is returned as <code>true</code> if the listing is part of a Promoted
     * Listing campaign. Promoted Listings are available to Above Standard and Top
     * Rated sellers with recent sales activity.<br /><br /><span
     * class="tablenote"><b>Note:</b> Priority Listing is returned only with a Best
     * Match sort and will not be returned for other sort options.</span>.
     *
     * @var bool
     */
    public $priorityListing = null;

    /**
     * An array of the qualified programs available for the item, such as EBAY_PLUS,
     * AUTHENTICITY_GUARANTEE, and AUTHENTICITY_VERIFICATION.<br /><br />eBay Plus is a
     * premium account option for buyers, which provides benefits such as fast free
     * domestic shipping and free returns on selected items. Top-Rated eBay sellers
     * must opt in to eBay Plus to be able to offer the program on qualifying listings.
     * Sellers must commit to next-day delivery of those items.<br /><br /><span
     * class="tablenote"><b>Note: </b> eBay Plus is available only to buyers in
     * Germany, Austria, and Australia marketplaces.</span><br /><br />The eBay <a
     * href="https://pages.ebay.com/authenticity-guarantee/"
     * target="_blank">Authenticity Guarantee</a> program enables third-party
     * authenticators to perform authentication verification inspections on items such
     * as watches and sneakers.
     *
     * @var string[]
     */
    public $qualifiedPrograms = null;

    /**
     * This container returns basic information about the seller of the item, such as
     * name, feedback score, etc.
     *
     * @var \Ebay\Buy\Browse\Model\Seller
     */
    public $seller = null;

    /**
     * This container returns the shipping options available to ship the item.
     *
     * @var \Ebay\Buy\Browse\Model\ShippingOptionSummary[]
     */
    public $shippingOptions = null;

    /**
     * This text string is derived from the item condition and the item aspects (such
     * as size, color, capacity, model, brand, etc.). Sometimes the title doesn't give
     * enough information but the description is too big. Surfacing the
     * <b>shortDescription</b> can often provide buyers with the additional information
     * that could help them make a buying decision.  <br /><br />For example: <br /><br
     * />    <code>   "<b> title</b>": "Petrel U42W FPV Drone RC Quadcopter w/HD Camera
     * Live Video One Key Off / Landing", <br />"<b>shortDescription</b>": "1 U42W
     * Quadcopter. Syma X5SW-V3 Wifi FPV RC Drone Quadcopter 2.4Ghz 6-Axis Gyro with
     * Headless Mode. Syma X20 Pocket Drone 2.4Ghz Mini RC Quadcopter Headless Mode
     * Altitude Hold. One Key Take Off / Landing function: allow beginner to easy to
     * fly the drone without any skill.",</code>       <br /><br /><b>Restriction: </b>
     * This field is returned by the <b> search</b> method only when <b>
     * fieldgroups</b> = <code>EXTENDED</code>.
     *
     * @var string
     */
    public $shortDescription = null;

    /**
     * An array of thumbnail images for the item.
     *
     * @var \Ebay\Buy\Browse\Model\Image[]
     */
    public $thumbnailImages = null;

    /**
     * The seller-created title of the item. <br><br><b>Maximum Length: </b> 80
     * characters.
     *
     * @var string
     */
    public $title = null;

    /**
     * This indicates if the item is a top-rated plus item. There are three benefits of
     * a top-rated plus item: a  minimum 30-day money-back return policy, shipping the
     * item in 1 business day with tracking provided, and the added comfort of knowing
     * that this item is from an experienced seller with the highest buyer ratings. See
     * the <a href="https://pages.ebay.com/topratedplus/index.html" target="_blank">Top
     * Rated Plus Items </a> and <a
     * href="https://pages.ebay.com/help/sell/top-rated.html" target="_blank">Becoming
     * a Top Rated Seller and qualifying for Top Rated Plus</a> help topics for more
     * information.
     *
     * @var bool
     */
    public $topRatedBuyingExperience = null;

    /**
     * The URL to the image that shows the information on the tyre label.
     *
     * @var string
     */
    public $tyreLabelImageUrl = null;

    /**
     * The price per unit for the item. Some European countries require listings for
     * certain types of products to include the price per unit so buyers can accurately
     * compare prices. <br /><br />For example: <br /><br /><code>"unitPricingMeasure":
     * "100g",<br /> "unitPrice": {<br />&nbsp;&nbsp;"value": "7.99",<br
     * />&nbsp;&nbsp;"currency": "GBP"</code>.
     *
     * @var \Ebay\Buy\Browse\Model\ConvertedAmount
     */
    public $unitPrice = null;

    /**
     * The designation, such as size, weight, volume, count, etc., that was used to
     * specify the quantity of the item. This helps buyers compare prices. <br /><br
     * />For example, the following tells the buyer that the item is 7.99 per 100
     * grams. <br /><br /><code>"unitPricingMeasure": "100g",<br /> "unitPrice": {<br
     * />&nbsp;&nbsp;"value": "7.99",<br />&nbsp;&nbsp;"currency": "GBP"</code>.
     *
     * @var string
     */
    public $unitPricingMeasure = null;

    /**
     * The number of users that have added the item to their watch list.<br /><br
     * /><span class="tablenote"> <strong>Note:</strong> This field is restricted to
     * applications that have been granted permission to access this feature. You must
     * submit an <a
     * href="https://developer.ebay.com/my/support/tickets?tab=app-check">App Check
     * ticket</a> to request this access. In the App Check form, add a note to the
     * <b>Application Title/Summary</b> and/or <b>Application Details</b> fields that
     * you want access to Watch Count data in the Browse API.</span>.
     *
     * @var int
     */
    public $watchCount = null;
}
