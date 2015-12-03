<?php

	function the_post() {

		$template = get_name_template();

		foreach(exist_post() as $rows)
			include('theme/'.$template.'/content.php');

	}// end function the_post()

	function exist_post() {

		$result = request_select('viewpost');
	
		if($result)
			return $result;

	}// end function the_id()

	function none_post() {

		if(!exist_post())
			echo "No posts found";

	}// end function none_post()

?>
