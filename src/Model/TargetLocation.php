<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the distance between the item location and
 * the buyer's location.
 */
class TargetLocation extends AbstractModel
{
    /**
     * This value shows the unit of measurement used to measure the distance between
     * the location of the item and the buyer's location. This value is typically
     * <code> mi</code> or <code> km</code>.
     *
     * @var string
     */
    public $unitOfMeasure = null;

    /**
     * This value indicates the distance (measured in the measurement unit in the <b>
     * unitOfMeasure</b>  field) between the item location and the buyer's location.
     *
     * @var string
     */
    public $value = null;
}
