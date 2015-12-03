<article>
<a href="index.php?id=<?php echo $rows->post_id; ?>"> <h3> <?php echo $rows->post_title; ?> </h3> </a>
<h3> <?php echo $rows->post_date; ?> </h3>
<a href="index.php?author=<?php echo $rows->post_auther; ?>"> <h3> <?php echo $rows->post_auther; ?> </h3> </a>
<a href="index.php?category=<?php echo $rows->post_category; ?>"> <h3> <?php echo $rows->post_category; ?> </h3> </a>
<p> <?php echo $rows->post_content; ?> </p>
</article>
