<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the local pickup options that are available
 * for the item. It is used by the <b>  pickupOptions</b>  container.
 */
class PickupOptionSummary extends AbstractModel
{
    /**
     * This container returns the local pickup options available to the buyer. Possible
     * values are <code>ARRANGED_LOCATION</code> and <code>STORE</code>.
     *
     * @var string
     */
    public $pickupLocationType = null;
}
