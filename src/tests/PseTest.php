<?php

namespace ymantillar\PlaceToPay\tests;

use ymantillar\PlaceToPay\ClsAuthentication;
use ymantillar\PlaceToPay\ClsLibPlaceToPay;

class PseTest extends P2PTestCase
{
    /**
     * @expectedException     \SoapFault
     * @expectedExceptionCode 0
     * @expectedExceptionMessageRegExp /^SOAP-ERROR: Parsing WSDL: Couldn't load from/
     */
    public function testSoapFaultException()
    {
        $auth = new ClsAuthentication(self::$config['login'], self::$config['tranKey'],self::$config['adittional']);           
        $pse = new ClsLibPlaceToPay();

        $pse->getBankList($auth);
    }
}
