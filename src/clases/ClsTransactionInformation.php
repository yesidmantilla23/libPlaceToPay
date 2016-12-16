<?php
namespace ymantillar\PlaceToPay;
class ClsTransactionInformation
{
    protected $transactionID;
    protected $sessionID;
    protected $reference;
    protected $requestDate;
    protected $bankProcessDate;
    protected $onTest;
    protected $returnCode;
    protected $trazabilityCode;
    protected $transactionCycle;
    protected $transactionState;
    protected $responseCode;
    protected $responseReasonCode;
    protected $responseReasonText;

    /**
     * ClsTransactionInformation constructor.
     * @param $parameters
     */
    public function __construct($parameters)
    {
        if (is_array($parameters)) {
            $this->transactionID = $parameters['transactionID'];
            $this->sessionID = $parameters['sessionID'];
            $this->reference = $parameters['reference'];
            $this->requestDate = $parameters['requestDate'];
            $this->bankProcessDate = $parameters['bankProcessDate'];
            $this->onTest = $parameters['onTest'];
            $this->returnCode = $parameters['returnCode'];
            $this->trazabilityCode = $parameters['trazabilityCode'];
            $this->transactionCycle = $parameters['transactionCycle'];
            $this->transactionState = $parameters['transactionState'];
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
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return string
     */
    public function getRequestDate()
    {
        return $this->requestDate;
    }

    /**
     * @return string
     */
    public function getBankProcessDate()
    {
        return $this->bankProcessDate;
    }

    /**
     * @return boolean
     */
    public function getOnTest()
    {
        return $this->onTest;
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
    public function getTransactionState()
    {
        return $this->transactionState;
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
