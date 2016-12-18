<?php
require __DIR__.'/../../vendor/autoload.php';
$config = require __DIR__.'/../../tests/fixtures/main.php';

use ymantillar\PlaceToPay\ClsAuthentication;
use ymantillar\PlaceToPay\ClsPSETransactionRequest;
use ymantillar\PlaceToPay\ClsPerson;
use ymantillar\PlaceToPay\ClsLibPlaceToPay;

$placetopay = new ClsLibPlaceToPay();

//acceder al objeto o clase ClsAuthentication pasando los parametros requeridos al contructor, espesificados en el archivo README.TXT
$authentication = new ClsAuthentication($config['login'],$config['tranKey'],$config['adittional']);

//acceder al objeto o clase pricipal ClslibPlaceToPay.


//acceder al metodo connect del objeto o clase ClslibPlaceToPay.
$placetopay->connect($authentication,$config['pse.wsdl']);

//acceder al metodo getBankList de la clase ClslibPlaceToPay el cual retorna un array que contine la lista de los bancos a seleccionar <bankCode>,<bankName>
$bancos=$placetopay->getBankList();

      //imprimir lista de bancos.
      print_r($bancos);

      echo '</br></br>';
       //array de datos de prueba Person.
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
        print_r($presons);
        echo '</br></br>';
       
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
        print_r($result);

	echo '</br></br>';
        //acceder al metodo getTransactionInformation de la clase ClslibPlaceToPay que retorna datos especificos de la transaccion.
        $transactionInformation = $placetopay->getTransactionInformation($result->getTransactionID());
	print_r($transactionInformation);


?>
