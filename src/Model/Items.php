<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * Container for a list of items.
 */
class Items extends AbstractModel
{
    /**
     * An arraylist of all the items.
     *
     * @var \Ebay\Buy\Browse\Model\CoreItem[]
     */
    public $items = null;

    /**
     * The total number of items retrieved.
     *
     * @var int
     */
    public $total = null;

    /**
     * An array of warning messages. These types of errors do not prevent the method
     * from executing but should be checked.
     *
     * @var \Ebay\Buy\Browse\Model\Error[]
     */
    public $warnings = null;
}
