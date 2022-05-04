<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for a period of time in the time-measurement
 * units supplied.
 */
class TimeDuration extends AbstractModel
{
    /**
     * An enumeration value that indicates the units (such as hours) of the time span.
     * The enumeration value in this field defines the period of time being used to
     * measure the duration. <br><br><b> Valid Values: </b> YEAR, MONTH, DAY, HOUR,
     * CALENDAR_DAY, BUSINESS_DAY, MINUTE, SECOND, or MILLISECOND <br /><br />Code so
     * that your app gracefully handles any future changes to this list. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/ba:TimeDurationUnitEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $unit = null;

    /**
     * Retrieves the duration of the time span (no units).The value in this field
     * indicates the number of years, months, days, hours, or minutes in the defined
     * period.
     *
     * @var int
     */
    public $value = null;
}
