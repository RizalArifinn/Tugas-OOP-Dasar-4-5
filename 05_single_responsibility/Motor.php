<?php

    class Motor
    {
    	public $merk; //property public
    	public $cc; //property
    	public $warna;
    	const roda = 2;
    	private $no_mesin; //private adalah property yang bisa diakses oleh classnya sendiri
    	private $suratmesin = 12340;



        //method

    	public function setNoMesin($no_mesin)
    	{

    		return $this->no_mesin = $no_mesin;
    	}

    	private function suratmesin()
    	{

            return $this->suratmesin;
    	}

    	public function setWarna($warna)
    	{

    		return $this->warna = $warna;
    	}

    	public function setMerk($merk)
    	{

    		return $this->merk = $merk;
    	}

    	public function setCC($cc)
    	{

    		return $this->cc = $cc;
    	}

    	public function showConstan()
    	{
    		return self::roda;
    	}


        
    	public function result($roda)
    	{


    		if ($roda > self::roda) {

    			return 'Bukan sepeda motor, karena roda lebih dari '.self::roda;
    		} else if ($roda < self::roda) {

    			return 'Bukan sepeda motor, karena ban kurang dari '.self::roda;
    		}else {

    			return 'Sepeda Motor';
    		}
    	}

    	//endOfMethod

    }
