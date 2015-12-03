<?php
	
	function main_title()  {

		if(isset($_GET['id']))  {

			$result = request_select('editpost',$_GET['id']);

			if($result)
				foreach($result as $rows)
					echo $rows->post_title;

		}// end if(isset...)
				
		elseif(isset($_GET['author']))  {
			
			$result = request_select('viewauthor',$_GET['author']);
			
			if($result)
				foreach($result as $rows)  {
					
					echo $rows->post_auther;
					break;

				}// end foreach()

		}// end if(isset...)

		elseif(isset($_GET['category']))  {

			$result = request_select('viewcategory',$_GET['category']);

			if($result)
				foreach($result as $rows)  {

					echo $rows->post_category;
					break;

				}// end foreach()
		}// end if(isset...)

		else  {

			echo "biglancers";

		}// end else	

	}// end function main_title()

	function index_page()  {

	$page = array("id"=>"$_GET[id]",
		      "author"=>"$_GET[author]",
		      "category"=>"$_GET[category]"
		     );

	return $page;

	}// end function page()

	function is_single($page)  {

		if($page['id'] != '')
			return true;

		elseif($page['id'] == '')
			return false;

	}// end function is_single()

	function is_author($page) {

		if($page['author'] != '') 
			return true;
	
		elseif($page['author'] == '')
			return false;

	}// end function is_author()

	function is_category($page) {

		if($page['category'] != '') 
			return true;
	
		elseif($page['category'] == '')
			return false;

	}// end function is_author()

?>
