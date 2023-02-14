<?php

class Calculator {

    public $firstNumber;
    public $secondNumber;
    public $calcOperator;
	

    public function __construct($firstNoInserted, $secondNoInserted, $insertedOperator) {
        $this->firstNumber = $firstNoInserted;
        $this->secondNumber = $secondNoInserted;
        $this->calcOperator = $insertedOperator;
    }
	
	/**
	* calculation for calculator
	*/
    public function calcMethod() {
		
      switch ($this->calcOperator) {
        case 'Add':
            $result = $this->additionValue($this->firstNumber,$this->secondNumber);
            break;
        case 'Substract':
            $result = $this->substractionValue($this->firstNumber,$this->secondNumber);
            break;
        case 'Multiply':
            $result = $this->multiplyValue($this->firstNumber,$this->secondNumber);
            break;
			
		case 'Divide':
            $result = $this->divisionValue($this->firstNumber,$this->secondNumber);
            break;

        default:
            $result = "Error";
            break;
      }
      return $result;
    }
	
	/**
	* get the addition od two value
	* @param - $firstNoInserted - first number
	* @param - $secondNoInserted - second number
	*/
	
	public function additionValue($firstNoInserted, $secondNoInserted){
		if ((!empty($firstNoInserted) && is_numeric($firstNoInserted)) && (!empty($secondNoInserted) && is_numeric($secondNoInserted)))
		{
			return $firstNoInserted + $secondNoInserted;
		 } else 
		{
			return 'Enter valid numbers.';
		} 
	}
	
	/**
	* get the substraction od two value
	* @param - $firstNoInserted - first number
	* @param - $secondNoInserted - second number
	*/
	
	public function substractionValue($firstNoInserted, $secondNoInserted){
		if ((!empty($firstNoInserted) && is_numeric($firstNoInserted)) && (!empty($secondNoInserted) && is_numeric($secondNoInserted)))
		{
			return $firstNoInserted - $secondNoInserted;
		} else 
		{
			return 'Enter valid numbers.';
		} 
	}
	
	/**
	* get the multiplication od two value
	* @param - $firstNoInserted - first number
	* @param - $secondNoInserted - second number
	*/
	
	public function multiplyValue($firstNoInserted, $secondNoInserted){
		if ((!empty($firstNoInserted) && is_numeric($firstNoInserted)) && (!empty($secondNoInserted) && is_numeric($secondNoInserted)))
		{
		 return $firstNoInserted * $secondNoInserted;
		} else 
		{
			return 'Enter valid numbers.';
		} 
	}
	
	/**
	* get the division od two value
	* @param - $firstNoInserted - first number
	* @param - $secondNoInserted - second number
	*/
	
	public function divisionValue($firstNoInserted, $secondNoInserted){
		if ((!empty($firstNoInserted) && is_numeric($firstNoInserted)) && (!empty($secondNoInserted) && is_numeric($secondNoInserted)))
		{
			if ($secondNoInserted == 0)
			{
				return 'Second Number cannot be Zero.';
			} else {
				return $firstNoInserted / $secondNoInserted;
			}
		} else 
		{
			return 'Enter valid numbers.';
		}
		
	}

}

 ?>