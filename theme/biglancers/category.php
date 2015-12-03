<?php get_header(); ?>

<div id="category">

<?php

	$result = request_select('viewcategory',$page['category']);

	if($result)  {

		foreach($result as $rows)  {

			echo $rows->post_title."<br>";
			echo $rows->post_auther."<br>";
			echo $rows->post_category."<br>";
			echo $rows->post_content."<br>";

		}// end foreach()

	}// end if($result)

?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
