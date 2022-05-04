<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

class AutoCorrections extends AbstractModel
{
    /**
     * The automatically spell-corrected keyword from the request.
     *
     * @var string
     */
    public $q = null;
}
