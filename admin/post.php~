<?php require_once(dirname(__FILE__).'/admin.php'); ?>

<?php	get_admin_header();  ?>

<form id="editpost" method="post" action="post.php">

<?php

	// select one row of table post for update 

	if (isset($_GET['post']) && $_GET['action']=='editpost') {
		
		if($_GET['row_up'] != 0)
			echo "<h4 style=background-color:yellow> Post updated </h4>";			

		$index = $_GET['action'];
		$post_id = $_GET['post'];
		
		$result = request_select($index,$post_id);
		
		if ($result) {

			get_form($result,$index);
			
		}// end if - $result
			
	}// end isset() - editpost
	
?>

</form>
 
<?php
	
	//delete one row of table post

	if (isset($_GET['post']) && $_GET['action']=='deletepost') {
		
		$index = $_GET['action'];
		$id = $_GET['post'];
		
		$result = request_delete($index,$id);
		
		if ($result) {
			
			$delete = "?delete=".$result->rowCount();
			header("location:viewpost.php$delete");
			
		}// end if
		
	}// end isset() - deletepost
	
?>

<?php

	// update one row of table post if press click *Update*
	
	if (isset($_POST['Update'])) {	
			
		$index = "editpost";
		$update = array("post_id"=>"$_POST[post_id]","post_title"=>"$_POST[post_title]","post_content"=>"$_POST[post_content]","post_category"=>"$_POST[post_category]","post_author"=>"$_POST[post_author]","post_date"=>"$_POST[post_date]","post_status"=>"$_POST[post_status]","post_comment"=>"$_POST[post_comment]");
		
		$result = request_update($index,$update);
		
		if ($result) {
			
			$update = "?post=".$update['post_id']."&action=editpost&row_up=".$result->rowCount();
			header("location:post.php$update");
						
		}// end if
		
	}// end isset()
			
?>

<?php	get_admin_sidebar();  ?>
<?php	get_admin_footer();   ?>
