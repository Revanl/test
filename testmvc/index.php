<?php
require_once('connect.php');
//with the help of .htaccess we can see on which page we are on
echo $_GET['url'];

//this automatically finds the classes and loads the files
spl_autoload_register(function($class_name) {
	if(file_exists('./classes/'.$class_name.'.php')){
		require_once './classes/'.$class_name.'.php';
	} else if (file_exists('./controllers/'.$class_name.'.php')){
		require_once './controllers/'.$class_name.'.php';
	}
});

require_once('views/layout.php');
?>