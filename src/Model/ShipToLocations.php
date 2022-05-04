<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields that include and exclude geographic regions
 * affecting where the item can be shipped. The seller defines these regions when
 * listing the item.
 */
class ShipToLocations extends AbstractModel
{
    /**
     * An array of containers that express the large geographical regions, countries,
     * state/provinces, or special locations within a country where the seller is not
     * willing to ship to.
     *
     * @var \Ebay\Buy\Browse\Model\ShipToRegion[]
     */
    public $regionExcluded = null;

    /**
     * An array of containers that express the large geographical regions, countries,
     * or state/provinces within a country where the seller is willing to ship to.
     * Prospective buyers must look at the shipping regions under this container, as
     * well as the shipping regions that are under the <b>regionExcluded</b> to see
     * where the seller is willing to ship items. Sellers can specify that they ship
     * 'Worldwide', but then add several large geographical regions (e.g. Asia,
     * Oceania, Middle East) to the exclusion list, or sellers can specify that they
     * ship to Europe and Africa, but then add several individual countries to the
     * exclusion list.
     *
     * @var \Ebay\Buy\Browse\Model\ShipToRegion[]
     */
    public $regionIncluded = null;
}
