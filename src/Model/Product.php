<?php

namespace Ebay\Buy\Browse\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the product information of the item.
 */
class Product extends AbstractModel
{
    /**
     * An array of containers with the URLs for the product images that are in addition
     * to the primary image.
     *
     * @var \Ebay\Buy\Browse\Model\Image[]
     */
    public $additionalImages = null;

    /**
     * An array of product identifiers associated with the item. This container is
     * returned if the seller has associated the eBay Product Identifier (ePID) with
     * the item and in the request <b> fieldgroups</b> is set to <code>PRODUCT</code>.
     *
     * @var \Ebay\Buy\Browse\Model\AdditionalProductIdentity[]
     */
    public $additionalProductIdentities = null;

    /**
     * An array of containers for the product aspects. Each group contains the aspect
     * group name and the aspect name/value pairs.
     *
     * @var \Ebay\Buy\Browse\Model\AspectGroup[]
     */
    public $aspectGroups = null;

    /**
     * The brand associated with product. To identify the product, this is always used
     * along with MPN (manufacturer part number).
     *
     * @var string
     */
    public $brand = null;

    /**
     * The rich description of an eBay product, which might contain HTML.
     *
     * @var string
     */
    public $description = null;

    /**
     * An array of all the possible GTINs values associated with the product. A GTIN is
     * a unique Global Trade Item number of the item as defined by <a
     * href="https://www.gtin.info " target="_blank">https://www.gtin.info</a>. This
     * can be a UPC (Universal Product Code), EAN (European Article Number), or an ISBN
     * (International Standard Book Number) value.
     *
     * @var string[]
     */
    public $gtins = null;

    /**
     * The primary image of the product. This is often a stock photo.
     *
     * @var \Ebay\Buy\Browse\Model\Image
     */
    public $image = null;

    /**
     * An array of all possible MPN values associated with the product. A MPNs is
     * manufacturer part number of the product. To identify the product, this is always
     * used along with brand.
     *
     * @var string[]
     */
    public $mpns = null;

    /**
     * The title of the product.
     *
     * @var string
     */
    public $title = null;
}
