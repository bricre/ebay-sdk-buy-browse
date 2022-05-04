<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This container describes an add-on service that may be selected for an item or
 * that may apply automatically. A charge may be associated with the add-on
 * service.
 */
class AddonService extends AbstractModel
{
    /**
     * This field indicates whether the add-on service must be selected for the item.
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:AddonServiceSelectionEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $selection = null;

    /**
     * The amount charged for the add-on service.
     *
     * @var \Ebay\Buy\Browse\Model\ConvertedAmount
     */
    public $serviceFee = null;

    /**
     * The ID number of the add-on service.
     *
     * @var string
     */
    public $serviceId = null;

    /**
     * The type of add-on service, such as AUTHENTICITY_GUARANTEE. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:AddonServiceTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $serviceType = null;
}
