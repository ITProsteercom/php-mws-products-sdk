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
 * MarketplaceWebServiceProducts_Model_LowestPrices
 *
 * Properties:
 * <ul>
 *
 * <li>LowestPrice: array</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProducts_Model_LowestPrices extends MarketplaceWebServiceProducts_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'LowestPrice' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceProducts_Model_LowestPriceType')),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the LowestPrice property.
     *
     * @return List<LowestPriceType> LowestPrice.
     */
    public function getLowestPrice()
    {
        if ($this->_fields['LowestPrice']['FieldValue'] == null) {
            $this->_fields['LowestPrice']['FieldValue'] = array();
        }
        return $this->_fields['LowestPrice']['FieldValue'];
    }

    /**
     * Set the value of the LowestPrice property.
     *
     * @param array lowestPrice
     * @return MarketplaceWebServiceProducts_Model_LowestPrices|this
     */
    public function setLowestPrice($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['LowestPrice']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear LowestPrice.
     */
    public function unsetLowestPrice()
    {
        $this->_fields['LowestPrice']['FieldValue'] = array();
    }

    /**
     * Check to see if LowestPrice is set.
     *
     * @return true if LowestPrice is set.
     */
    public function isSetLowestPrice()
    {
        return !empty($this->_fields['LowestPrice']['FieldValue']);
    }

    /**
     * Add values for LowestPrice, return this.
     *
     * @return MarketplaceWebServiceProducts_Model_LowestPrices|This
     */
    public function withLowestPrice()
    {
        foreach (func_get_args() as $LowestPrice) {
            $this->_fields['LowestPrice']['FieldValue'][] = $LowestPrice;
        }
        return $this;
    }

}
