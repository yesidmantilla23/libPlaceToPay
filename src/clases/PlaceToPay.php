<?php
namespace ymantillar\PlaceToPay;

interface  PlaceToPay {
  public static function connect($auth, $wsdl);  
  public static function getBankList();
  public static function createTransaction(ClsPSETransactionRequest $transactionRequest);
  public static function getTransactionInformation($transactionID);
}
?>
