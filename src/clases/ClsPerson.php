<?php
namespace ymantillar\PlaceToPay;

class ClsPerson
{
    protected $document;
    protected $documentType;
    protected $firstName;
    protected $lastName;
    protected $company;
    protected $emailAddress;
    protected $city;
    protected $province;
    protected $phone;
    protected $country;
    protected $mobile;

    /**
     * ClsPerson constructor.
     * @param $parameters
     */
    public function __construct($parameters)
    {
      if (is_array($parameters)) { 
         $this->document = $parameters['document'];
         $this->documentType = $parameters['documentType'];
         $this->firstName = $parameters['firstName'];
         $this->lastName = $parameters['lastName'];
         $this->company = $parameters['company'];
         $this->emailAddress = $parameters['emailAddress'];
         $this->city = $parameters['city'];
         $this->province = $parameters['province'];
         $this->phone = $parameters['phone'];
         $this->country = $parameters['country'];
         $this->mobile = $parameters['mobile'];
      }else{
        throw new Exception('El parametro no es valido.');
      }
            
       
    }

    /**
     * @return string
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @return string
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * @return null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return null
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }
}
?>
