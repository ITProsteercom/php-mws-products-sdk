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

use DOMDocument;
use DOMXPath;
use MWSProducts\MarketplaceWebServiceProducts_Model;


/**
 * MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse
 *
 * Properties:
 * <ul>
 *
 * <li>GetMyPriceForASINResult: array</li>
 * <li>ResponseMetadata: MarketplaceWebServiceProducts_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: MarketplaceWebServiceProducts_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse extends MarketplaceWebServiceProducts_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'GetMyPriceForASINResult' => array('FieldValue' => array(), 'FieldType' => array('MarketplaceWebServiceProducts_Model_GetMyPriceForASINResult')),
            'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_ResponseMetadata'),
            'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MarketplaceWebServiceProducts_Model_ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Construct MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse
     * @throws \Exception
     * @throws \Exception
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='GetMyPriceForASINResponse']");
        if ($response->length == 1) {
            return new MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse from provided XML. 
                                  Make sure that GetMyPriceForASINResponse is a root element");
        }
    }

    /**
     * Get the value of the GetMyPriceForASINResult property.
     *
     * @return List<GetMyPriceForASINResult> GetMyPriceForASINResult.
     */
    public function getGetMyPriceForASINResult()
    {
        if ($this->_fields['GetMyPriceForASINResult']['FieldValue'] == null) {
            $this->_fields['GetMyPriceForASINResult']['FieldValue'] = array();
        }
        return $this->_fields['GetMyPriceForASINResult']['FieldValue'];
    }

    /**
     * Set the value of the GetMyPriceForASINResult property.
     *
     * @param array getMyPriceForASINResult
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse|this
     */
    public function setGetMyPriceForASINResult($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['GetMyPriceForASINResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear GetMyPriceForASINResult.
     */
    public function unsetGetMyPriceForASINResult()
    {
        $this->_fields['GetMyPriceForASINResult']['FieldValue'] = array();
    }

    /**
     * Check to see if GetMyPriceForASINResult is set.
     *
     * @return true if GetMyPriceForASINResult is set.
     */
    public function isSetGetMyPriceForASINResult()
    {
        return !empty($this->_fields['GetMyPriceForASINResult']['FieldValue']);
    }

    /**
     * Add values for GetMyPriceForASINResult, return this.
     *
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse|This
     */
    public function withGetMyPriceForASINResult()
    {
        foreach (func_get_args() as $GetMyPriceForASINResult) {
            $this->_fields['GetMyPriceForASINResult']['FieldValue'][] = $GetMyPriceForASINResult;
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
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse|This
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
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse|this
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
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse|This
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
     * @return MarketplaceWebServiceProducts_Model_GetMyPriceForASINResponse|this
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
        $xml .= "<GetMyPriceForASINResponse xmlns=\"http://mws.amazonservices.com/schema/Products/2011-10-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</GetMyPriceForASINResponse>";
        return $xml;
    }

}
