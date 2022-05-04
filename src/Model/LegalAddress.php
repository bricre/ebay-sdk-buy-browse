<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Type that defines the fields for the seller's address.
 */
class LegalAddress extends AbstractModel
{
    /**
     * The first line of the street address.
     *
     * @var string
     */
    public $addressLine1 = null;

    /**
     * The second line of the street address. This field is not always used, but can be
     * used for 'Suite Number' or 'Apt Number'.
     *
     * @var string
     */
    public $addressLine2 = null;

    /**
     * The city of the address.
     *
     * @var string
     */
    public $city = null;

    /**
     * The two-letter <a href="https://www.iso.org/iso-3166-country-codes.html "
     * target="_blank">ISO 3166</a> standard of the country of the address. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/ba:CountryCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $country = null;

    /**
     * The name of the country of the address.
     *
     * @var string
     */
    public $countryName = null;

    /**
     * The name of the county of the address.
     *
     * @var string
     */
    public $county = null;

    /**
     * The postal code of the address.
     *
     * @var string
     */
    public $postalCode = null;

    /**
     * The state or province of the address.
     *
     * @var string
     */
    public $stateOrProvince = null;
}
