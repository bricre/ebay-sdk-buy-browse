<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type the defines the fields for the VAT (value add tax) information.
 */
class VatDetail extends AbstractModel
{
    /**
     * The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html "
     * target="_blank">ISO 3166</a> standard of the country issuing the seller's VAT
     * (value added tax) ID. VAT is a tax added by some European countries. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CountryCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $issuingCountry = null;

    /**
     * The seller's VAT (value added tax) ID. VAT is a tax added by some European
     * countries.
     *
     * @var string
     */
    public $vatId = null;
}
