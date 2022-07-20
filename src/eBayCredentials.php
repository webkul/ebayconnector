<?php
/**
 * @category   Webkul
 * @package    Webkul_EbayConnector
 * @author     Webkul Software Private Limited
 * @copyright  Copyright (c) Webkul Software Private Limited (https://webkul.com)
 * @license    https://store.webkul.com/license.html
 */

namespace Ebay;

// Necessary to construct SOAP headers for authentication

class eBayCredentials
{
    /**
     * @var string
     */
    private $_appId;

    /**
     * @var string
     */
    private $_devId;

    /**
     * @var string
     */
    private $_authCert;

    /**
     * Construct
     *
     * @param eBaySession $session
     */
    public function __construct(eBaySession $session)
    {
        $this->_appId = new \SoapVar($session->app, XSD_STRING, null, null, null, 'urn:ebay:apis:eBLBaseComponents');
        $this->_devId = new \SoapVar($session->dev, XSD_STRING, null, null, null, 'urn:ebay:apis:eBLBaseComponents');
        $this->_authCert = new \SOAPVar(
            $session->cert,
            XSD_STRING,
            null,
            null,
            null,
            'urn:ebay:apis:eBLBaseComponents'
        );
    }
}
