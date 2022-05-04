<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the monetary value and currency of the
 * price of the item.
 */
class Price extends AbstractModel
{
    /**
     * The three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html"
     * target="_blank">ISO 4217</a> code representing the currency of the amount in the
     * <b> convertedFromValue</b> field. This value is the pre-conversion currency. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $convertedFromCurrency = null;

    /**
     * The monetary amount before any conversion is performed, in the currency
     * specified by the <b> convertedFromCurrency</b> field. This value is the
     * pre-conversion amount. The <b> value</b> field contains the converted amount of
     * this value, in the currency specified by the <b> currency</b> field.
     *
     * @var string
     */
    public $convertedFromValue = null;

    /**
     * The three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html"
     * target="_blank">ISO 4217</a> code representing the currency of the amount in the
     * <b> value</b> field. If currency conversion/localization was performed, this is
     * the post-conversion currency of the amount in the <b> value</b> field.<br /><br
     * /><b> Default:</b> The currency of the user's country. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $currency = null;

    /**
     * The amount of the currency specified in the <b> currency</b> field. The value of
     * <b> currency</b> defaults to the standard currency used by the country of the
     * eBay site offering the item. If currency conversion/localization was performed,
     * this is the post-conversion amount.<br /><br /><b> Default:</b> The currency of
     * the user's country.
     *
     * @var string
     */
    public $value = null;
}
