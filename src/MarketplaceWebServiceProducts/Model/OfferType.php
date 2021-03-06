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
 * MarketplaceWebServiceProducts_Model_OfferType
 *
 * Properties:
 * <ul>
 *
 * <li>BuyingPrice: MarketplaceWebServiceProducts_Model_PriceType</li>
 * <li>RegularPrice: MarketplaceWebServiceProducts_Model_MoneyType</li>
 * <li>FulfillmentChannel: string</li>
 * <li>ItemCondition: string</li>
 * <li>ItemSubCondition: string</li>
 * <li>SellerId: string</li>
 * <li>SellerSKU: string</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProducts_Model_OfferType extends MarketplaceWebServiceProducts_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'BuyingPrice' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_PriceType'),
            'RegularPrice' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_MoneyType'),
            'FulfillmentChannel' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ItemCondition' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ItemSubCondition' => array('FieldValue' => null, 'FieldType' => 'string'),
            'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'SellerSKU' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the BuyingPrice property.
     *
     * @return PriceType BuyingPrice.
     */
    public function getBuyingPrice()
    {
        return $this->_fields['BuyingPrice']['FieldValue'];
    }

    /**
     * Check to see if BuyingPrice is set.
     *
     * @return true if BuyingPrice is set.
     */
    public function isSetBuyingPrice()
    {
        return !is_null($this->_fields['BuyingPrice']['FieldValue']);
    }

    /**
     * Set the value of BuyingPrice, return this.
     *
     * @param buyingPrice
     *             The new value to set.
     *
     * @return MarketplaceWebServiceProducts_Model_OfferType|This
     */
    public function withBuyingPrice($value)
    {
        $this->setBuyingPrice($value);
        return $this;
    }

    /**
     * Set the value of the BuyingPrice property.
     *
     * @param MarketplaceWebServiceProducts_Model_PriceType buyingPrice
     * @return MarketplaceWebServiceProducts_Model_OfferType|this
     */
    public function setBuyingPrice($value)
    {
        $this->_fields['BuyingPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the RegularPrice property.
     *
     * @return MoneyType RegularPrice.
     */
    public function getRegularPrice()
    {
        return $this->_fields['RegularPrice']['FieldValue'];
    }

    /**
     * Check to see if RegularPrice is set.
     *
     * @return true if RegularPrice is set.
     */
    public function isSetRegularPrice()
    {
        return !is_null($this->_fields['RegularPrice']['FieldValue']);
    }

    /**
     * Set the value of RegularPrice, return this.
     *
     * @param regularPrice
     *             The new value to set.
     *
     * @return MarketplaceWebServiceProducts_Model_OfferType|This
     */
    public function withRegularPrice($value)
    {
        $this->setRegularPrice($value);
        return $this;
    }

    /**
     * Set the value of the RegularPrice property.
     *
     * @param MarketplaceWebServiceProducts_Model_MoneyType regularPrice
     * @return MarketplaceWebServiceProducts_Model_OfferType|this
     */
    public function setRegularPrice($value)
    {
        $this->_fields['RegularPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the FulfillmentChannel property.
     *
     * @return String FulfillmentChannel.
     */
    public function getFulfillmentChannel()
    {
        return $this->_fields['FulfillmentChannel']['FieldValue'];
    }

    /**
     * Check to see if FulfillmentChannel is set.
     *
     * @return true if FulfillmentChannel is set.
     */
    public function isSetFulfillmentChannel()
    {
        return !is_null($this->_fields['FulfillmentChannel']['FieldValue']);
    }

    /**
     * Set the value of FulfillmentChannel, return this.
     *
     * @param fulfillmentChannel
     *             The new value to set.
     *
     * @return MarketplaceWebServiceProducts_Model_OfferType|This
     */
    public function withFulfillmentChannel($value)
    {
        $this->setFulfillmentChannel($value);
        return $this;
    }

    /**
     * Set the value of the FulfillmentChannel property.
     *
     * @param string fulfillmentChannel
     * @return MarketplaceWebServiceProducts_Model_OfferType|this
     */
    public function setFulfillmentChannel($value)
    {
        $this->_fields['FulfillmentChannel']['FieldValue'] = $value;
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
     * @return MarketplaceWebServiceProducts_Model_OfferType|This
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
     * @return MarketplaceWebServiceProducts_Model_OfferType|this
     */
    public function setItemCondition($value)
    {
        $this->_fields['ItemCondition']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ItemSubCondition property.
     *
     * @return String ItemSubCondition.
     */
    public function getItemSubCondition()
    {
        return $this->_fields['ItemSubCondition']['FieldValue'];
    }

    /**
     * Check to see if ItemSubCondition is set.
     *
     * @return true if ItemSubCondition is set.
     */
    public function isSetItemSubCondition()
    {
        return !is_null($this->_fields['ItemSubCondition']['FieldValue']);
    }

    /**
     * Set the value of ItemSubCondition, return this.
     *
     * @param itemSubCondition
     *             The new value to set.
     *
     * @return MarketplaceWebServiceProducts_Model_OfferType|This
     */
    public function withItemSubCondition($value)
    {
        $this->setItemSubCondition($value);
        return $this;
    }

    /**
     * Set the value of the ItemSubCondition property.
     *
     * @param string itemSubCondition
     * @return MarketplaceWebServiceProducts_Model_OfferType|this
     */
    public function setItemSubCondition($value)
    {
        $this->_fields['ItemSubCondition']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the SellerId property.
     *
     * @return String SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Check to see if SellerId is set.
     *
     * @return true if SellerId is set.
     */
    public function isSetSellerId()
    {
        return !is_null($this->_fields['SellerId']['FieldValue']);
    }

    /**
     * Set the value of SellerId, return this.
     *
     * @param sellerId
     *             The new value to set.
     *
     * @return MarketplaceWebServiceProducts_Model_OfferType|This
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);
        return $this;
    }

    /**
     * Set the value of the SellerId property.
     *
     * @param string sellerId
     * @return MarketplaceWebServiceProducts_Model_OfferType|this
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
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
     * @return MarketplaceWebServiceProducts_Model_OfferType|This
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
     * @return MarketplaceWebServiceProducts_Model_OfferType|this
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }

}
