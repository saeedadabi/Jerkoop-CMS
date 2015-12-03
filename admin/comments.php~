<?php require_once(dirname(__FILE__).'/admin.php'); ?>	

<?php if(exist_cookie()) : ?>

<?php	get_admin_header(); ?>

<table id="viewcomments">

	<tr>
	<th> نام </th><th> نوشته </th><th> ایمیل </th><th> تاریخ/ساعت </th>
	</tr><br>

<?php	
	
	$index = "comments";	
	$result = request_select($index);
	if($result) 
		get_form($result,$index);
	
?>

</table>

<?php	get_admin_sidebar(); ?>
<?php	get_admin_footer();  ?>

<?php

	else :		
		
		if(isset($_POST['login'])) {	
	
		$login = array(
				"username"=>"$_POST[username]"
				,"password"=>"$_POST[password]"
				);
		$url = $_SERVER['REQUEST_URI'];
		$url = ltrim($url,"cms1/admin");  
	
		user_login($login,'login',$url);
	
		} // end isset()

		require_once(dirname(dirname(__FILE__)).'/login_form.php');	
	
	endif; 

?>
