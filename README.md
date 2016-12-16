# libPlaceToPay
libreria placeToPay
##uso 
###Connect
$auth = new ClsAuthentication(<AuthId>, <TranKey>, <Additional>|null);
$auth->connect($auth, <url wdsl soap>);

###ClslibPlaceToPay
instaciar clase ClslibPlaceToPay
$placetopay = new ClslibPlaceToPay();

###getBankList
retorno lista de bancos
$bancos=$placetopay->getBankList();

###TransactionRequest
Envio de solicitud de transaccion
$transactionRequest = new ClsPSETransactionRequest(<ClsPSETransactionRequest>);

###createTransaction
Crear transaccion
$result = $placetopay->createTransaction($transactionRequest);

###getTransactionInformation
retorno de informacion de la transaccion
$transactionInformation = $placetopay->getTransactionInformation($result->getTransactionID());
