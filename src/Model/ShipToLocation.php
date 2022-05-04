<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the country and postal code of where an
 * item is to be shipped.
 */
class ShipToLocation extends AbstractModel
{
    /**
     * The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html"
     * target="_blank">ISO 3166</a> standard of the country for where the item is to be
     * shipped. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CountryCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $country = null;

    /**
     * The zip code (postal code) for where the item is to be shipped.
     *
     * @var string
     */
    public $postalCode = null;
}
