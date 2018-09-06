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
 * MarketplaceWebServiceProducts_Model_OffersList
 *
 * Properties:
 * <ul>
 *
 * <li>Offer: array</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProducts_Model_OffersList extends MarketplaceWebServiceProducts_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'Offer' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceProducts_Model_OfferType')),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Offer property.
     *
     * @return List<OfferType> Offer.
     */
    public function getOffer()
    {
        if ($this->_fields['Offer']['FieldValue'] == null) {
            $this->_fields['Offer']['FieldValue'] = array();
        }
        return $this->_fields['Offer']['FieldValue'];
    }

    /**
     * Set the value of the Offer property.
     *
     * @param array offer
     * @return MarketplaceWebServiceProducts_Model_OffersList|this
     */
    public function setOffer($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['Offer']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear Offer.
     */
    public function unsetOffer()
    {
        $this->_fields['Offer']['FieldValue'] = array();
    }

    /**
     * Check to see if Offer is set.
     *
     * @return true if Offer is set.
     */
    public function isSetOffer()
    {
        return !empty($this->_fields['Offer']['FieldValue']);
    }

    /**
     * Add values for Offer, return this.
     *
     * @return MarketplaceWebServiceProducts_Model_OffersList|This
     */
    public function withOffer()
    {
        foreach (func_get_args() as $Offer) {
            $this->_fields['Offer']['FieldValue'][] = $Offer;
        }
        return $this;
    }

}
