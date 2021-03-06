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
 * MarketplaceWebServiceProducts_Model_ASINListType
 *
 * Properties:
 * <ul>
 *
 * <li>ASIN: array</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProducts_Model_ASINListType extends MarketplaceWebServiceProducts_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'ASIN' => array('FieldValue' => array(), 'FieldType' => array('string')),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ASIN property.
     *
     * @return string[] ASIN.
     */
    public function getASIN()
    {
        if ($this->_fields['ASIN']['FieldValue'] == null) {
            $this->_fields['ASIN']['FieldValue'] = array();
        }
        return $this->_fields['ASIN']['FieldValue'];
    }

    /**
     * Set the value of the ASIN property.
     *
     * @param array asin
     * @return MarketplaceWebServiceProducts_Model_ASINListType
     */
    public function setASIN($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['ASIN']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear ASIN.
     */
    public function unsetASIN()
    {
        $this->_fields['ASIN']['FieldValue'] = array();
    }

    /**
     * Check to see if ASIN is set.
     *
     * @return true if ASIN is set.
     */
    public function isSetASIN()
    {
        return !empty($this->_fields['ASIN']['FieldValue']);
    }

    /**
     * Add values for ASIN, return this.
     *
     * @param mixed asin
     *             New values to add.
     *
     * @return MarketplaceWebServiceProducts_Model_ASINListType
     */
    public function withASIN()
    {
        foreach (func_get_args() as $ASIN) {
            $this->_fields['ASIN']['FieldValue'][] = $ASIN;
        }
        return $this;
    }

}
