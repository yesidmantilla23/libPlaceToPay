<?php
namespace ymantillar\PlaceToPay\tests;
use ymantillar\PlaceToPay\ClsAuthentication;
use ymantillar\PlaceToPay\ClsLibPlaceToPay;
use ymantillar\PlaceToPay\ClsPerson;
use ymantillar\PlaceToPay\ClsPSETransactionRequest;
use ymantillar\PlaceToPay\tests\P2PTestCase;
use SoapClient;
class PseTest extends P2PTestCase
{
	
   
    public function testNumBank()
    {
        $config = require __DIR__.'/fixtures/main.php';	 
        $auth = new ClsAuthentication(self::$config['login'], self::$config['tranKey'],self::$config['adittional']);           
        $placetopay = new ClsLibPlaceToPay();
        $placetopay->connect($auth, $config['pse.wsdl']);
        $bank=$placetopay->getBankList();
        $this->assertEquals(41, count($bank));
        
    }
	
	
    public function testNotValidRequest()
    {
        $config = require __DIR__.'/fixtures/main.php';	 
        $auth = new ClsAuthentication(self::$config['login'], self::$config['tranKey'],self::$config['adittional']);
		$person = [
            'document' => '1095929745',
            'documentType' => 'CC',
            'firstName' => 'yesid',
            'lastName' => 'Antonio',
            'company' => 'Mantilla',
            'emailAddress' => 'ymr_1991@gmail.com',
            'address' => 'Valeria2226',
            'city' => 'Medellin',
            'province' => 'Antioquia',
            'country' => 'Colombia',
            'phone' => '4346194',
            'mobile' => '3158972048'
        ];
        $transactionRequest = [
            'bankCode' => '1022',
            'bankInterface' => '0',
            'returnURL' => 'https://gmail.com',
            'reference' => rand(1, 1000),
            'description' => 'esto es una prueba',
            'language' => 'es',
            'currency' => 'COP',
            'totalAmount' => '100000',
            'taxAmount' => '1000',
            'devolutionBase' => '0',
            'tipAmount' => '0',
            'payer' => $person,
            'buyer' => $person,
            'shipping' => $person,            
            'ipAddress' => '192.0.85.1',
            'userAgent' => 'dato',
            'additionalData' => null
        ];
        $transactionRequest = new ClsPSETransactionRequest($transactionRequest);
    }
	
	public function testCreateTransaction()
	{
		 $config = require __DIR__.'/fixtures/main.php';	 
         $auth = new ClsAuthentication(self::$config['login'], self::$config['tranKey'],self::$config['adittional']);
		 $placetopay = new ClsLibPlaceToPay();
		 $person = [
            'document' => '1095929745',
            'documentType' => 'CC',
            'firstName' => 'yesid',
            'lastName' => 'Antonio',
            'company' => 'Mantilla',
            'emailAddress' => 'ymr_1991@gmail.com',
            'address' => 'Valeria2226',
            'city' => 'Medellin',
            'province' => 'Antioquia',
            'country' => 'Colombia',
            'phone' => '4346194',
            'mobile' => '3158972048'
        ];
        //acceder al objeto o clase ClsPerson.
        $presons = new ClsPerson($person);
       
       
        //array de datos de prueba para lsPSETransactionRequest.
        $transactionRequest = [
            'bankCode' => '1022',
            'bankInterface' => '0',
            'returnURL' => 'https://gmail.com',
            'reference' => rand(1, 1000),
            'description' => 'esto es una prueba',
            'language' => 'es',
            'currency' => 'COP',
            'totalAmount' => '100000',
            'taxAmount' => '1000',
            'devolutionBase' => '0',
            'tipAmount' => '0',
            'payer' => $person,
            'buyer' => $person,
            'shipping' => $person,            
            'ipAddress' => '192.0.85.1',
            'userAgent' => 'dato',
            'additionalData' => null
        ];
        //acceder al objeto o clase ClsPSETransactionRequest.
        $transactionRequest = new ClsPSETransactionRequest($transactionRequest);
        //acceder al metodo createTransaction de la clase ClslibPlaceToPay que retorna datos generales de la transaccion.
        $result = $placetopay->createTransaction($transactionRequest);
		$this->assertEquals('SUCCESS',$result->getReturnCode());
		$transactionInformation = $placetopay->getTransactionInformation($result->getTransactionID());
        $this->assertEquals('OK',$transactionInformation->getTransactionState());
        
	}
    
}
?>
