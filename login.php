<?php 
	
	require_once(dirname(__FILE__).'/settings.php');

	$index="login";
	 	
	if(isset($_POST['login'])) {	
	
		$login = array("username"=>"$_POST[username]","password"=>"$_POST[password]");			
		user_login($login,$index,false);
	
	} // end isset()

	get_form(false,$index);
	
?>
