<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The container that defines the fields for the buying options refinements. This
 * container is returned when <b> fieldgroups</b> is set to
 * <code>BUYING_OPTION_REFINEMENTS</code> or <code>FULL</code> in the request.
 */
class BuyingOptionDistribution extends AbstractModel
{
    /**
     * The container that returns the buying option type. This will be AUCTION,
     * FIXED_PRICE, CLASSIFIED_AD, or a combination of these options. For details, see
     * <a
     * href="/api-docs/buy/browse/resources/item_summary/methods/search#response.itemSummaries.buyingOptions">buyingOptions</a>.
     *
     * @var string
     */
    public $buyingOption = null;

    /**
     * The number of items having this buying option.
     *
     * @var int
     */
    public $matchCount = null;

    /**
     * The HATEOAS reference for this buying option.
     *
     * @var string
     */
    public $refinementHref = null;
}
