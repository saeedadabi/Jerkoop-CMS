<?php get_header(); ?>

<div id='single'>

<?php
	
	$result = request_select('editpost',$page['id']);

	if($result)
		foreach($result as $rows)  {

			echo $rows->post_title."<br>";
			echo $rows->post_content."<br>";

		}// end foreach()

?>

<h3> comments : </h3>

<?php

	comments_show($page);

?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
