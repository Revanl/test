<?php

class Register extends Controller{
	public static function RegisterUser(){
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			$registerName = $_POST['registerName'];
			$registerPassword = $_POST['registerPassword'];
			echo $registerName;
			echo $registerPassword;
			
		
		self::insert("INSERT INTO users (name, password) VALUES(:name, :password)", array(':name'=> $registerName,':password'=> $registerPassword));
		
	}
	}
}

?>