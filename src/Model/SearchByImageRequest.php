<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the image information.
 */
class SearchByImageRequest extends AbstractModel
{
    /**
     * The Base64 string of the image.
     *
     * @var string
     */
    public $image = null;
}
