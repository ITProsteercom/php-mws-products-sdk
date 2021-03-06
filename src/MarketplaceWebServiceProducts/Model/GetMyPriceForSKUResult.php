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

use Error;
use MWSProducts\MarketplaceWebServiceProducts_Model;


/**
 * MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResult
 *
 * Properties:
 * <ul>
 *
 * <li>Product: MarketplaceWebServiceProducts_Model_Product</li>
 * <li>Error: MarketplaceWebServiceProducts_Model_Error</li>
 * <li>SellerSKU: string</li>
 * <li>status: string</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResult extends MarketplaceWebServiceProducts_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'Product' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_Product'),
            'Error' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_Error'),
            'SellerSKU' => array('FieldValue' => null, 'FieldType' => '@string'),
            'status' => array('FieldValue' => null, 'FieldType' => '@string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Product property.
     *
     * @return Product Product.
     */
    public function getProduct()
    {
        return $this->_fields['Product']['FieldValue'];
    }

    /**
     * Check to see if Product is set.
     *
     * @return true if Product is set.
     */
    public function isSetProduct()
    {
        return !is_null($this->_fields['Product']['FieldValue']);
    }

    /**
     * Set the value of Product, return this.
     *
     * @param product
     *             The new value to set.
     *
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResult|This
     */
    public function withProduct($value)
    {
        $this->setProduct($value);
        return $this;
    }

    /**
     * Set the value of the Product property.
     *
     * @param MarketplaceWebServiceProducts_Model_Product product
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResult|this
     */
    public function setProduct($value)
    {
        $this->_fields['Product']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the Error property.
     *
     * @return Error Error.
     */
    public function getError()
    {
        return $this->_fields['Error']['FieldValue'];
    }

    /**
     * Check to see if Error is set.
     *
     * @return true if Error is set.
     */
    public function isSetError()
    {
        return !is_null($this->_fields['Error']['FieldValue']);
    }

    /**
     * Set the value of Error, return this.
     *
     * @param error
     *             The new value to set.
     *
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResult|This
     */
    public function withError($value)
    {
        $this->setError($value);
        return $this;
    }

    /**
     * Set the value of the Error property.
     *
     * @param MarketplaceWebServiceProducts_Model_Error error
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResult|this
     */
    public function setError($value)
    {
        $this->_fields['Error']['FieldValue'] = $value;
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
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResult|This
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
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResult|this
     */
    public function setSellerSKU($value)
    {
        $this->_fields['SellerSKU']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the status property.
     *
     * @return String status.
     */
    public function getstatus()
    {
        return $this->_fields['status']['FieldValue'];
    }

    /**
     * Check to see if status is set.
     *
     * @return true if status is set.
     */
    public function isSetstatus()
    {
        return !is_null($this->_fields['status']['FieldValue']);
    }

    /**
     * Set the value of status, return this.
     *
     * @param status
     *             The new value to set.
     *
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResult|This
     */
    public function withstatus($value)
    {
        $this->setstatus($value);
        return $this;
    }

    /**
     * Set the value of the status property.
     *
     * @param string status
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForSKUResult|this
     */
    public function setstatus($value)
    {
        $this->_fields['status']['FieldValue'] = $value;
        return $this;
    }

}
