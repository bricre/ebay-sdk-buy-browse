<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the name/value pairs for the aspects of the
 * product. For example: BRAND/Apple.
 */
class Aspect extends AbstractModel
{
    /**
     * The text representing the name of the aspect for the name/value pair, such as
     * Brand.
     *
     * @var string
     */
    public $localizedName = null;

    /**
     * The text representing the value of the aspect for the name/value pair, such as
     * Apple.
     *
     * @var string[]
     */
    public $localizedValues = null;
}
