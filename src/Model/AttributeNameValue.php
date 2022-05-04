<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type the defines attribute name/value pair fields that specify a product.
 * The type of data depends on the context. For example, if you were using this to
 * specify a specific vehicle, the attribute names would be Make, Model, Year, etc.
 */
class AttributeNameValue extends AbstractModel
{
    /**
     * The name of the product attribute, such as Make, Model, Year, etc.
     *
     * @var string
     */
    public $name = null;

    /**
     * The value for the <b> name</b> attribute, such as BMW, R1200GS, 2011, etc.
     *
     * @var string
     */
    public $value = null;
}
