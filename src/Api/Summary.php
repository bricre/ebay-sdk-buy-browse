<?php

namespace Ebay\Buy\Browse\Api;

use Ebay\Buy\Browse\Model\SearchPagedCollection;
use OpenAPI\Runtime\UnexpectedResponse;

class Summary extends AbstractAPI
{
    /**
     * <p>This method searches for eBay items by various query parameters and retrieves
     * summaries of the items. You can search by keyword, category, eBay product ID
     * (ePID), or GTIN, charity ID, or a combination of these.</p><span
     * class="tablenote"><p><b>Note:</b> Only listings where FIXED_PRICE (Buy It Now)
     * is a buying option are returned by default. To retrieve listings that do not
     * have FIXED_PRICE as a buying option, the buyingOptions filter can be used to
     * retrieve those listings.</p><p>Note that an auction listing enabled with the
     * 'Buy it Now' feature will initially show AUCTION and FIXED_PRICE as buying
     * options, but if/when that auction listing receives a qualifying bid, only
     * AUCTION would remain as a buying option. If this happens, the buyingOptions
     * filter would need to be used to retrieve that auction listing.</p></span><p>This
     * method also supports the following:<ul><li>Filtering by the value of one or
     * multiple fields, such as listing format, item condition, price range, location,
     * and more. For the fields supported by this method, see the <a
     * href="#uri.filter">filter</a> parameter.</li><li>Retrieving the refinements
     * (metadata) of an item , such as item aspects (color, brand), condition,
     * category, etc. using the <a href="#uri.fieldgroups">fieldgroups</a>
     * parameter.</li><li>Filtering by item aspects and other refinements using the <a
     * href="#uri.aspect_filter">aspect_filter</a> parameter. </li> <li>Filtering for
     * items that are compatible with a specific product, using the <a
     * href="#uri.compatibility_filter">compatibility_filter</a>
     * parameter.</li><li>Creating aspects histograms, which enables shoppers to drill
     * down in each refinement narrowing the search results.</li></ul></p><p>For
     * details and examples of these capabilities, see <a
     * href="/api-docs/buy/static/api-browse.html">Browse API</a> in the Buying
     * Integration Guide.</p><h3><b> Pagination and sort controls</b></h3><p>There are
     * pagination controls (<b>limit</b> and <b>offset</b> fields) and <b> sort</b>
     * query parameters that control/sort the data that is returned. By default, the
     * results are sorted by &quot;Best Match&quot;. For more information about Best
     * Match, see the eBay help page <a
     * href="https://pages.ebay.com/help/sell/searchstanding.html "
     * target="_blank">Best Match</a>.</p><h3><b>URLs for this
     * method</b></h3><p><ul><li><b>Production
     * URL:</b><code>https://api.ebay.com/buy/browse/v1/item_summary/search?</code></li><li><b>Sandbox
     * URL:</b><code>https://api.sandbox.ebay.com/buy/browse/v1/item_summary/search?</code></li></ul></p><h3><b>
     * Request headers</b></h3> This method uses the <b>X-EBAY-C-ENDUSERCTX</b> request
     * header to support revenue sharing for eBay Partner Networks and to improve the
     * accuracy of shipping and delivery time estimations. For details see, <a
     * href="/api-docs/buy/static/api-browse.html#Headers">Request headers</a> in the
     * Buying Integration Guide.<h3><b>Restrictions </b></h3> <p>This method can return
     * a maximum of 10,000 items. For a list of supported sites and other restrictions,
     * see <a href="/api-docs/buy/browse/overview.html#API">API
     * Restrictions</a>.</p><span class="tablenote"><b>eBay Partner Network:</b> In
     * order to receive a commission for your sales, you must use the URL returned in
     * the <code>itemAffiliateWebUrl</code> field to forward your buyer to the ebay.com
     * site.</span>.
     *
     * @param array $queries options:
     *                       'aspect_filter'	string	This field lets you filter by item aspects. The aspect
     *                       name/value pairs and category, which is required, is used to limit the results
     *                       to specific aspects of the item. For example, in a clothing category one aspect
     *                       pair would be Color/Red. <br /><br />For example, the method below uses the
     *                       category ID for Women's Clothing. This will return only items for a woman's red
     *                       shirt.<br /><br
     *                       /><code>/buy/browse/v1/item_summary/search?q=shirt&category_ids=15724&aspect_filter=categoryId:15724,Color:{Red}</code>
     *                       <br /><br />To get a list of the aspects pairs and the category, which is
     *                       returned in the <b> dominantCategoryId</b> field, set <b> fieldgroups</b> to
     *                       <code>ASPECT_REFINEMENTS</code>.   <br /><br />
     *                       <code>/buy/browse/v1/item_summary/search?q=shirt&amp;fieldgroups=ASPECT_REFINEMENTS</code>
     *                       <br /><br /><b>Required: </b> The category ID is required <i>twice</i>; once as
     *                       a URI parameter and as part of the <b> aspect_filter</b>. For implementation
     *                       help, refer to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/buy/browse/types/gct:AspectFilter
     *                       'auto_correct'	string	A query parameter that enables auto correction.<br /><br
     *                       /><b>Valid Values:</b> <code>KEYWORD</code>
     *                       'category_ids'	string	<a name="category_ids"></a>The category ID is used to
     *                       limit the results. This field can have one category ID or a comma separated list
     *                       of IDs.<br /><br /><b> For example:
     *                       </b><br/><code>/buy/browse/v1/item_summary/search?category_ids=29792</code> <br
     *                       /><br /><span class="tablenote"><b> Note: </b>Currently, you can pass in only
     *                       one category ID per request.</span> <br /> <br />You can also use any
     *                       combination of the <b> category_Ids</b>, <b> epid</b>, and <b> q</b> fields.
     *                       This gives you additional control over the result set. <br /><br />For example,
     *                       let's say you are looking of a toy phone. If you search for "phone", the result
     *                       set will be mobile phones because this is the "Best Match" for this search. But
     *                       if you also include the toy category ID, the results will be what you wanted.
     *                       <br /><br /><b> For example: </b><br
     *                       /><code>/buy/browse/v1/item_summary/search?q=phone&category_ids=220</code><br />
     *                       <br />The list of eBay category IDs is not published and category IDs are not
     *                       the same across all the eBay marketplaces. You can use the following techniques
     *                       to find a category by site: <ul> <li>Use the <a
     *                       href="https://pages.ebay.com/sellerinformation/news/categorychanges.html "
     *                       target="_blank">Category Changes page</a>.</li> <li>Use the Taxonomy API. For
     *                       details see <a href="/api-docs/buy/buy-categories.html">Get Categories for Buy
     *                       APIs</a>. </li>  <li>Submit the following method to get the <b>
     *                       dominantCategoryId</b> for an item. <br /><br
     *                       /><code>/buy/browse/v1/item_summary/search?q=<em>
     *                       keyword</em>&fieldgroups=ASPECT_REFINEMENTS  </code></li></ul>  <span
     *                       class="tablenote"> <b> Note:</b> If a top-level (L1) category is specified, you
     *                       <b> must</b> also include the <b> q</b> query parameter.</span> <br /><br /><b>
     *                       Required: </b> The method must have <b> category_ids</b>, <b> epid</b>, <b>
     *                       gtin</b>, or <b> q</b>  (or any combination of these)
     *                       'charity_ids'	string	The charity ID is used to limit the results to only items
     *                       associated with the specified charity. This field can have one charity ID or a
     *                       comma separated list of IDs. The method will return all the items associated
     *                       with the specified charities.<br /><br /> <b>For example:</b><br
     *                       /><code>/buy/browse/v1/item_summary/search?charity_ids=13-1788491,300108469</code><br
     *                       /><br />The charity ID is the charity's registration ID, also known as the
     *                       Employer Identification Number (EIN). In GB, it is the Charity Registration
     *                       Number (CRN), commonly called "Charity Number".   <ul><li>To find the charities
     *                       eBay supports, you can search for a charity at <a
     *                       href="https://charity.ebay.com/search " target="_blank">Charity Search </a> or
     *                       go to <a href="https://www.ebay.com/b/Charity/bn_7114598164 "
     *                       target="_blank">Charity Shop</a>.</li>   <li>To find the charity ID of a
     *                       specific charity, click on a charity and use the EIN number. For example, the
     *                       charity ID for  <a
     *                       href="https://charity.ebay.com/charity/American-Red-Cross/3843 "
     *                       target="_blank">American Red Cross</a>, is <code>530196605</code>.</li></ul> You
     *                       can also use any combination of the <code>category_Ids</code> and
     *                       <code>q</code> fields with a <code>charity_Ids</code> to filter the result set.
     *                       This gives you additional control over the result set. <br /><br
     *                       /><b>Restriction: </b> This is supported only on the US and GB marketplaces.<br
     *                       /><br /><b>Maximum: </b> 20 IDs <br /><br /><b>Required:</b> One ID
     *                       'compatibility_filter'	string	This field specifies the attributes used to define
     *                       a specific product. The service searches for items matching the keyword or
     *                       matching the keyword and a product attribute value in the title of the item.
     *                       <br /><br />For example, if the keyword is <code>brakes</code> and
     *                       <code>compatibility-filter=Year:2018;Make:Honda</code>, the items returned are
     *                       items with brakes, 2018, or Honda in the title.  <br /><br />The service uses
     *                       the product attributes to determine if the item is compatible.    The service
     *                       returns the attributes that are compatible and the <a
     *                       href="/api-docs/buy/browse/resources/item_summary/methods/search#response.itemSummaries.compatibilityMatch">
     *                       CompatibilityMatchEnum</a> value that indicates how well the item matches the
     *                       attributes.  <br /><br />For the best compatibility results, submit all the
     *                       attributes used to define the product. <br /><br /><b>Best Practice: </b> Submit
     *                       all the <a
     *                       href="/api-docs/buy/static/api-browse.html#product-attributes">product
     *                       attributes</a> for the specific product.   <br /><br />For more details, see <a
     *                       href="/api-docs/buy/static/api-browse.html#Check">Check compatibility</a> in the
     *                       Buy Integration Guide.  <br /><br /> <span class="tablenote"><b>Note: </b> The
     *                       only products supported are cars, trucks, and motorcycles. </span>  <br /><br />
     *                       <p>For an example, see the <a
     *                       href="/api-docs/buy/browse/resources/item_summary/methods/search#w4-w1-w5-ReturnItemsthatareCompatiblewiththeKeywordandVehicle-9">Samples</a>
     *                       section. <br /><br /> <span class="tablenote"><b>Note: </b> Testing in Sandbox
     *                       is only supported using mock data. See <a
     *                       href="/api-docs/buy/static/api-browse.html#sbox-test">Testing search in the
     *                       Sandbox</a> for details. </span>   <br /><br /><b>Required: </b><ul> <li><b>
     *                       q</b> (keyword)</li>  <li> one fitment supported category ID (such as
     *                       <code>33559</code> Brakes)</li>  <li> a least one <a
     *                       href="/api-docs/buy/static/api-browse.html#product-attributes">product attribute
     *                       name/value pair</a></li></ul> For implementation help, refer to eBay API
     *                       documentation at
     *                       https://developer.ebay.com/api-docs/buy/browse/types/gct:CompatibilityFilter
     *                       'epid'	string	The ePID is the eBay product identifier of a product from the eBay
     *                       product catalog. This field limits the results to only items in the specified
     *                       ePID. <br /><br />The <b> Marketing</b> API <b>getMerchandisedProducts</b>
     *                       method and the <b>Browse</b> API <b> getItem</b>, <b> getItemByLegacyId</b>, and
     *                       <b> getItemsByItemGroup</b> calls return the ePID of the product.  You can also
     *                       use the <a
     *                       href="/api-docs/commerce/catalog/resources/product_summary/methods/search">product_summary/search</a>
     *                       method in the <b>Catalog</b> API to search for the ePID of the product. <br
     *                       /><br /><b> For example:
     *                       </b><br/><code>/buy/browse/v1/item_summary/search?epid=15032</code> <br /><br
     *                       /><b> Maximum: </b> 1    <br /><br /><b> Required: </b> The method must have
     *                       <b> category_ids</b>, <b> epid</b>,  <b> gtin</b>,  or <b> q</b>  (or any
     *                       combination of these)
     *                       'fieldgroups'	string	This field is a comma separated list of values that lets
     *                       you control what is returned in the response. The default is <b>
     *                       MATCHING_ITEMS</b>, which returns the items that match the keyword or category
     *                       specified. The other values return data that can be used to create histograms or
     *                       provide additional information.<br /><br /><b>Valid Values:</b> <ul><li><b>
     *                       ASPECT_REFINEMENTS</b> - This returns the <a
     *                       href="#response.refinement.aspectDistributions">aspectDistributions</a>
     *                       container, which has the <b>dominantCategoryId</b>, <b>matchCount</b>, and
     *                       <b>refinementHref</b> for the various aspects of the items found. For example,
     *                       if you searched for 'Mustang', some of the aspect would be <b>Model Year</b>,
     *                       <b>Exterior Color</b>, <b>Vehicle Mileage</b>, etc.<br /><br /><span
     *                       class="tablenote"> <b>Note:</b> ASPECT_REFINEMENTS are category
     *                       specific.</span></li><li><b>BUYING_OPTION_REFINEMENTS</b> - This returns the <a
     *                       href="#response.refinement.buyingOptionDistributions">buyingOptionDistributions</a>
     *                       container, which has the <b>matchCount</b> and <b>refinementHref</b> for
     *                       <b>AUCTION</b>, <b>FIXED_PRICE</b> (Buy It Now), and <b>CLASSIFIED_AD</b>
     *                       items.</li><li><b>CATEGORY_REFINEMENTS</b> - This returns the <a
     *                       href="#response.refinement.categoryDistributions">categoryDistributions</a>
     *                       container, which has the categories that the item is
     *                       in.</li><li><b>CONDITION_REFINEMENTS</b> - This returns the <a
     *                       href="#response.refinement.conditionDistributions">conditionDistributions</a>
     *                       container, such as <b>NEW</b>, <b>USED</b>, etc. Within these groups are
     *                       multiple states of the condition. For example, <b>New</b> can be New without
     *                       tag, New in box, New without box, etc.</li><li><b>EXTENDED</b> - This returns
     *                       the <a
     *                       href="/api-docs/buy/browse/resources/item_summary/methods/search#response.itemSummaries.shortDescription">shortDescription</a>
     *                       field, which provides condition and item aspect information and the <a
     *                       href="/api-docs/buy/browse/resources/item_summary/methods/search#response.itemSummaries.itemLocation.city">itemLocation.city</a>
     *                       field.</li><li><b>MATCHING_ITEMS</b> - This is meant to be used with one or more
     *                       of the refinement values above. You use this to return the specified refinements
     *                       and all the matching items.</li><li><b>FULL</b> - This returns all the
     *                       refinement containers and all the matching items.</li></ul>Code so that your app
     *                       gracefully handles any future changes to this list.<br /><br /><b>Default:</b>
     *                       MATCHING_ITEMS
     *                       'filter'	string	An array of field filters that can be used to limit/customize
     *                       the result set. <br /><br /><b> For example: </b><br
     *                       /><code>/buy/browse/v1/item_summary/search?q=shirt&filter=price:[10..50]</code><br
     *                       /><br />You can also combine filters. <br
     *                       /><code>/buy/browse/v1/item_summary/search?q=shirt&filter=price:[10..50],sellers:{rpseller|bigSal}</code><br
     *                       /><br /><span class="tablenote"><span
     *                       style="color:#004680"><strong>Note:</strong></span> Refer to <a
     *                       href="/api-docs/buy/static/ref-buy-browse-filters.html">Buy API Field
     *                       Filters</a> for details and examples of all supported filters.</span> For
     *                       implementation help, refer to eBay API documentation at
     *                       https://developer.ebay.com/api-docs/buy/browse/types/cos:FilterField
     *                       'gtin'	string	This field lets you search by the Global Trade Item Number of the
     *                       item as defined by <a href="https://www.gtin.info "
     *                       target="_blank">https://www.gtin.info</a>. You can search only by UPC (Universal
     *                       Product Code). If you have other formats of GTIN, you need to search by keyword.
     *                       <br /><br /><b> For example: </b><br/><code>
     *                       /buy/browse/v1/item_summary/search?gtin=099482432621</code> <br /><br /> <b>
     *                       Maximum: </b> 1     <br /><br /><b> Required: </b> The method must have <b>
     *                       category_ids</b>, <b> epid</b>, <b> gtin</b>, or <b> q</b> (or any combination
     *                       of these)
     *                       'limit'	string	The number of items from the result set returned in a single
     *                       page. <br /><br /><span class="tablenote"><b>Note:</b> If a value is set in the
     *                       <b>limit</b> field, the value of <b>offset</b> must be either zero or a multiple
     *                       of the <b>limit</b> value. An error is returned for invalid values of
     *                       <b>offset</b>.</span> <br /><br /><b>Default:</b> 50 <br /><br /><b>Maximum
     *                       number of items per page (limit):</b> 200  <br /><br /><b>Maximum number of
     *                       items in a result set:</b> 10,000
     *                       'offset'	string	Specifies the number of items to skip in the result set. This is
     *                       used with the <b>limit</b> field to control the pagination of the output. <br
     *                       /><br />For example, if <b>offset</b> is 0 and <b>limit</b> is 10, the method
     *                       will retrieve items 1-10 from the list of items returned; if <b>offset</b> is 10
     *                       and <b>limit</b> is 10, the method will retrieve items 11-20 from the list of
     *                       items returned. <br /><br /><span class="tablenote"><b>Note:</b> The value of
     *                       <b>offset</b> must be either zero or a multiple of the value set in the
     *                       <b>limit</b> field. An empty result set is returned for invalid values of
     *                       <b>offset</b>.</span> <br /><br /><b> Valid Values</b>: 0-10,000 (inclusive) <br
     *                       /><br /><b>Default:</b> 0 <br /><br /><b>Maximum number of items returned:</b>
     *                       10,000
     *                       'q'	string	A string consisting of one or more keywords that are used to search
     *                       for items on eBay. The keywords are handled as follows:<ul><li>If the keywords
     *                       are separated by a space, it is treated as an AND. In the following example, the
     *                       query returns items that have iphone <b>AND</b> ipad.<br /><br
     *                       /><code>/buy/browse/v1/item_summary/search?q=iphone ipad</code><br/><br
     *                       /></li><li>If the keywords are input using parentheses and separated by a comma,
     *                       or if they are URL-encoded, it is treated as an OR. In the following examples,
     *                       the query returns items that have iphone <b>OR</b> ipad.<br /><br
     *                       /><code>/buy/browse/v1/item_summary/search?q=(iphone, ipad)</code><br /><br
     *                       /><code>/buy/browse/v1/item_summary/search?q=%28iphone%2c%20ipad%29</code><br
     *                       /><br /></li></ul><b>Restriction:</b> The <code>*</code> wildcard character is
     *                       <b>not</b> allowed in this field.<br /><br /><b>Required:</b> The method must
     *                       have <b>category_ids</b>, <b>epid</b>, <b>gtin</b>, or <b>q</b> (or any
     *                       combination of these).
     *                       'sort'	string	The order and field name that is used to sort the items. <br /><br
     *                       />You can sort items by price, distance, or listing date. To sort in descending
     *                       order, insert a hyphen (<code>-</code>) before the name of the sorting option.
     *                       If no <b>sort</b> parameter is submitted, the result set is sorted by &quot;<a
     *                       href="https://pages.ebay.com/help/sell/searchstanding.html "
     *                       target="_blank">Best Match</a>&quot;.<br /><br />Here are some examples showing
     *                       how to use the <b>sort</b> query parameter:<br
     *                       /><ul><li><b><code>sort=distance</code></b> - This sorts by <i>distance</i> in
     *                       ascending order (shortest distance first). This sorting option is only
     *                       applicable if the <a
     *                       href="/api-docs/buy/static/ref-buy-browse-filters.html#pickupCountry">pickup</a>
     *                       filters are used, and only ascending order is
     *                       supported.</li><li><b><code>sort=-price</code></b> - This sorts by <i>price +
     *                       shipping cost</i> in descending order (highest price first). This sorting option
     *                       (by <i>price</i>) is only guaranteed to work correctly if the
     *                       <b>X-EBAY-C-ENDUSERCTX</b> request header is used, with the
     *                       <b>contextualLocation</b> parameter being used to set the delivery country and
     *                       postal code. Here is an example of how this header would be used to do this
     *                       (note the URL encoding):<br /><br /><code>X-EBAY-C-ENDUSERCTX:
     *                       contextualLocation=country%3DUS%2Czip%3D19406</code><br
     *                       /></li><li><b><code>sort=newlyListed</code></b> - This sorts by <i>listing
     *                       date</i> (most recently listed/newest items
     *                       first).</li><li><b><code>sort=endingSoonest</code></b> - This sorts by
     *                       <i>date/time</i> the listing ends (listings nearest to end date/time
     *                       first).</li></ul><b>Default:</b> Ascending For implementation help, refer to
     *                       eBay API documentation at
     *                       https://developer.ebay.com/api-docs/buy/browse/types/cos:SortField
     *
     * @return SearchPagedCollection|UnexpectedResponse
     */
    public function search(array $queries = [])
    {
        return $this->request(
        'search',
        'GET',
        'item_summary/search',
        null,
        $queries,
        []
        );
    }
}
