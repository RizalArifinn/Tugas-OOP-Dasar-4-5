<?php


    class Validator
    {

    	private $errors = array();

    	public function validate(array $data, array $rules)
    	{

    		$valid = true; //penetapan jika variabel valid itu true


    		foreach ($rules as $item => $ruleset) {
    			$ruleset = explode('|', $ruleset);


    			foreach ($ruleset as $rule) {
    				$pos = strpos($rule, ':');

    				if ($pos != false) { //pengecekan $pos

                        //jika $pos true/tidak false
    					$parameter = substr($rule, $pos + 1);
    					$rule = substr($rule, 0, $pos);

    				}else {
                        
                        //jika $pos false/tidak true
    					$parameter = '';
    				}


    				$methodName = 'validate'.ucfirst($rule);


                    //pengecekan ada tidaknya isi di variabel value
    				$value = isset($data[$item]) ? $data[$item] : null;

                    
    				if (method_exists($this, $methodName)) {

    					$this->$methodName($item, $value, $parameter) or $valid = false;
    				}
    			}
    		}

    		return $valid;
    	}


    	public function getErrors() //method yang digunakan untuk menampilkan error
    	{
    		return $this->errors;
    	}

    	private function validateRequired($item, $value, $parameter)
    	{
    		if ($value === '' || $value === null) {
    			$this->errors['$item'][] = 'The '.$item.' field is required'; //pesan yang muncul ketika error

    			return false;
    		}

    		return true;
    	}

        public function validateNo_mesin($item, $value, $parameter) //method validasi nomor mesin
    	{

            //pengecekan/validasi nomor mesin
            if ($parameter != $value) {
            	$this->errors[$item][] = 'The '.$item.' not match with suratmesin'; //pesan jika salah

            	return false;
            }

            return true;

            
    	}

    }
