<?php namespace MWSProducts;

use MWSProducts\Model\MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse;
use MWSProducts\Model\MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKUResponse;
use MWSProducts\Model\MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse;
use MWSProducts\Model\MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse;
use MWSProducts\Model\MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForASINResponse;
use MWSProducts\Model\MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForSKUResponse;
use MWSProducts\Model\MarketplaceWebServiceProducts_Model_GetMatchingProductForIdResponse;
use MWSProducts\Model\MarketplaceWebServiceProducts_Model_GetMatchingProductResponse;
use MWSProducts\Model\MarketplaceWebServiceProducts_Model_GetMyFeesEstimateResponse;
use MWSProducts\Model\MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse;
use MWSProducts\Model\MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse;
use MWSProducts\Model\MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse;
use MWSProducts\Model\MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKUResponse;
use MWSProducts\Model\MarketplaceWebServiceProducts_Model_GetServiceStatusResponse;
use MWSProducts\Model\MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse;

/**
 * @see MarketplaceWebServiceProducts_Interface
 */
class MarketplaceWebServiceProducts_Mock implements MarketplaceWebServiceProducts_Interface
{
    // Public API ------------------------------------------------------------//

    /**
     * Get Competitive Pricing For ASIN
     * Gets competitive pricing and related information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASIN request or MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASIN object itself
     * @return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse
     *
     * @throws \Exception
     * @see MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASIN
     */
    public function getCompetitivePricingForASIN($request)
    {
        require_once(dirname(__FILE__) . '/Model/GetCompetitivePricingForASINResponse.php');
        return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForASINResponse::fromXML($this->_invoke('GetCompetitivePricingForASIN'));
    }

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */
            TRUE);
    }

    /**
     * Get Competitive Pricing For SKU
     * Gets competitive pricing and related information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKU request or MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKU object itself
     * @return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKUResponse
     *
     * @see MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKU
     */
    public function getCompetitivePricingForSKU($request)
    {
        require_once(dirname(__FILE__) . '/Model/GetCompetitivePricingForSKUResponse.php');
        return MarketplaceWebServiceProducts_Model_GetCompetitivePricingForSKUResponse::fromXML($this->_invoke('GetCompetitivePricingForSKU'));
    }

    /**
     * Get Lowest Offer Listings For ASIN
     * Gets some of the lowest prices based on the product identified by the given
     * MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASIN request or MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASIN object itself
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse
     *
     * @see MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASIN
     */
    public function getLowestOfferListingsForASIN($request)
    {
        require_once(dirname(__FILE__) . '/Model/GetLowestOfferListingsForASINResponse.php');
        return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForASINResponse::fromXML($this->_invoke('GetLowestOfferListingsForASIN'));
    }

    /**
     * Get Lowest Offer Listings For SKU
     * Gets some of the lowest prices based on the product identified by the given
     * SellerId and SKU.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKU request or MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKU object itself
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse
     *
     * @see MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKU
     */
    public function getLowestOfferListingsForSKU($request)
    {
        require_once(dirname(__FILE__) . '/Model/GetLowestOfferListingsForSKUResponse.php');
        return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse::fromXML($this->_invoke('GetLowestOfferListingsForSKU'));
    }

    /**
     * Get Lowest Priced Offers For ASIN
     * Retrieves the lowest priced offers based on the product identified by the given
     *     ASIN.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForASIN request or MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForASIN object itself
     * @return MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForASINResponse
     *
     * @see MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForASIN
     */
    public function getLowestPricedOffersForASIN($request)
    {
        require_once(dirname(__FILE__) . '/Model/GetLowestPricedOffersForASINResponse.php');
        return MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForASINResponse::fromXML($this->_invoke('GetLowestPricedOffersForASIN'));
    }

    /**
     * Get Lowest Priced Offers For SKU
     * Retrieves the lowest priced offers based on the product identified by the given
     *     SellerId and SKU.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForSKU request or MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForSKU object itself
     * @return MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForSKUResponse
     *
     * @see MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForSKU
     */
    public function getLowestPricedOffersForSKU($request)
    {
        require_once(dirname(__FILE__) . '/Model/GetLowestPricedOffersForSKUResponse.php');
        return MarketplaceWebServiceProducts_Model_GetLowestPricedOffersForSKUResponse::fromXML($this->_invoke('GetLowestPricedOffersForSKU'));
    }

    /**
     * Get Matching Product
     * GetMatchingProduct will return the details (attributes) for the
     * given ASIN.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMatchingProduct request or MarketplaceWebServiceProducts_Model_GetMatchingProduct object itself
     * @return MarketplaceWebServiceProducts_Model_GetMatchingProductResponse
     *
     * @see MarketplaceWebServiceProducts_Model_GetMatchingProduct
     */
    public function getMatchingProduct($request)
    {
        require_once(dirname(__FILE__) . '/Model/GetMatchingProductResponse.php');
        return MarketplaceWebServiceProducts_Model_GetMatchingProductResponse::fromXML($this->_invoke('GetMatchingProduct'));
    }

    /**
     * Get Matching Product For Id
     * GetMatchingProduct will return the details (attributes) for the
     * given Identifier list. Identifer type can be one of [SKU|ASIN|UPC|EAN|ISBN|GTIN|JAN]
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMatchingProductForId request or MarketplaceWebServiceProducts_Model_GetMatchingProductForId object itself
     * @return MarketplaceWebServiceProducts_Model_GetMatchingProductForIdResponse
     *
     * @see MarketplaceWebServiceProducts_Model_GetMatchingProductForId
     */
    public function getMatchingProductForId($request)
    {
        require_once(dirname(__FILE__) . '/Model/GetMatchingProductForIdResponse.php');
        return MarketplaceWebServiceProducts_Model_GetMatchingProductForIdResponse::fromXML($this->_invoke('GetMatchingProductForId'));
    }

    /**
     * Get My Fees Estimate
     * Retrieves the fees estimate for the
     *         products identified by the given
     *         ASIN/SKU list.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMyFeesEstimate request or MarketplaceWebServiceProducts_Model_GetMyFeesEstimate object itself
     * @return MarketplaceWebServiceProducts_Model_GetMyFeesEstimateResponse
     *
     * @see MarketplaceWebServiceProducts_Model_GetMyFeesEstimate
     */
    public function getMyFeesEstimate($request)
    {
        require_once(dirname(__FILE__) . '/Model/GetMyFeesEstimateResponse.php');
        return MarketplaceWebServiceProducts_Model_GetMyFeesEstimateResponse::fromXML($this->_invoke('GetMyFeesEstimate'));
    }

    /**
     * Get My Price For ASIN
     * <!-- Wrong doc in current code -->
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMyPriceForASIN request or MarketplaceWebServiceProducts_Model_GetMyPriceForASIN object itself
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse
     *
     * @see MarketplaceWebServiceProducts_Model_GetMyPriceForASIN
     */
    public function getMyPriceForASIN($request)
    {
        require_once(dirname(__FILE__) . '/Model/GetMyPriceForASINResponse.php');
        return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse::fromXML($this->_invoke('GetMyPriceForASIN'));
    }

    /**
     * Get My Price For SKU
     * <!-- Wrong doc in current code -->
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetMyPriceForSKU request or MarketplaceWebServiceProducts_Model_GetMyPriceForSKU object itself
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse
     *
     * @see MarketplaceWebServiceProducts_Model_GetMyPriceForSKU
     */
    public function getMyPriceForSKU($request)
    {
        require_once(dirname(__FILE__) . '/Model/GetMyPriceForSKUResponse.php');
        return MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResponse::fromXML($this->_invoke('GetMyPriceForSKU'));
    }

    /**
     * Get Product Categories For ASIN
     * Gets categories information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetProductCategoriesForASIN request or MarketplaceWebServiceProducts_Model_GetProductCategoriesForASIN object itself
     * @return MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse
     *
     * @see MarketplaceWebServiceProducts_Model_GetProductCategoriesForASIN
     */
    public function getProductCategoriesForASIN($request)
    {
        require_once(dirname(__FILE__) . '/Model/GetProductCategoriesForASINResponse.php');
        return MarketplaceWebServiceProducts_Model_GetProductCategoriesForASINResponse::fromXML($this->_invoke('GetProductCategoriesForASIN'));
    }

    /**
     * Get Product Categories For SKU
     * Gets categories information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKU request or MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKU object itself
     * @return MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKUResponse
     *
     * @see MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKU
     */
    public function getProductCategoriesForSKU($request)
    {
        require_once(dirname(__FILE__) . '/Model/GetProductCategoriesForSKUResponse.php');
        return MarketplaceWebServiceProducts_Model_GetProductCategoriesForSKUResponse::fromXML($this->_invoke('GetProductCategoriesForSKU'));
    }

    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     * takes no input.
     * All API sections within the API are required to implement this operation.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_GetServiceStatus request or MarketplaceWebServiceProducts_Model_GetServiceStatus object itself
     * @return MarketplaceWebServiceProducts_Model_GetServiceStatusResponse
     *
     * @see MarketplaceWebServiceProducts_Model_GetServiceStatus
     */
    public function getServiceStatus($request)
    {
        require_once(dirname(__FILE__) . '/Model/GetServiceStatusResponse.php');
        return MarketplaceWebServiceProducts_Model_GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    // Private API ------------------------------------------------------------//

    /**
     * List Matching Products
     * ListMatchingProducts can be used to
     * find products that match the given criteria.
     *
     * @param mixed $request array of parameters for MarketplaceWebServiceProducts_Model_ListMatchingProducts request or MarketplaceWebServiceProducts_Model_ListMatchingProducts object itself
     * @return MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse
     *
     * @see MarketplaceWebServiceProducts_Model_ListMatchingProducts
     */
    public function listMatchingProducts($request)
    {
        require_once(dirname(__FILE__) . '/Model/ListMatchingProductsResponse.php');
        return MarketplaceWebServiceProducts_Model_ListMatchingProductsResponse::fromXML($this->_invoke('ListMatchingProducts'));
    }

}
