<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for basic and detailed information about the
 * seller of the item returned by the <b> item</b> resource.
 */
class SellerDetail extends AbstractModel
{
    /**
     * The percentage of the total positive feedback.
     *
     * @var string
     */
    public $feedbackPercentage = null;

    /**
     * The feedback score of the seller. This value is based on the ratings from eBay
     * members that bought items from this seller.
     *
     * @var int
     */
    public $feedbackScore = null;

    /**
     * This indicates if the seller is a business or an individual. This is determined
     * when the seller registers with eBay. If they register for a business account,
     * this value will be BUSINESS. If they register for a private account, this value
     * will be INDIVIDUAL. This designation is required by the tax laws in the
     * following countries:  <br /><br /> This field is returned only on the following
     * sites. <br /><br />EBAY_AT, EBAY_BE, EBAY_CH, EBAY_DE, EBAY_ES, EBAY_FR,
     * EBAY_GB, EBAY_IE, EBAY_IT, EBAY_PL <br /><br /><b> Valid Values:</b> BUSINESS or
     * INDIVIDUAL <br /><br />Code so that your app gracefully handles any future
     * changes to this list.
     *
     * @var string
     */
    public $sellerAccountType = null;

    /**
     * The container with the seller's contact info and fields that are required by
     * law.
     *
     * @var \Ebay\Buy\Browse\Model\SellerLegalInfo
     */
    public $sellerLegalInfo = null;

    /**
     * The user name created by the seller for use on eBay.
     *
     * @var string
     */
    public $username = null;
}
