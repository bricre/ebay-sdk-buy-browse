<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the tax fields.
 */
class Taxes extends AbstractModel
{
    /**
     * This field is only returned if <code>true</code>, and indicates that eBay will
     * collect tax (sales tax, Goods and Services tax, or VAT) for at least one line
     * item in the order, and remit the tax to the taxing authority of the buyer's
     * residence.
     *
     * @var bool
     */
    public $ebayCollectAndRemitTax = null;

    /**
     * This indicates if tax was applied for the cost of the item.
     *
     * @var bool
     */
    public $includedInPrice = null;

    /**
     * This indicates if tax is applied for the shipping cost.
     *
     * @var bool
     */
    public $shippingAndHandlingTaxed = null;

    /**
     * The container that returns the tax jurisdiction.
     *
     * @var \Ebay\Buy\Browse\Model\TaxJurisdiction
     */
    public $taxJurisdiction = null;

    /**
     * The percentage of tax.
     *
     * @var string
     */
    public $taxPercentage = null;

    /**
     * This field indicates the type of tax that may be collected for the item. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:TaxType'>eBay API
     * documentation</a>.
     *
     * @var string
     */
    public $taxType = null;
}
