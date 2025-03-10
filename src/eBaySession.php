<?php
/**
 * @category   Webkul
 * @package    Webkul_EbayConnector
 * @author     Webkul Software Private Limited
 * @copyright  Copyright (c) Webkul Software Private Limited (https://webkul.com)
 * @license    https://store.webkul.com/license.html
 */

namespace Ebay;

// Configuration class to handle settings

class eBaySession
{
    /**
     * @var array
     */
    private $_properties;

    /**
     * Construct
     *
     * @param string $dev
     * @param string $app
     * @param string $cert
     * @return void
     */
    public function __construct($dev, $app, $cert)
    {
        $this->_properties = [
            'dev' => null,
            'app' => null,
            'cert' => null,
            'wsdl' => null,
            'options' => null,
            'token' => null,
            'site' => null,
            'location' => null,
        ];

        $this->dev = $dev;
        $this->app = $app;
        $this->cert = $cert;
        /** $this->wsdl = 'http://developer.ebay.com/webservices/latest/eBaySvc.wsdl';*/
        $this->wsdl = __DIR__.DIRECTORY_SEPARATOR.'eBaySvc.wsdl';

        $this->options = [
                            'trace' => 1,
                            'exceptions' => 0,
                            'classmap' => [
                                            /** 'UserType' => 'eBayUserType', */
                                            'GetSearchResultsResponseType' => 'eBayGetSearchResultsResponseType',
                                            'SearchResultItemArrayType' => 'eBaySearchResultItemArrayType',
                                            'SearchResultItemType' => 'eBaySearchResultItemType',
                                            /** 'AmountType' => 'eBayAmountType',
                                             *'FeeType' => 'eBayFeeType',
                                             *'FeesType' => 'eBayFeesType', */
                                        ],
                           /** 'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP, */
                      ];
    }

    /**
     * Set
     *
     * @param string $property
     * @param string $value
     * @return void
     */
    public function __set($property, $value)
    {
        if (array_key_exists($property, $this->_properties)) {
            $this->_properties[$property] = $value;
        } else {
            return;
        }
    }

    /**
     * Get
     *
     * @param string $property
     * @return string
     */
    public function __get($property)
    {
        if (array_key_exists($property, $this->_properties)) {
            return $this->_properties[$property];
        } else {
            return;
        }
    }
}
