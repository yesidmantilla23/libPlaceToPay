<?php

namespace rad8329\placetopay\tests;

use rad8329\placetopay\AIM;
use rad8329\placetopay\aim\requests\AuthOnly;
use rad8329\placetopay\common\models\Authentication;

class AimTest extends P2PTestCase
{
    /**
     * @expectedException     \GuzzleHttp\Exception\ClientException
     * @expectedExceptionCode 404
     * @expectedExceptionMessageRegExp /^Client error response/
     */
    public function testGuzzleHttpClientException()
    {
        $aim = new AIM(
            new Authentication(self::$config['login'], self::$config['tranKey']),
            self::$config['aim.wsdl'],
            'http://example.com/api.php'
        );

        $aim->createTransaction(new AuthOnly(
            [
                'x_language' => 'ES',
                'x_customer_ip' => '181.49.80.236',
                //Pagador
                'x_cust_id' => 'CC 9426666666',
                'x_first_name' => 'Juan',
                'x_last_name' => 'Tamariz',
                'x_phone' => '3006781441',
                'x_email' => 'rad8329@gmail.com',
                //Tarjeta de Crédito
                'x_card_num' => '4007000000027',
                'x_exp_date' => '0117',
                'x_card_code' => '595',
                //Pago
                'x_invoice_num' => 801,
                'x_amount' => '50000.00',
                'x_tax' => '0.00',
                'x_amount_base' => '0.00',
                'x_test_request' => self::$config['test'] ? 'TRUE' : 'FALSE',
            ]
        ));
    }

    /**
     * @expectedException     \SoapFault
     * @expectedExceptionCode 0
     * @expectedExceptionMessageRegExp /^SOAP-ERROR: Parsing WSDL: Couldn't load from/
     */
    public function testSoapFaultException()
    {
        $aim = new AIM(
            new Authentication(self::$config['login'], self::$config['tranKey']),
            'http://example.com/?wsdl',
            self::$config['aim.endpoint']
        );

        $aim->getTransactionInformation(1442944760);
    }
}
