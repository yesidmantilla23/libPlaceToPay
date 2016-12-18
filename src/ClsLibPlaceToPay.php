<?php
namespace ymantillar\PlaceToPay;

use ymantillar\PlaceToPay\ClsAuthentication;
use ymantillar\PlaceToPay\ClsBank;
use ymantillar\PlaceToPay\ClsPSETransactionResponse;
use ymantillar\PlaceToPay\ClsCreditConcept;
use ymantillar\PlaceToPay\ClsPerson;
use ymantillar\PlaceToPay\ClsPSETransactionMultiCreditRequest;
use ymantillar\PlaceToPay\ClsPSETransactionRequest;
use ymantillar\PlaceToPay\ClsTransactionInformation;
use SoapClient;


class ClsLibPlaceToPay implements PlaceToPay
{    
    public static $auth;
    public static $wsdl;

    /**
     * connect 
     * @param ClsAuthentication $auth 
     * @param $wsdl - wsdl
     */
    public static function connect($auth, $wsdl)
    {
        self::$auth = $auth;
        self::$wsdl = $wsdl;
    }

    /**
     * getBankList
     * @return array<Bank>|exception
     */
    public static function getBankList()
    {      
        $params = ["auth" => self::$auth];
        $client = new SoapClient(self::$wsdl);
        $response = $client->__soapCall('getBankList', array($params));
        $banks = [];
        foreach ($response->getBankListResult->item as $bank) {
            array_push($banks, new ClsBank($bank->bankCode, $bank->bankName));
        }
        return $banks;
    }   

    /**
     * createTransaction
     * @param ClsPSETransactionRequest $transactionRequest
     * @return PSETransactionResponse
     */
    public static function createTransaction(ClsPSETransactionRequest $transactionRequest)
    {
        $params = ["auth" => self::$auth,
            "transaction" => $transactionRequest];
        $client = new SoapClient(self::$wsdl);
        $response = $client->__soapCall('createTransaction',array($params));
        $pseResponse = new ClsPSETransactionResponse(get_object_vars($response->createTransactionResult));        
        return $pseResponse;
    }

    /**
     * getTransactionInformation
     * @param $transactionID
     * @return TransactionInformation
     */
    public static function getTransactionInformation($transactionID)
    {
        $params = ["auth" => self::$auth,
            "transactionID" => $transactionID];
        $client = new SoapClient(self::$wsdl);
        $response = $client->__soapCall('getTransactionInformation', array($params));
        $transactionInformation = new ClsTransactionInformation(get_object_vars($response->getTransactionInformationResult));
        
        return $transactionInformation;
    }
	
	
}

?>


