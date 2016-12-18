<?php
namespace ymantillar\PlaceToPay;

class ClsBank 
{
    protected $cod;
    protected $name;
   
    /**
     * ClsBank constructor.
     * @param $bankCode
     * @param $bankName
     */
    public function __construct($bankCode, $bankName)
    {
        $this->cod = $bankCode;
        $this->name = $bankName;       
    }

    /**
     * @return string
     */
    public function getCod()
    {
        return $this->cod;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
	
    
}
?>
