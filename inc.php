<?php
class Inc{
	public $num1 = 0;
	public $num2 = 0;
	public $operation = 0;

	public function Inc($num1,$num2,$operation)
	{
		$this->num1 = $num1;
		$this->num2 = $num2;
		$this->operation = $operation;
	}
	public function add()
	{
		return $this->num1 + $this->num2;
	}
	public function minus()
	{
		return $this->num1 - $this->num2;
	}
	public function divide()
	{
		return $this->num1 / $this->num2;
	}
	public function multiply()
	{
		return $this->num1 * $this->num2;
	}
}