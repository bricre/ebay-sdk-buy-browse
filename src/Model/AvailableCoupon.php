<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

class AvailableCoupon extends AbstractModel
{
    /**
     * The limitations or restrictions of the coupon.
     *
     * @var \Ebay\Buy\Browse\Model\CouponConstraint
     */
    public $constraint = null;

    /**
     * The discount amount after the coupon is applied.
     *
     * @var \Ebay\Buy\Browse\Model\Amount
     */
    public $discountAmount = null;

    /**
     * The type of discount that the coupon applies. For implementation help, refer to
     * <a
     * href='https://developer.ebay.com/api-docs/buy/browse/types/gct:CouponDiscountType'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $discountType = null;

    /**
     * A description of the coupon.<br /><br /><span class="tablenote"><b> Note: </b>
     * The value returned in the <b>termsWebUrl</b> field should appear for all
     * experiences when displaying coupons. The value in the
     * <b>availableCoupons.message</b> field must also be included, if returned in the
     * API response.</span>.
     *
     * @var string
     */
    public $message = null;

    /**
     * The coupon code.
     *
     * @var string
     */
    public $redemptionCode = null;

    /**
     * The URL to the coupon terms of use.<br /><br /><span class="tablenote"><b> Note:
     * </b> The value returned in the <b>termsWebUrl</b> field should appear for all
     * experiences when displaying coupons. The value in the
     * <b>availableCoupons.message</b> field must also be included, if returned in the
     * API response.</span>.
     *
     * @var string
     */
    public $termsWebUrl = null;
}
