<?php get_header(); ?>

<div id="author">

<?php

	$result = request_select('viewauthor',$page['author']);

	if($result)  {

		foreach($result as $rows)  {
			echo $rows->post_title.'<br>';
			echo $rows->post_auther.'<br>';
			echo $rows->post_content.'<br>';

		}// end foreach()

	//show_comments();

	}// end if($result)

				
?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
