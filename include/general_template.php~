<?php

	function get_name_template() {

		$result = request_select('theme');

		if($result)
			foreach($result as $rows)
				return $rows->theme_name;

	}// end get_name_template()

	function get_header() {

		$template = get_name_template();
		require_once('theme/'.$template.'/header.php');

	}// end get_header()

	function get_sidebar() {

		$template = get_name_template();
		require_once('theme/'.$template.'/sidebar.php');

	}// end get_sidebar()

	function get_footer() {

		$template = get_name_template();
		require_once('theme/'.$template.'/footer.php');

	}// end get_footer()

?>
