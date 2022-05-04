<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the name/value pairs for item aspects.
 */
class TypedNameValue extends AbstractModel
{
    /**
     * The text representing the name of the aspect for the name/value pair, such as
     * Color.
     *
     * @var string
     */
    public $name = null;

    /**
     * This indicates if the value being returned is a string or an array of values.
     * <br><br><b> Valid Values: </b> <ul><li><b> STRING</b> - Indicates the value
     * returned is a string.</li>  <li><b> STRING_ARRAY</b> - Indicates the value
     * returned is an array of strings.</li></ul>  Code so that your app gracefully
     * handles any future changes to this list. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:ValueTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $type = null;

    /**
     * The value of the aspect for the name/value pair, such as Red.
     *
     * @var string
     */
    public $value = null;
}
