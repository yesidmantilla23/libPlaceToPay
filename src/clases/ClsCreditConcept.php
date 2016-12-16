<?php
namespace ymantillar\PlaceToPay;

class ClsCreditConcept
{
    protected $entityCode;
    protected $serviceCode;
    protected $amountValue;
    protected $taxValue;
    protected $description;
    
     /**
     * Person constructor.
     * @param $parameters
     */
    public function __construct($parameters)
    {
      if (is_array($parameters)) { 
        $this->entityCode = $parameters['entityCode'];
        $this->serviceCode = $parameters['serviceCode'];
        $this->amountValue = $parameters['amountValue'];
        $this->taxValue = $parameters['taxValue'];
        $this->description = $parameters['description']; 
      }else{
        throw new Exception('El parametro no es valido.');
      }    
    }
    
    /**
     * @return string
     */
    public function getEntityCode()
    {
        return $this->entityCode;
    }
    
    /**
     * @return string
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }
    
    /**
     * @return double
     */
    public function getAmountValue()
    {
        return $this->amountValue;
    }

    /**
     * @return double
     */
    public function getTaxValue()
    {
        return $this->amountValue;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $entityCode
     */
    public function setEntityCode($entityCode)
    {
        $this->entityCode = $entityCode;
    }

    /**
     * @param mixed $serviceCode 
     */
    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;
    }

    /**
     * @param mixed $amountValue 
     */
    public function setAmountValue($amountValue)
    {
        $this->amountValue = $amountValue;
    }

    /**
     * @param mixed $taxValue 
     */
    public function setTaxValue($taxValue)
    {
        $this->taxValue = $taxValue;
    }

    /**
     * @param mixed $description 
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
?>
