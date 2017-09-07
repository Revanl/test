<?php
Route::set('index.php', function(){
	Index::CreateView("Index");
});

Route::set('about-us', function(){
	AboutUs::CreateView("AboutUs");
	AboutUs::doSomething();
});

Route::set('contact-us', function(){
	ContactUs::CreateView("ContactUs");
})
;
Route::set('register', function(){
	Register::CreateView("Register");
Register::RegisterUser();
});
?>