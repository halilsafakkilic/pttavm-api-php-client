<?php

namespace PttAVM;

use SoapHeader;
use SoapVar;
use stdClass;

class ServiceHeader extends SoapHeader
{
    private $wss_ns = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';

    function __construct($user, $pass, $ns = null)
    {
        parent::__construct('https://ws.pttavm.com/', 'ServiceHeader');

        if ($ns) {
            $this->wss_ns = $ns;
        }

        $auth = new stdClass();

        $auth->Username = new SoapVar($user, XSD_STRING, null, $this->wss_ns, null, $this->wss_ns);
        $auth->Password = new SoapVar($pass, XSD_STRING, null, $this->wss_ns, null, $this->wss_ns);

        $username_token = new stdClass();
        $username_token->UsernameToken = new SoapVar($auth, SOAP_ENC_OBJECT, null, $this->wss_ns, 'UsernameToken', $this->wss_ns);

        $security_sv = new SoapVar(
            new SoapVar($username_token, SOAP_ENC_OBJECT, null, $this->wss_ns, 'UsernameToken', $this->wss_ns),
            SOAP_ENC_OBJECT, null, $this->wss_ns, 'Security', $this->wss_ns);

        parent::SoapHeader($this->wss_ns, 'Security', $security_sv, true);
    }
}