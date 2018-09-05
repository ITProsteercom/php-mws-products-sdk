<?php namespace MWS\Model;
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

use MWS\MarketplaceWebServiceProducts_Model;


/**
 * MarketplaceWebServiceProducts_Model_LowestPriceType
 *
 * Properties:
 * <ul>
 *
 * <li>condition: string</li>
 * <li>fulfillmentChannel: string</li>
 * <li>LandedPrice: MarketplaceWebServiceProducts_Model_MoneyType</li>
 * <li>ListingPrice: MarketplaceWebServiceProducts_Model_MoneyType</li>
 * <li>Shipping: MarketplaceWebServiceProducts_Model_MoneyType</li>
 * <li>Points: MarketplaceWebServiceProducts_Model_Points</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProducts_Model_LowestPriceType extends MarketplaceWebServiceProducts_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'condition' => array('FieldValue' => null, 'FieldType' => '@string'),
            'fulfillmentChannel' => array('FieldValue' => null, 'FieldType' => '@string'),
            'LandedPrice' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'),
            'ListingPrice' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'),
            'Shipping' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'),
            'Points' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_Points'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the condition property.
     *
     * @return String condition.
     */
    public function getcondition()
    {
        return $this->_fields['condition']['FieldValue'];
    }

    /**
     * Check to see if condition is set.
     *
     * @return true if condition is set.
     */
    public function isSetcondition()
    {
        return !is_null($this->_fields['condition']['FieldValue']);
    }

    /**
     * Set the value of condition, return this.
     *
     * @param condition
     *             The new value to set.
     *
     * @return MarketplaceWebServiceProducts_Model_LowestPriceType|This
     */
    public function withcondition($value)
    {
        $this->setcondition($value);
        return $this;
    }

    /**
     * Set the value of the condition property.
     *
     * @param string condition
     * @return MarketplaceWebServiceProducts_Model_LowestPriceType|this
     */
    public function setcondition($value)
    {
        $this->_fields['condition']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the fulfillmentChannel property.
     *
     * @return String fulfillmentChannel.
     */
    public function getfulfillmentChannel()
    {
        return $this->_fields['fulfillmentChannel']['FieldValue'];
    }

    /**
     * Check to see if fulfillmentChannel is set.
     *
     * @return true if fulfillmentChannel is set.
     */
    public function isSetfulfillmentChannel()
    {
        return !is_null($this->_fields['fulfillmentChannel']['FieldValue']);
    }

    /**
     * Set the value of fulfillmentChannel, return this.
     *
     * @param fulfillmentChannel
     *             The new value to set.
     *
     * @return MarketplaceWebServiceProducts_Model_LowestPriceType|This
     */
    public function withfulfillmentChannel($value)
    {
        $this->setfulfillmentChannel($value);
        return $this;
    }

    /**
     * Set the value of the fulfillmentChannel property.
     *
     * @param string fulfillmentChannel
     * @return MarketplaceWebServiceProducts_Model_LowestPriceType|this
     */
    public function setfulfillmentChannel($value)
    {
        $this->_fields['fulfillmentChannel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the LandedPrice property.
     *
     * @return MoneyType LandedPrice.
     */
    public function getLandedPrice()
    {
        return $this->_fields['LandedPrice']['FieldValue'];
    }

    /**
     * Check to see if LandedPrice is set.
     *
     * @return true if LandedPrice is set.
     */
    public function isSetLandedPrice()
    {
        return !is_null($this->_fields['LandedPrice']['FieldValue']);
    }

    /**
     * Set the value of LandedPrice, return this.
     *
     * @param landedPrice
     *             The new value to set.
     *
     * @return MarketplaceWebServiceProducts_Model_LowestPriceType|This
     */
    public function withLandedPrice($value)
    {
        $this->setLandedPrice($value);
        return $this;
    }

    /**
     * Set the value of the LandedPrice property.
     *
     * @param MarketplaceWebServiceProducts_Model_MoneyType landedPrice
     * @return MarketplaceWebServiceProducts_Model_LowestPriceType|this
     */
    public function setLandedPrice($value)
    {
        $this->_fields['LandedPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ListingPrice property.
     *
     * @return MoneyType ListingPrice.
     */
    public function getListingPrice()
    {
        return $this->_fields['ListingPrice']['FieldValue'];
    }

    /**
     * Check to see if ListingPrice is set.
     *
     * @return true if ListingPrice is set.
     */
    public function isSetListingPrice()
    {
        return !is_null($this->_fields['ListingPrice']['FieldValue']);
    }

    /**
     * Set the value of ListingPrice, return this.
     *
     * @param listingPrice
     *             The new value to set.
     *
     * @return MarketplaceWebServiceProducts_Model_LowestPriceType|This
     */
    public function withListingPrice($value)
    {
        $this->setListingPrice($value);
        return $this;
    }

    /**
     * Set the value of the ListingPrice property.
     *
     * @param MarketplaceWebServiceProducts_Model_MoneyType listingPrice
     * @return MarketplaceWebServiceProducts_Model_LowestPriceType|this
     */
    public function setListingPrice($value)
    {
        $this->_fields['ListingPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the Shipping property.
     *
     * @return MoneyType Shipping.
     */
    public function getShipping()
    {
        return $this->_fields['Shipping']['FieldValue'];
    }

    /**
     * Check to see if Shipping is set.
     *
     * @return true if Shipping is set.
     */
    public function isSetShipping()
    {
        return !is_null($this->_fields['Shipping']['FieldValue']);
    }

    /**
     * Set the value of Shipping, return this.
     *
     * @param shipping
     *             The new value to set.
     *
     * @return MarketplaceWebServiceProducts_Model_LowestPriceType|This
     */
    public function withShipping($value)
    {
        $this->setShipping($value);
        return $this;
    }

    /**
     * Set the value of the Shipping property.
     *
     * @param MarketplaceWebServiceProducts_Model_MoneyType shipping
     * @return MarketplaceWebServiceProducts_Model_LowestPriceType|this
     */
    public function setShipping($value)
    {
        $this->_fields['Shipping']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the Points property.
     *
     * @return Points Points.
     */
    public function getPoints()
    {
        return $this->_fields['Points']['FieldValue'];
    }

    /**
     * Check to see if Points is set.
     *
     * @return true if Points is set.
     */
    public function isSetPoints()
    {
        return !is_null($this->_fields['Points']['FieldValue']);
    }

    /**
     * Set the value of Points, return this.
     *
     * @param points
     *             The new value to set.
     *
     * @return MarketplaceWebServiceProducts_Model_LowestPriceType|This
     */
    public function withPoints($value)
    {
        $this->setPoints($value);
        return $this;
    }

    /**
     * Set the value of the Points property.
     *
     * @param MarketplaceWebServiceProducts_Model_Points points
     * @return MarketplaceWebServiceProducts_Model_LowestPriceType|this
     */
    public function setPoints($value)
    {
        $this->_fields['Points']['FieldValue'] = $value;
        return $this;
    }

}
