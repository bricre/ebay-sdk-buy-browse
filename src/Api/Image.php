<?php

namespace Ebay\Buy\Browse\Api;

use Ebay\Buy\Browse\Model\SearchByImageRequest;
use Ebay\Buy\Browse\Model\SearchPagedCollection;

class Image extends AbstractAPI
{
    /**
     * <img src="/cms/img/docs/experimental-icon.svg" class="legend-icon
     * experimental-icon" alt="Experimental Release" title="Experimental Release">
     * This is an <a
     * href="https://developer.ebay.com/api-docs/static/versioning.html#experimental
     * ">Experimental</a> method. <p>This method searches for eBay items based on a
     * image and retrieves summaries of the items. You pass in a Base64 image in the
     * request payload and can refine the search by category, or eBay product ID
     * (ePID), or a combination of these using URI parameters.  <br /><br />To get the
     * Base64 image string, you can use sites such as <a
     * href="https://codebeautify.org/image-to-base64-converter "
     * target="_blank">https://codebeautify.org/image-to-base64-converter</a>.
     * </p><p>This method also supports the following:  <ul> <li>Filtering by the value
     * of one or multiple fields, such as listing format, item condition, price range,
     * location, and more.  For the fields supported by this method, see the <a
     * href="#uri.filter">filter</a> parameter.</li><li>Filtering by item aspects using
     * the <a href="#uri.aspect_filter">aspect_filter</a> parameter. </li>  </ul></p>
     * <p>For details and examples of these capabilities, see <a
     * href="/api-docs/buy/static/api-browse.html">Browse API</a> in the Buying
     * Integration Guide.</p><h3><b>Pagination and sort controls</b></h3>  <p>There are
     * pagination controls (<b>limit</b> and <b>offset</b> fields) and <b> sort</b>
     * query parameters that control/sort the data that is returned. By default, the
     * results are sorted by &quot;Best Match&quot;. For more information about  Best
     * Match, see the eBay help page <a
     * href="https://pages.ebay.com/help/sell/searchstanding.html "
     * target="_blank">Best Match</a>.  </p>    <h3><b> URLs for this
     * method</b></h3><p><ul><li><b>Production URL:</b>
     * <code>https://api.ebay.com/buy/browse/v1/item_summary/search_by_image?</code></li><li><b>
     * Sandbox URL:  </b>Due to the data available, this method is not supported in the
     * eBay Sandbox. To test your integration, use the Production
     * URL.</li></ul></p><h3><b> Request headers</b></h3> This method uses the
     * <b>X-EBAY-C-ENDUSERCTX</b> request header to support revenue sharing for eBay
     * Partner Networks and to improve the accuracy of shipping and delivery time
     * estimations. For details see, <a
     * href="/api-docs/buy/static/api-browse.html#Headers">Request headers</a> in the
     * Buying Integration Guide.   <h3><b>URL Encoding for Parameters</b></h3> <p>Query
     * parameter values need to be URL encoded. For details, see <a
     * href="/api-docs/static/rest-request-components.html#parameters">URL encoding
     * query parameter values</a>.  For readability, code examples in this document
     * have not been URL encoded.</p>  <h3><b>Restrictions </b></h3> <p>This method can
     * return a maximum of 10,000 items. For a list of supported sites and other
     * restrictions, see <a href="/api-docs/buy/browse/overview.html#API">API
     * Restrictions</a>.</p> <span class="tablenote"><b>eBay Partner Network: </b> In
     * order to receive a commission for your sales, you must use the URL returned in
     * the <code>itemAffiliateWebUrl</code> field to forward your buyer to the ebay.com
     * site. </span>.
     *
     * @param SearchByImageRequest $Model   the container for the image information
     *                                      fields
     * @param array                $queries options:
     *                                      'aspect_filter'	string	This field lets you filter by item aspects. The aspect
     *                                      name/value pairs and category, which is required, is used to limit the results
     *                                      to specific aspects of the item. For example, in a clothing category one aspect
     *                                      pair would be Color/Red. <br /><br />For example, the method below uses the
     *                                      category ID for Women's Clothing. This will return only items for a woman's red
     *                                      shirt.<br /><br
     *                                      /><code>category_ids=15724&aspect_filter=categoryId:15724,Color:{Red}</code>
     *                                      <br /><br /><b>Required: </b> The category ID is required <i>twice</i>; once as
     *                                      a URI parameter and as part of the <b> aspect_filter</b>. For implementation
     *                                      help, refer to eBay API documentation at
     *                                      https://developer.ebay.com/api-docs/buy/browse/types/gct:AspectFilter
     *                                      'category_ids'	string	The category ID is used to limit the results. This field
     *                                      can have one category ID or a comma separated list of IDs.    <br /><br /><span
     *                                      class="tablenote"><b> Note: </b>Currently, you can pass in only one category ID
     *                                      per request.</span> <br /> <br />You can also use any combination of the <b>
     *                                      category_Ids</b> and <b> epid</b> fields. This gives you additional control over
     *                                      the result set.<br /> <br />The list of eBay category IDs is not published and
     *                                      category IDs are not the same across all the eBay marketplaces. You can use the
     *                                      following techniques to find a category by site: <ul> <li>Use the <a
     *                                      href="https://pages.ebay.com/sellerinformation/news/categorychanges.html "
     *                                      target="_blank">Category Changes page</a>.</li> <li>Use the Taxonomy API. For
     *                                      details see <a href="/api-docs/buy/buy-categories.html">Get Categories for Buy
     *                                      APIs</a>. </li>  <li>Submit the following method to get the <b>
     *                                      dominantCategoryId</b> for an item. <br
     *                                      /><code>/buy/browse/v1/item_summary/search?q=<em >
     *                                      keyword</em>&fieldgroups=ASPECT_REFINEMENTS  </code></li></ul>   <b> Required:
     *                                      </b> The method must have <b> category_ids</b> or <b> epid</b> (or any
     *                                      combination of these)
     *                                      'charity_ids'	string	The charity ID is used to limit the results to only items
     *                                      associated with the specified charity. This field can have one charity ID or a
     *                                      comma separated list of IDs. The method will return all the items associated
     *                                      with the specified charities.<br /><br /> <b>For example:</b><br
     *                                      /><code>/buy/browse/v1/item_summary/search?charity_ids=13-1788491,300108469</code><br
     *                                      /><br />The charity ID is the charity's registration ID, also known as the
     *                                      Employer Identification Number (EIN). In GB, it is the Charity Registration
     *                                      Number (CRN), commonly called "Charity Number".   <ul><li>To find the charities
     *                                      eBay supports, you can search for a charity at <a
     *                                      href="https://charity.ebay.com/search " target="_blank">Charity Search </a> or
     *                                      go to <a href="https://www.ebay.com/b/Charity/bn_7114598164 "
     *                                      target="_blank">Charity Shop</a>.</li>   <li>To find the charity ID of a
     *                                      specific charity, click on a charity and use the EIN number. For example, the
     *                                      charity ID for  <a
     *                                      href="https://charity.ebay.com/charity/American-Red-Cross/3843 "
     *                                      target="_blank">American Red Cross</a>, is <code>530196605</code>.</li></ul> You
     *                                      can also use any combination of the <code>category_Ids</code> and
     *                                      <code>q</code> fields with a <code>charity_Ids</code> to filter the result set.
     *                                      This gives you additional control over the result set. <br /><br
     *                                      /><b>Restriction: </b> This is supported only on the US and GB marketplaces.<br
     *                                      /><br /><b>Maximum: </b> 20 IDs <br /><br /><b>Required:</b> One ID
     *                                      'fieldgroups'	string	This field is a comma separated list of values that lets
     *                                      you control what is returned in the response. The default is
     *                                      <b>MATCHING_ITEMS</b>, which returns the items that match the keyword or
     *                                      category specified. The other values return data that can be used to create
     *                                      histograms or provide additional information.<br /><br /><b>Valid
     *                                      Values:</b><ul><li><b>ASPECT_REFINEMENTS</b> - This returns the <a
     *                                      href="#response.refinement.aspectDistributions">aspectDistributions</a>
     *                                      container, which has the <b>dominantCategoryId</b>, <b>matchCount</b>, and
     *                                      <b>refinementHref</b> for the various aspects of the items found. For example,
     *                                      if you searched for 'Mustang', some of the aspect would be <b>Model Year</b>,
     *                                      <b>Exterior Color</b>, <b>Vehicle Mileage</b>, etc.<br /><br /><span
     *                                      class="tablenote"><b>Note:</b> ASPECT_REFINEMENTS are category
     *                                      specific.</span></li><li><b>BUYING_OPTION_REFINEMENTS</b> - This returns the <a
     *                                      href="#response.refinement.buyingOptionDistributions">buyingOptionDistributions</a>
     *                                      container, which has the <b>matchCount</b> and <b>refinementHref</b> for
     *                                      <b>AUCTION</b>, <b>FIXED_PRICE</b> (Buy It Now), and <b>CLASSIFIED_AD</b>
     *                                      items.</li><li><b>CATEGORY_REFINEMENTS</b> - This returns the <a
     *                                      href="#response.refinement.categoryDistributions">categoryDistributions</a>
     *                                      container, which has the categories that the item is
     *                                      in.</li><li><b>CONDITION_REFINEMENTS</b> - This returns the <a
     *                                      href="#response.refinement.conditionDistributions">conditionDistributions</a>
     *                                      container, such as <b> NEW</b>, <b> USED</b>, etc. Within these groups are
     *                                      multiple states of the condition. For example, <b>New</b> can be New without
     *                                      tag, New in box, New without box, etc.</li><li><b>EXTENDED</b> - This returns
     *                                      the <a
     *                                      href="/api-docs/buy/browse/resources/item_summary/methods/search#response.itemSummaries.shortDescription">shortDescription</a>
     *                                      field, which provides condition and item aspect information and the <a
     *                                      href="/api-docs/buy/browse/resources/item_summary/methods/search#response.itemSummaries.itemLocation.city">itemLocation.city</a>
     *                                      field.</li><li><b>MATCHING_ITEMS</b> - This is meant to be used with one or more
     *                                      of the refinement values above. You use this to return the specified refinements
     *                                      and all the matching items.</li><li><b>FULL</b> - This returns all the
     *                                      refinement containers and all the matching items.</li></ul>Code so that your app
     *                                      gracefully handles any future changes to this list.<br /><br /><b>Default:</b>
     *                                      MATCHING_ITEMS
     *                                      'filter'	string	An array of field filters that can be used to limit/customize
     *                                      the result set. <br /><br /><b> For example: </b><br
     *                                      /><code>/buy/browse/v1/item_summary/search?q=shirt&filter=price:[10..50]</code><br
     *                                      /><br />You can also combine filters. <br
     *                                      /><code>/buy/browse/v1/item_summary/search?q=shirt&filter=price:[10..50],sellers:{rpseller|bigSal}</code><br
     *                                      /><br /><span class="tablenote"><span
     *                                      style="color:#004680"><strong>Note:</strong></span> Refer to <a
     *                                      href="/api-docs/buy/static/ref-buy-browse-filters.html">Buy API Field
     *                                      Filters</a> for details and examples of all supported filters.</span> For
     *                                      implementation help, refer to eBay API documentation at
     *                                      https://developer.ebay.com/api-docs/buy/browse/types/cos:FilterField
     *                                      'limit'	string	The number of items, from the result set, returned in a single
     *                                      page.  <br /><br /><b> Default:</b> 50   <br /> <br /><b> Maximum number of
     *                                      items per page (limit): </b>200  <br /> <br /> <b> Maximum number of items in a
     *                                      result set: </b> 10,000
     *                                      'offset'	string	The number of items to skip in the result set. This is used with
     *                                      the <b> limit</b> field to control the pagination of the output.  <br /><br />If
     *                                      <b> offset</b> is 0 and <b> limit</b> is 10, the method will retrieve items 1-10
     *                                      from the list of items returned, if <b> offset</b> is 10 and <b> limit</b> is
     *                                      10, the method will retrieve items 11 thru 20 from the list of items returned.
     *                                      <br /><br /><b> Valid Values</b>: 0-10,000 (inclusive)   <br /> <br /> <b>
     *                                      Default:</b> 0    <br /> <br /> <b> Maximum number of items returned: </b>
     *                                      10,000
     *                                      'sort'	string	The order and field name that is used to sort the items. <br /><br
     *                                      />You can sort items by price, distance, or listing date. To sort in descending
     *                                      order, insert a hyphen (<code>-</code>) before the name of the sorting option.
     *                                      If no <b>sort</b> parameter is submitted, the result set is sorted by &quot;<a
     *                                      href="https://pages.ebay.com/help/sell/searchstanding.html "
     *                                      target="_blank">Best Match</a>&quot;.<br /><br />Here are some examples showing
     *                                      how to use the <b>sort</b> query parameter:<br
     *                                      /><ul><li><b><code>sort=distance</code></b> - This sorts by <i>distance</i> in
     *                                      ascending order (shortest distance first). This sorting option is only
     *                                      applicable if the <a
     *                                      href="/api-docs/buy/static/ref-buy-browse-filters.html#pickupCountry">pickup</a>
     *                                      filters are used, and only ascending order is
     *                                      supported.</li><li><b><code>sort=-price</code></b> - This sorts by <i>price +
     *                                      shipping cost</i> in descending order (highest price first). This sorting option
     *                                      (by <i>price</i>) is only guaranteed to work correctly if the
     *                                      <b>X-EBAY-C-ENDUSERCTX</b> request header is used, with the
     *                                      <b>contextualLocation</b> parameter being used to set the delivery country and
     *                                      postal code. Here is an example of how this header would be used to do this
     *                                      (note the URL encoding):<br /><br /><code>X-EBAY-C-ENDUSERCTX:
     *                                      contextualLocation=country%3DUS%2Czip%3D19406</code><br
     *                                      /></li><li><b><code>sort=newlyListed</code></b> - This sorts by <i>listing
     *                                      date</i> (most recently listed/newest items
     *                                      first).</li><li><b><code>sort=endingSoonest</code></b> - This sorts by
     *                                      <i>date/time</i> the listing ends (listings nearest to end date/time
     *                                      first).</li></ul><b>Default:</b> Ascending For implementation help, refer to
     *                                      eBay API documentation at
     *                                      https://developer.ebay.com/api-docs/buy/browse/types/cos:SortField
     *
     * @return SearchPagedCollection
     */
    public function searchByImage(SearchByImageRequest $Model, array $queries = []): SearchPagedCollection
    {
        return $this->request(
        'searchByImage',
        'POST',
        'item_summary/search_by_image',
        $Model->getArrayCopy(),
        $queries,
        []
        );
    }
}
