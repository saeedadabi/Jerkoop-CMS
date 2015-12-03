
<?php 

	require_once(dirname(__FILE__).'/admin.php'); 
	$index = "newuser";

?>

<?php if(exist_cookie()) : ?>

<?php get_admin_header(); ?>

<?php get_form(false,$index); ?>

<?php	

	if(isset($_POST["create"]))  {

		$insert=array("user_name"=>"$_POST[user_name]","user_username"=>"$_POST[user_username]","user_password"=>"$_POST[user_password]","user_email"=>"$_POST[user_email]","user_role"=>"$_POST[user_role]");

	
		$result=request_insert($index,$insert);

		if($result) 

			echo "successfully created";

		}//end isset

?>


<?php
	get_admin_sidebar();
	get_admin_footer();
?>

<?php

	else :

		if(isset($_POST['login'])) {	
	
		$login = array(
				"username"=>"$_POST[username]"
				,"password"=>"$_POST[password]"
				);  

		//$url = $_SERVER['REQUEST_URI'];
		//$url = ltrim($url,"cms1/admin");  
			
		user_login($login,'login','newuser.php');
	
		} // end isset()

		require_once(dirname(dirname(__FILE__)).'/login_form.php');		
			      
	endif; 

?>
