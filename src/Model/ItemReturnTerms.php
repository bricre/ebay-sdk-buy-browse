<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the seller's return policy.
 */
class ItemReturnTerms extends AbstractModel
{
    /**
     * This indicates if the seller has enabled the Extended Holiday Returns feature on
     * the item. Extended Holiday Returns are only applicable during the US holiday
     * season, and gives buyers extra time to return an item. This 'extra time' will
     * typically extend beyond what is set through the <b> returnPeriod</b> value.
     *
     * @var bool
     */
    public $extendedHolidayReturnsOffered = null;

    /**
     * An enumeration value that indicates how a buyer is refunded when an item is
     * returned. <br><br><b> Valid Values: </b> MONEY_BACK or MERCHANDISE_CREDIT  <br
     * /><br />Code so that your app gracefully handles any future changes to this
     * list. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:RefundMethodEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $refundMethod = null;

    /**
     * This string field indicates the restocking fee percentage that the seller has
     * set on the item. Sellers have the option of setting no restocking fee for an
     * item, or they can set the percentage to 10, 15, or 20 percent. So, if the cost
     * of the item was $100, and the restocking percentage was 20 percent, the buyer
     * would be charged $20 to return that item, so instead of receiving a $100 refund,
     * they would receive $80 due to the restocking fee.
     *
     * @var string
     */
    public $restockingFeePercentage = null;

    /**
     * Text written by the seller describing what the buyer needs to do in order to
     * return the item.
     *
     * @var string
     */
    public $returnInstructions = null;

    /**
     * An enumeration value that indicates the alternative methods for a full refund
     * when an item is returned. This field is returned if the seller offers the buyer
     * an item replacement or exchange instead of a monetary refund. <br><br><b> Valid
     * Values: </b>  <ul><li><b> REPLACEMENT</b> -  Indicates that the buyer has the
     * option of receiving money back for the returned item, or they can choose to have
     * the seller replace the item with an identical item.</li>  <li><b> EXCHANGE</b> -
     * Indicates that the buyer has the option of receiving money back for the returned
     * item, or they can exchange the item for another similar item.</li></ul>  Code so
     * that your app gracefully handles any future changes to this list. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:ReturnMethodEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $returnMethod = null;

    /**
     * The amount of time the buyer has to return the item after the purchase date.
     *
     * @var \Ebay\Buy\Browse\Model\TimeDuration
     */
    public $returnPeriod = null;

    /**
     * Indicates whether the seller accepts returns for the item.
     *
     * @var bool
     */
    public $returnsAccepted = null;

    /**
     * This enumeration value indicates whether the buyer or seller is responsible for
     * return shipping costs when an item is returned. <br><br><b> Valid Values: </b>
     * <ul><li><b> SELLER</b> - Indicates the seller will pay for the shipping costs to
     * return the item.</li>  <li><b> BUYER</b> - Indicates the buyer will pay for the
     * shipping costs to return the item.</li>  </ul>  Code so that your app gracefully
     * handles any future changes to this list. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:ReturnShippingCostPayerEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $returnShippingCostPayer = null;
}
