<?php

	function get_admin_header() {

		require_once('admin_header.php');

	}// end get_admin_header()
	
	function get_admin_footer() {

		require_once('admin_footer.php');

	}// end get_admin_footer()

	function get_admin_sidebar() {

		require_once('admin_sidebar.php');

	}// end get_admin_sidebar()

	function get_form($result,$index) {
		
		if($result == false)
			require($index.'_form.php');
		
		else
		foreach($result as $row)
			require($index.'_form.php');
		
	}// end get_form()
	
	function upload_media ($tmp_name,$media_path) {	
		
		if(move_uploaded_file($tmp_name,$media_path)) {
				
			return true;
			
		}// end if
			
		else { 
				
			return false;
				
		}// end else
		
	}// end upload_media()

?>
