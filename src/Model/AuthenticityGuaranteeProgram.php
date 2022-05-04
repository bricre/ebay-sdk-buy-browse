<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A type that identifies whether the item is qualified for the Authenticity
 * Guarantee program.
 */
class AuthenticityGuaranteeProgram extends AbstractModel
{
    /**
     * An indication that the item is qualified for the Authenticity Guarantee program.
     *
     * @var string
     */
    public $description = null;

    /**
     * The URL to the Authenticity Guarantee program terms of use.
     *
     * @var string
     */
    public $termsWebUrl = null;
}
