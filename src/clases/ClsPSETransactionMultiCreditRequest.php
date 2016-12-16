<?php
namespace ymantillar\PlaceToPay;

class ClsPSETransactionMultiCreditRequest 
{
    protected $bankCode;
    protected $bankInterface;
    protected $returnURL;
    protected $reference;
    protected $description;
    protected $language;
    protected $currency;
    protected $totalAmount;
    protected $taxAmount;
    protected $devolutionBase;
    protected $tipAmount;
    protected $payer;
    protected $buyer;
    protected $shipping;
    protected $ipAddress;
    protected $userAgent;
    protected $additionalData;
    protected $credits;

    
    /**
     * ClsPSETransactionMultiCreditRequest constructor.
     * @param $parameters
     */
    public function __construct($parameters)
    {
      if (is_array($parameters)) { 
         $this->bankCode = $parameters['bankCode'];
         $this->bankInterface = $parameters['bankInterface'];
         $this->returnURL = $parameters['returnURL'];
         $this->reference = $parameters['reference'];
         $this->description = $parameters['description'];
         $this->language = $parameters['language'];
         $this->currency = $parameters['currency'];
         $this->totalAmount = $parameters['totalAmount'];
         $this->taxAmount = $parameters['taxAmount'];
         $this->devolutionBase = $parameters['devolutionBase'];
         $this->tipAmount = $parameters['tipAmount'];
         $this->payer = $parameters['payer'];
         $this->buyer = $parameters['buyer'];
         $this->shipping = $parameters['shipping'];
         $this->ipAddress = $parameters['ipAddress'];
         $this->userAgent = $parameters['userAgent'];
         $this->additionalData = $parameters['additionalData']; 
         $this->credits = $parameters['credits'];          
      }else{
        throw new Exception('El parametro no es valido.');
      }    
   }
   /**
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * @return string
     */
    public function getBankInterface()
    {
        return $this->bankInterface;
    }

    /**
     * @return string
     */
    public function getReturnURL()
    {
        return $this->returnURL;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return double
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @return double
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * @return double
     */
    public function getDevolutionBase()
    {
        return $this->devolutionBase;
    }

    /**
     * @return double
     */
    public function getTipAmount()
    {
        return $this->tipAmount;
    }

    /**
     * @return Person
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * @return Person
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * @return Person
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @return mixed
     */
    public function getAdditionalData()
    {
        return $this->additionalData;
    }   
    
    /**
     * @return CreditConcept
     */
    public function getCredits()
    {
        return $this->credits;
    }    

    /**
     * @param mixed $bankCode
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
    }

    /**
     * @param mixed $bankInterface
     */
    public function setBankInterface($bankInterface)
    {
        $this->bankInterface = $bankInterface;
    }

    /**
     * @param string $returnURL
     */
    public function setReturnURL($returnURL)
    {
        $this->returnURL = $returnURL;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @param mixed $totalAmount
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * @param mixed $taxAmount
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;
    }

    /**
     * @param mixed $devolutionBase
     */
    public function setDevolutionBase($devolutionBase)
    {
        $this->devolutionBase = $devolutionBase;
    }

    /**
     * @param mixed $tipAmount
     */
    public function setTipAmount($tipAmount)
    {
        $this->tipAmount = $tipAmount;
    }

    /**
     * @param mixed $payer
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;
    }

    /**
     * @param mixed $buyer
     */
    public function setBuyer($buyer)
    {
        $this->buyer = $buyer;
    }

    /**
     * @param mixed $shipping
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;
    }

    /**
     * @param mixed $ipAddress
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * @param mixed $userAgent
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    }

    /**
     * @param mixed $additionalData
     */
    public function setAdditionalData($additionalData)
    {
        $this->additionalData = $additionalData;
    }

    /**
     * @param mixed $credits
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;
    }    

}
?>
