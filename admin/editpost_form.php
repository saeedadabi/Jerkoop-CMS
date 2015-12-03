

	<input type="hidden" name="post_id" value="<?php echo $row->post_id; ?>">
	عنوان :                              <input type="text" name="post_title" value="<?php echo $row->post_title; ?>"><br>
	متن :                            <input type="text" name="post_content" value="<?php echo $row->post_content; ?>"><br>
	دسته بندی :                     <input type="text" name="post_category" value="<?php echo $row->post_category; ?>"><br>
	نویسنده :                           <input type="text" name="post_author" value="<?php echo $row->post_auther; ?>"><br>
	تاریخ و ساعت :                          <input type="text" name="post_date" value="<?php echo $row->post_date; ?>"><br>
	<input type="hidden" name="post_status" value="<?php echo $row->post_status; ?>">
	<input type="hidden" name="post_comment" value="<?php echo $row->comment_count; ?>">
	<input type="submit" name="Update" value="Update">
			
