<?php
	
	$page = index_page();

	$template = get_name_template();

	if(is_single($page))
		include('theme/'.$template.'/single.php');

	elseif(is_author($page))
		include('theme/'.$template.'/author.php');
	

	elseif(is_category($page))
		include('theme/'.$template.'/category.php');

	//elseif(is_404())
	//	include('theme/'.$template.'/404.php');
	
	//elseif(is_archive())
	//	include('theme/'.$template.'/archive.php');
		
	else	
		include('theme/'.$template.'/index.php');
		
?>
