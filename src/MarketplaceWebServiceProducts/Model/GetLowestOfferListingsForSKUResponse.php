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

use DOMDocument;
use DOMXPath;
use MWS\MarketplaceWebServiceProducts_Model;


/**
 * MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse
 *
 * Properties:
 * <ul>
 *
 * <li>GetLowestOfferListingsForSKUResult: array</li>
 * <li>ResponseMetadata: MarketplaceWebServiceProducts_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MarketplaceWebServiceProducts_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse extends MarketplaceWebServiceProducts_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'GetLowestOfferListingsForSKUResult' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResult')),
            'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_ResponseMetadata'),
            'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Construct MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetLowestOfferListingsForSKUResponse']");
        if ($response->length == 1) {
            return new MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse from provided XML. 
                                  Make sure that GetLowestOfferListingsForSKUResponse is a root element");
        }
    }

    /**
     * Get the value of the GetLowestOfferListingsForSKUResult property.
     *
     * @return List<GetLowestOfferListingsForSKUResult> GetLowestOfferListingsForSKUResult.
     */
    public function getGetLowestOfferListingsForSKUResult()
    {
        if ($this->_fields['GetLowestOfferListingsForSKUResult']['FieldValue'] == null) {
            $this->_fields['GetLowestOfferListingsForSKUResult']['FieldValue'] = array();
        }
        return $this->_fields['GetLowestOfferListingsForSKUResult']['FieldValue'];
    }

    /**
     * Set the value of the GetLowestOfferListingsForSKUResult property.
     *
     * @param array getLowestOfferListingsForSKUResult
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse|this
     */
    public function setGetLowestOfferListingsForSKUResult($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['GetLowestOfferListingsForSKUResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear GetLowestOfferListingsForSKUResult.
     */
    public function unsetGetLowestOfferListingsForSKUResult()
    {
        $this->_fields['GetLowestOfferListingsForSKUResult']['FieldValue'] = array();
    }

    /**
     * Check to see if GetLowestOfferListingsForSKUResult is set.
     *
     * @return true if GetLowestOfferListingsForSKUResult is set.
     */
    public function isSetGetLowestOfferListingsForSKUResult()
    {
        return !empty($this->_fields['GetLowestOfferListingsForSKUResult']['FieldValue']);
    }

    /**
     * Add values for GetLowestOfferListingsForSKUResult, return this.
     *
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse|This
     */
    public function withGetLowestOfferListingsForSKUResult()
    {
        foreach (func_get_args() as $GetLowestOfferListingsForSKUResult) {
            $this->_fields['GetLowestOfferListingsForSKUResult']['FieldValue'][] = $GetLowestOfferListingsForSKUResult;
        }
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse|This
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param MarketplaceWebServiceProducts_Model_ResponseMetadata responseMetadata
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse|this
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
        return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse|This
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param MarketplaceWebServiceProducts_Model_ResponseHeaderMetadata responseHeaderMetadata
     * @return MarketplaceWebServiceProducts_Model_GetLowestOfferListingsForSKUResponse|this
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * XML Representation for this object
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<GetLowestOfferListingsForSKUResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetLowestOfferListingsForSKUResponse>";
        return $xml;
    }

}
