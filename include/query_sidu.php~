<?php

	function select_query($index,$id) {

		switch($index) {
			//home	
			case 'viewhome':
			//return $sql = "SELECT * FROM ----- ORDER BY id DESC LIMIT --";
			break;
			//viewpost
			case 'viewpost':
			return $sql = "SELECT * FROM Posts ORDER BY post_id DESC LIMIT 20";
			break;
			//editpost
			case 'editpost':
			return $sql = "SELECT * FROM Posts where post_id=$id";
			break;
			//viewauthor
			case 'viewauthor':
			return $sql = "SELECT * FROM Posts where post_auther='$id'";
			break;
			//viewcategory
			case 'viewcategory':
			return $sql = "SELECT * FROM Posts where post_category='$id'";
			break;
			//viewmedia
			case 'viewmedia':
			return $sql = "SELECT * FROM Media ORDER BY media_id DESC LIMIT 20";
			break;
			//comments
			case 'comments':
			return $sql = "SELECT * FROM Comments ORDER BY comment_id DESC LIMIT 20";
			break;
			//viewcomments
			case 'viewcomments':
			return $sql = "SELECT * FROM Comments where comment_post_id=$id";
			break;
			//theme
			case 'theme':
			return $sql = "SELECT * FROM Themes";
			break;
		    	//viewusers
			case 'viewuser':
			return $sql = "SELECT * FROM Users ORDER BY user_id DESC LIMIT 20";
			break;
		    	//login
			case 'login':
			return $sql = "SELECT * FROM Users where user_username='$id[username]' and user_password='$id[password]'";
			break;
		    	//viewcookie
			case 'viewcookie':
			return $sql = "SELECT * FROM cookie ORDER BY cookie_id DESC LIMIT 20";
			break;
		    	//isset-cookie
			case 'isset-cookie':
			return $sql = "SELECT * FROM cookie where cookie_username='$id'";
			break;

		}//end switch
	
}//end function select_query()

	function insert_query($index,$insert) {
		
		switch($index) {
				
			case 'newpost':
			return $sql = "INSERT INTO Posts (post_id,post_title,post_content,post_auther,post_date,post_category,post_status,comment_count) VALUES (NULL,'$insert[post_title]','$insert[post_content]','$insert[post_author]','$insert[post_date]','$insert[post_category]','$insert[post_status]','$insert[comment_count]')";
			break;
				
			case 'newmedia':
			return $sql = "INSERT INTO Media(media_id,media_name,media_path) VALUES (NULL,'$insert[media_name]','$insert[media_path]')";
			break;
			//create-cookie
			case 'create-cookie':
			return $sql = "INSERT INTO cookie(cookie_id,cookie_name,cookie_value,cookie_username) VALUES (NULL,'$insert[cookie_name]','$insert[cookie_value]','$insert[cookie_username]')";
			break;
					
		}// end switch
		
	}// end function insert_query()
	
	function delete_query($index,$id) {
		
		switch($index) {
				
			case 'deletepost':
			return $sql = "DELETE FROM Posts WHERE post_id=$id";
			break;
				
			case 'deleteusers':
			return $sql = "DELETE FROM Posts WHERE ";
			break;
			
			case 'delete-cookie':
			return $sql = "DELETE FROM cookie WHERE cookie_username=$id";
			break;
		
		}// end switch
		
	}// end function delete_query()
	
	function update_query($index,$update) {
		
		switch($index) {
				
			case 'editpost':
			return $sql = "UPDATE Posts SET post_title ='$update[post_title]', post_content ='$update[post_content]', post_auther ='$update[post_author]', post_date ='$update[post_date]', post_category ='$update[post_category]', post_status ='$update[post_status]', comment_count ='$update[post_comment]' WHERE post_id = '$update[post_id]'";
			break;
				
			case 'editusers':
			return $sql = "UPDATE Posts SET post_name ='$update[post_name]' WHERE post_id";
			break;

			case 'cookie_update':
			return $sql = "UPDATE cookie SET cookie_name ='$update[cookie_name]', cookie_value ='$update[cookie_value]', cookie_username ='$update[cookie_username]' WHERE cookie_username='$update[cookie_username]'";
			break;
					
		}// end switch
	
	}// end function update_query()

?>
