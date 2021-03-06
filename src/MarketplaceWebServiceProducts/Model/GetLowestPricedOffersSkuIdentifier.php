<?php namespace MWSProducts\Model;
/*******************************************************************************
 * Copyright 2009-2017 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 * Library Version: 2017-03-22
 * Generated: Wed Mar 22 23:24:40 UTC 2017
 */

/**
 * @see MarketplaceWebServiceProducts_Model
 */

use MWSProducts\MarketplaceWebServiceProducts_Model;


/**
 * MarketplaceWebServiceProducts_Model_GetLowestPricedOffersSkuIdentifier
 *
 * Properties:
 * <ul>
 *
 * <li>MarketplaceId: string</li>
 * <li>SellerSKU: string</li>
 * <li>ItemCondition: string</li>
 * <li>TimeOfOfferChange: string</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProducts_Model_GetLowestPricedOffersSkuIdentifier extends MarketplaceWebServiceProducts_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'MarketplaceId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ItemCondition' => array('FieldValue' => null, 'FieldType' => 'string'),
            'TimeOfOfferChange' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the MarketplaceId property.
     *
     * @return String MarketplaceId.
     */
    public function getMarketplaceId()
    {
        return $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Check to see if MarketplaceId is set.
     *
     * @return true if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
        return !is_null($this->_fields['MarketplaceId']['FieldValue']);
    }

    /**
     * Set the value of MarketplaceId, return this.
     *
     * @param marketplaceId
     *             The new value to set.
     *
     * @return MarketplaceWebServiceProducts_Model_GetLowestPricedOffersSkuIdentifier|This
     */
    public function withMarketplaceId($value)
    {
        $this->setMarketplaceId($value);
        return $this;
    }

    /**
     * Set the value of the MarketplaceId property.
     *
     * @param string marketplaceId
     * @return MarketplaceWebServiceProducts_Model_GetLowestPricedOffersSkuIdentifier|this
     */
    public function setMarketplaceId($value)
    {
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the SellerSKU property.
     *
     * @return String SellerSKU.
     */
    public function getSellerSKU()
    {
        return $this->_fields['SellerSKU']['FieldValue'];
    }

    /**
     * Check to see if SellerSKU is set.
     *
     * @return true if SellerSKU is set.
     */
    public function isSetSellerSKU()
    {
        return !is_null($this->_fields['SellerSKU']['FieldValue']);
    }

    /**
     * Set the value of SellerSKU, return this.
     *
     * @param sellerSKU
     *             The new value to set.
     *
     * @return MarketplaceWebServiceProducts_Model_GetLowestPricedOffersSkuIdentifier|This
     */
    public function withSellerSKU($value)
    {
        $this->setSellerSKU($value);
        return $this;
    }

    /**
     * Set the value of the SellerSKU property.
     *
     * @param string sellerSKU
     * @return MarketplaceWebServiceProducts_Model_GetLowestPricedOffersSkuIdentifier|this
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ItemCondition property.
     *
     * @return String ItemCondition.
     */
    public function getItemCondition()
    {
        return $this->_fields['ItemCondition']['FieldValue'];
    }

    /**
     * Check to see if ItemCondition is set.
     *
     * @return true if ItemCondition is set.
     */
    public function isSetItemCondition()
    {
        return !is_null($this->_fields['ItemCondition']['FieldValue']);
    }

    /**
     * Set the value of ItemCondition, return this.
     *
     * @param itemCondition
     *             The new value to set.
     *
     * @return MarketplaceWebServiceProducts_Model_GetLowestPricedOffersSkuIdentifier|This
     */
    public function withItemCondition($value)
    {
        $this->setItemCondition($value);
        return $this;
    }

    /**
     * Set the value of the ItemCondition property.
     *
     * @param string itemCondition
     * @return MarketplaceWebServiceProducts_Model_GetLowestPricedOffersSkuIdentifier|this
     */
    public function setItemCondition($value)
    {
        $this->_fields['ItemCondition']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the TimeOfOfferChange property.
     *
     * @return XMLGregorianCalendar TimeOfOfferChange.
     */
    public function getTimeOfOfferChange()
    {
        return $this->_fields['TimeOfOfferChange']['FieldValue'];
    }

    /**
     * Check to see if TimeOfOfferChange is set.
     *
     * @return true if TimeOfOfferChange is set.
     */
    public function isSetTimeOfOfferChange()
    {
        return !is_null($this->_fields['TimeOfOfferChange']['FieldValue']);
    }

    /**
     * Set the value of TimeOfOfferChange, return this.
     *
     * @param timeOfOfferChange
     *             The new value to set.
     *
     * @return MarketplaceWebServiceProducts_Model_GetLowestPricedOffersSkuIdentifier|This
     */
    public function withTimeOfOfferChange($value)
    {
        $this->setTimeOfOfferChange($value);
        return $this;
    }

    /**
     * Set the value of the TimeOfOfferChange property.
     *
     * @param string timeOfOfferChange
     * @return MarketplaceWebServiceProducts_Model_GetLowestPricedOffersSkuIdentifier|this
     */
    public function setTimeOfOfferChange($value)
    {
        $this->_fields['TimeOfOfferChange']['FieldValue'] = $value;
        return $this;
    }

}
