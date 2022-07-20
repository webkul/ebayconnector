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
class eBayAuth
{
    /**
     * @var string
     */
    private $eBayAuthToken;

    /**
     * @var \SoapVar
     */
    private $Credentials;

    /**
     * Construct
     *
     * @param eBaySession $session
     * @return void
     */
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
