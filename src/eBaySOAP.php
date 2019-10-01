<?php
namespace Ebay;

// Main class for communication with eBay Web services via SOAP
class eBaySOAP extends \SoapClient
{
    private $_headers = null;
    private $_session = null;

    public function __construct(eBaySession $session)
    {
        $this->_session = $session;
        $this->__setHeaders();
        parent::__construct($session->wsdl, $session->options);
    }

    private function __setHeaders()
    {
        $eBayAuth = new eBayAuth($this->_session);
        $headerBody = new \SoapVar($eBayAuth, SOAP_ENC_OBJECT);
        $headers = [new \SOAPHeader('urn:ebay:apis:eBLBaseComponents', 'RequesterCredentials', $headerBody)];
        $this->_headers = $headers;
    }

    public function __call($function, $args)
    {
        try {
            $callname = $function;
            $siteid = $this->_session->site;
            $version = $args[0]['Version'];
            $appid = $this->_session->app;
            $routing = 'default'; // XXX: hardcoded

            $queryString = http_build_query(
                [
                    'callname' => $callname,
                    'siteid' => $siteid,
                    'version' => $version,
                    'appid' => $appid,
                    'Routing' => $routing
                ]
            );
            $location = "{$this->_session->location}?{$queryString}";

            return $this->__soapCall($function, $args, ['location' => $location], $this->_headers);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
