<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

class Amount extends AbstractModel
{
    /**
     * The list of valid currencies. Each <a
     * href="https://www.iso.org/iso-4217-currency-codes.html" target="_blank">ISO
     * 4217</a> currency code includes the currency name followed by the numeric
     * value.<br /><br />For example, the Canadian Dollar code (CAD) would take the
     * following form: <i>Canadian Dollar, 124</i>. For implementation help, refer to
     * <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CurrencyCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $currency = null;

    /**
     * The value of the discounted amount.
     *
     * @var string
     */
    public $value = null;
}
