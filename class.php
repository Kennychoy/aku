<?php

class person {
	public $name;
	public $age;
	public $gender;
	
	public function __construct($name, $age, $gender){
		$this->name = $name;
		$this->age = $age;
		$this->gender = $gender;
	}
	
	public function greet($msg){
		return "Hey, my name is " . $this->name . " " . $msg;
	}
}

$dave = new person("Dave", "20", "Male");

echo $dave->greet("fuck");

?>