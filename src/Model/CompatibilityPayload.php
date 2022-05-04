<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * An array of attribute name/value pairs used to define a specific product. For
 * example: If you wanted to specify a specific car, one of the name/value pairs
 * would be <br /><code>"name" : "Year", <br />"value" : "2019"</code>  <p> For a
 * list of the attributes required for cars and trucks and motorcycles see <a
 * href="/api-docs/buy/static/api-browse.html#Check">Check compatibility</a> in the
 * Buy Integration Guide.</p>.
 */
class CompatibilityPayload extends AbstractModel
{
    /**
     * An array of attribute name/value pairs used to define a specific product. For
     * example: If you wanted to specify a specific car, one of the name/value pairs
     * would be <br /><code>"name" : "Year", <br />"value" : "2019"</code>  <p> For a
     * list of the attributes required for cars and trucks and motorcycles see <a
     * href="/api-docs/buy/static/api-browse.html#Check">Check compatibility</a> in the
     * Buy Integration Guide.</p>.
     *
     * @var \Ebay\Buy\Browse\Model\AttributeNameValue[]
     */
    public $compatibilityProperties = null;
}
