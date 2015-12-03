<?php	require_once(dirname(__FILE__).'/admin.php');   ?>

<?php if(exist_cookie()) : ?>

<?php	get_admin_header();   ?>   


















<?php	get_admin_sidebar(); ?>

<?php	get_admin_footer();  ?>

<?php

	else :

		if(isset($_POST['login'])) {	
	
		$login = array(
				"username"=>"$_POST[username]"
				,"password"=>"$_POST[password]"
				);  
			
		user_login($login,'login','index.php');
	
		} // end isset()

		require_once(dirname(dirname(__FILE__)).'/login_form.php');		
			      
	endif; 

?>

