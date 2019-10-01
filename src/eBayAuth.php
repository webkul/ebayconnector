<?php
namespace Ebay;

// Necessary to construct SOAP headers for authentication
class eBayAuth
{
    private $eBayAuthToken;
    private $Credentials;

    public function __construct(eBaySession $session)
    {
        $credentials = new eBayCredentials($session);
        $this->eBayAuthToken = new \SoapVar(
            $session->token,
            XSD_STRING,
            null,
            null,
            null,
            'urn:ebay:apis:eBLBaseComponents'
        );
        $this->Credentials = new \SoapVar(
            $credentials,
            SOAP_ENC_OBJECT,
            null,
            null,
            null,
            'urn:ebay:apis:eBLBaseComponents'
        );
    }
}
