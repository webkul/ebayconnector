<?php
namespace Ebay;

// Necessary to construct SOAP headers for authentication

class eBayCredentials
{
    private $_appId;
    private $_devId;
    private $_authCert;

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
