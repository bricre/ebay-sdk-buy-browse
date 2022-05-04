<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This container returns the product attribute name/value pairs that are
 * compatible with the keyword. These attributes are submitted in the
 * <b>compatibility_filter</b> request field.
 */
class CompatibilityProperty extends AbstractModel
{
    /**
     * The name of the product attribute that as been translated to the language of the
     * site.
     *
     * @var string
     */
    public $localizedName = null;

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
