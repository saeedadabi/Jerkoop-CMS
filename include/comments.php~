<?php

	function comments_show($page)  {

		if(isset($page['id']))  {

			$result = request_select('viewcomments',$page['id']);
			
			if($result)
				foreach($result as $rows)  {

					echo '<h5> name: </h5>'.$rows->comment_user_name.'<br>';
					echo '<h5> content: </h5>'.$rows->comment_content.'<br>';

				}// end foreach()
				
		}// end if(isset...)

	}// end function comments_exist()


?>
