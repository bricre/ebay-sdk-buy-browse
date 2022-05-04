<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the contact information for a seller.
 */
class SellerLegalInfo extends AbstractModel
{
    /**
     * The seller's business email address.
     *
     * @var string
     */
    public $email = null;

    /**
     * The seller' business fax number.
     *
     * @var string
     */
    public $fax = null;

    /**
     * This is a free-form string created by the seller. This is information often
     * found on business cards, such as address. This is information used by some
     * countries.
     *
     * @var string
     */
    public $imprint = null;

    /**
     * The seller's first name.
     *
     * @var string
     */
    public $legalContactFirstName = null;

    /**
     * The seller's last name.
     *
     * @var string
     */
    public $legalContactLastName = null;

    /**
     * The name of the seller's business.
     *
     * @var string
     */
    public $name = null;

    /**
     * The seller's business phone number.
     *
     * @var string
     */
    public $phone = null;

    /**
     * The seller's registration number. This is information used by some countries.
     *
     * @var string
     */
    public $registrationNumber = null;

    /**
     * The container that returns the seller's address to be used to contact them.
     *
     * @var \Ebay\Buy\Browse\Model\LegalAddress
     */
    public $sellerProvidedLegalAddress = null;

    /**
     * This is a free-form string created by the seller. This is the seller's terms or
     * condition, which is in addition to the seller's return policies.
     *
     * @var string
     */
    public $termsOfService = null;

    /**
     * An array of the seller's VAT (value added tax) IDs and the issuing country. VAT
     * is a tax added by some European countries.
     *
     * @var \Ebay\Buy\Browse\Model\VatDetail[]
     */
    public $vatDetails = null;
}
