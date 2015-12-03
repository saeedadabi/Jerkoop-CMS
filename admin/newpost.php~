
<?php 

	require_once(dirname(__FILE__).'/admin.php'); 
	$index = "newpost";

?>

<?php if(exist_cookie()) : ?>

<?php get_admin_header(); ?>

<?php get_form(false,$index); ?>

<?php	

	if(isset($_POST["publish"]))  {

		$insert = array("post_title"=>"$_POST[post_title]","post_content"=>"$_POST[post_content]","post_author"=>"$_POST[post_author]","post_date"=>"$_POST[post_date]","post_category"=>"$_POST[post_category]","post_status"=>"publish","comment_count"=>"0");

	
		$result=request_insert($index,$insert);

		if($result) 

			echo "successfully inserted";

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
	
		user_login($login,'login','newpost.php');
	
		} // end isset()

		require_once(dirname(dirname(__FILE__)).'/login_form.php');	
	
	endif; 

?>
