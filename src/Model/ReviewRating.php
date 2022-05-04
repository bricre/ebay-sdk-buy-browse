<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the rating of a product review.
 */
class ReviewRating extends AbstractModel
{
    /**
     * The average rating given to a product based on customer reviews.
     *
     * @var string
     */
    public $averageRating = null;

    /**
     * An array of containers for the product rating histograms that shows the review
     * counts and the product rating.
     *
     * @var \Ebay\Buy\Browse\Model\RatingHistogram[]
     */
    public $ratingHistograms = null;

    /**
     * The total number of reviews for the item.
     *
     * @var int
     */
    public $reviewCount = null;
}
