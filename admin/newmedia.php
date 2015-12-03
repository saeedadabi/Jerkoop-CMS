<?php 

	require_once(dirname(__FILE__).'/admin.php'); 
	$index = "newmedia";

?>

<?php if(exist_cookie()) : ?>

<?php get_admin_header(); ?>

<?php get_form(false,$index); ?>

<?php
	
	if (isset($_POST['Add'])) {

		$tmp_name = $_FILES['upload']['tmp_name'];
		$media_name=$_FILES['upload']['name'];
		$media_path ="image/".$media_name;
		
		$insert = array("media_name"=>"$media_name","media_path"=>"$media_path");
		
		if(upload_media($tmp_name,$media_path)) {
			
			$result = request_insert($index,$insert);
			
			if ($result) {
				
				echo "successfully";
				
			}// end if
			
		}// end if	
		
	}// end isset()
	
?>

<?php get_admin_sidebar(); ?>
<?php get_admin_footer(); ?>

<?php

	else :		
		
		if(isset($_POST['login'])) {	
	
		$login = array(
				"username"=>"$_POST[username]"
				,"password"=>"$_POST[password]"
				);

		//$url = $_SERVER['REQUEST_URI'];
		//$url = ltrim($url,"cms1/admin");  
	
		user_login($login,'login','newmedia.php');
	
		} // end isset()

		require_once(dirname(dirname(__FILE__)).'/login_form.php');	
	
	endif; 

?>
