<?php
namespace ymantillar\PlaceToPay;

class ClsAuthentication
{
   public $login;
   public $tranKey;
   public $seed;
   public $additional;
   
   /**
     * ClsAuthentication constructor.
     * @param $bankCode
     * @param $bankName
     */
   public function __construct($login, $tranKey, $additional)
    {
        $this->login = $login;
        $this->seed = date('c');
        $this->tranKey = $this->generateHash($tranKey);
        if ($additional)
            $this->additional = $additional;
    }
    
   
    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getSeed()
    {
        return $this->seed;
    }

     /**
     * @param mixed $seed
     */
    public function setSeed($seed)
    {
        $this->seed = $seed;
    }

    

    /**
     * @return mixed
     */
    public function getTranKey()
    {
        return $this->tranKey;
    }

    /**
     * @param mixed $tranKey
     */
    public function setTranKey($tranKey)
    {
        $this->tranKey = $tranKey;
    }

    /**
     * @return mixed
     */
    public function getAdditional()
    {
        return $this->additional;
    }

    /**
     * @param mixed $additional
     */
    public function setAdditional($additional)
    {
        $this->additional = $additional;
    }


    /**
     * @return string
     */

    public function generateHash($tranKey)
    {
        return sha1($this->seed . $tranKey, false);
    }

    
    
}
?>
