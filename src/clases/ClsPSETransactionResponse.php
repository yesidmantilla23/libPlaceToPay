<?php
namespace ymantillar\PlaceToPay;

class ClsPSETransactionResponse
{
    protected $transactionID;
    protected $sessionID;
    protected $returnCode;
    protected $trazabilityCode;
    protected $transactionCycle;
    protected $bankCurrency;
    protected $bankFactor;
    protected $bankURL;
    protected $responseCode;
    protected $responseReasonCode;
    protected $responseReasonText;
    
    /**
     * ClsPSETransactionResponse constructor.
     * @param $parameters
     */
    public function __construct($parameters)
    {
        if (is_array($parameters)) {
            $this->transactionID = $parameters['transactionID'];
            $this->sessionID = $parameters['sessionID'];
            $this->returnCode = $parameters['returnCode'];
            $this->trazabilityCode = $parameters['trazabilityCode'];
            $this->transactionCycle = $parameters['transactionCycle'];
            $this->bankCurrency = $parameters['bankCurrency'];
            $this->bankFactor = $parameters['bankFactor'];
            $this->bankURL = $parameters['bankURL'];
            $this->responseCode = $parameters['responseCode'];
            $this->responseReasonCode = $parameters['responseReasonCode'];
            $this->responseReasonText = $parameters['responseReasonText'];
        } else {
            throw new Exception('El parametro no es valido.');
        }
    }

    /**
     * @return int
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * @return string
     */
    public function getSessionID()
    {
        return $this->sessionID;
    }

    /**
     * @return string
     */
    public function getReturnCode()
    {
        return $this->returnCode;
    }

    /**
     * @return string
     */
    public function getTrazabilityCode()
    {
        return $this->trazabilityCode;
    }

    /**
     * @return int
     */
    public function getTransactionCycle()
    {
        return $this->transactionCycle;
    }

    /**
     * @return string
     */
    public function getBankCurrency()
    {
        return $this->bankCurrency;
    }

    /**
     * @return float
     */
    public function getBankFactor()
    {
        return $this->bankFactor;
    }

    /**
     * @return string
     */
    public function getBankURL()
    {
        return $this->bankURL;
    }

    /**
     * @return int
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * @return string
     */
    public function getResponseReasonCode()
    {
        return $this->responseReasonCode;
    }

    /**
     * @return string
     */
    public function getResponseReasonText()
    {
        return $this->responseReasonText;
    }

}
?>
