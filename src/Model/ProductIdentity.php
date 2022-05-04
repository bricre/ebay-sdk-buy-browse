<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the product identifier type/value pairs of
 * product associated with an item.
 */
class ProductIdentity extends AbstractModel
{
    /**
     * The type of product identifier, such as UPC and EAN.
     *
     * @var string
     */
    public $identifierType = null;

    /**
     * The product identifier value.
     *
     * @var string
     */
    public $identifierValue = null;
}
