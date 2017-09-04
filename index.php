<?php
//abstract is like a structure and it's child fills it with data

//ABSTRACT CLASS EXAMPLE

// abstract class Employee{
	// protected $employeeSalaray;
	// public function setEmployeeSalary($salary){
		// $this -> employeeSalaray = $salary;
	// }

	// abstract public function calculateSalaryAfterTaxes();
// }

// class Bob extends Employee{
	// public function calculateSalaryAfterTaxes(){
		// return $annualSalary = $this -> employeeSalaray *12 ."<br>";
	// }
// }

// class jim extends Employee{
	// public function calculateSalaryAfterTaxes(){
		// return $salaryAfterTaxes = ($this -> employeeSalaray * (90 /100)) * 12 . "<br>";
	// }
// }
// $bob = new Bob();
// $bob-> setEmployeeSalary(1000);
// echo $bob->calculateSalaryAfterTaxes();
// $jim = new Jim();
// $jim -> setEmployeeSalary(1000);
// echo $jim->calculateSalaryAfterTaxes();

//INTERFACE EXAMPLE

// interface Car { 
  // public function setModel($name);
  // public function getModel();
// }

// interface Vehicle {
	// public function setHasWheels($bool);
	// public function getHasWheels();
// }

// class miniCar implements Car, Vehicle{
	// private $model;
	// private $hasWheels;

	// public function setModel($name)
	// {
		// $this -> model = $name;
	// }
	
	// public function getModel()
	// {
	// return $this -> model ."\r\n"; 
	// }
	
	// public function setHasWheels($bool)
	// {
	// $this -> hasWheels = $bool; 
	// }
	
	// public function getHasWheels()
	// {
		// return ($this->hasWheels)? "has wheels" : "no wheels" ."\r\n";
	// }
// }
// $honda = new miniCar();
// $honda->setModel("civic");
// $honda->setHasWheels(true);
// echo $honda->getModel();
// echo $honda-> getHasWheels();

	
		interface Country{
			public function setCountryName($name);
			public function getCountryName();
			public function setCountryPopulation($population);
			public function getCountryPopulation();
		}
		class CountryInfo implements Country{
			public function __construct ()
			{
				echo "<br>";
			}
			public $countryName;
			public $countryPopulation;
			public function setCountryName($name)
			{
				$this->countryName = $name;
			}
			public function getCountryName()
			{
				return " country name: " . $this-> countryName;
			}
			public function setCountryPopulation($population)
			{
				$this->countryPopulation = $population;
			}
			public function getCountryPopulation()
			{
				return " population: " . $this->countryPopulation;
			}
		}
		
		//germany 
		
		$germany = new CountryInfo();
		$germany->setCountryName("germany");
		$germany->setCountryPopulation("82,670 million");
		echo $germany->getCountryName();
		echo $germany->getCountryPopulation();
		
		//austria
		
		$austria = new CountryInfo();
		$austria->setCountryName("austria");
		$austria->setCountryPopulation("8,747 million");
		echo $austria->getCountryName();
		echo $austria->getCountryPopulation();
?>
