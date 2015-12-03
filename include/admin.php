<?php

	function user_login($login,$index,$url)  {
	
		if(!empty($login['username']) && !empty($login['password']))  {

			$result = request_select($index,$login);
			if($result)  {

				foreach($result as $row)  {

					if($row->user_username == $login['username'] && $row->user_password == $login['password'] )  {
					
					if($row->user_role == 'admin')  {

						$username = $login['username'];
						
						$res = request_select('isset-cookie',$username);

						// is username exit in cookie table
						if($res)  {

							foreach ($res as $user)
	
								$cookie_name = $user->cookie_name;

								// if username exist && a cookie exist and isset 
								if($username == $user->cookie_username && isset($_COOKIE[$cookie_name]) && $_COOKIE[$cookie_name] == $user->cookie_value)  {
									if($url) {
										
										header("location:$url");
										exit();
										
									}
									
									else  {
 
										header("location:admin/index.php");
										exit();
									
									}// end else

								}// end if

								// if username exist &&  a cookie not exist and not isset
								elseif($username == $user->cookie_username && !isset($_COOKIE	[$cookie_name]) && $_COOKIE[$cookie_name] != $user->cookie_value)  { 														

									$cookie_name = random_code(); 
									$cookie_value = random_code();
									
									$update = array(					  												"cookie_name"=>"$cookie_name",	
											"cookie_value"=>"$cookie_value",
											"cookie_username"=>"$user->cookie_username"
											);

									$upd = request_update('cookie_update',$update);

									if($upd)  {

										setcookie($cookie_name,$cookie_value,time() + (86400*30) ,"/");
										
										if($url)  {
											
											header("location:$url");
											exit();

										}// end if

										else  {

											header("location:admin/index.php");
											exit();

										}// end else

									}// end if($upd)

								}// end elseif

						}// end if($res)

						elseif(!$res) {	

							$cookie_name = random_code(); //$login['username'];
							$cookie_value = random_code(); //md5($login['username']);
						
							$cookie = array("cookie_name"=>"$cookie_name",
									"cookie_value"=>"$cookie_value",
									"cookie_username"=>"$username"    
									);
							$coo = request_insert('create-cookie',$cookie);
			
							if($coo)  {

								setcookie($cookie_name,$cookie_value,time() + (86400*30) ,"/");	
								
									if($url)  {

										header("location:$url");
										exit();

									}// end if

									else  {

										header("location:admin/index.php");
										exit();
									
									}// end else 								
							} // end if($coo) 								
						}// end elseif(!$res)
										
					}// end if( '' == admin)

					elseif($row->user_role != 'admin')
						echo "you can not login because you are not admin";

					}// end if
					
				}// end foreach()

			}// end if($result)
				
			if(!$result)
				echo "username or passwrod is not correct";

		}// end empty()

		elseif(empty($login['username']) && empty($login['password']))
			echo "please full username and password fields";


	}// end function login()

	function exist_cookie() {
		
		$result = request_select('viewcookie');
		
		if($result) {
			
			foreach($result as $row)  {

				$cookie_name = $row->cookie_name;
				
				if(isset($_COOKIE[$cookie_name]))  {

					return true;
					break;
					
				}

			}// end foreach()
			
		}// end if
		
	}// end function search_cookie()

	function random_code($length=4) {
   
   		$characters = "23456789ABCDEFHJKLMNPRTVWXYZ";

   		for ($p = 0; $p < $length; $p++)  {
       
			$string .= $characters[mt_rand(0, strlen($characters)-1)];
 		
		}// end for
			
		return $string;

	}// end function randomcode()	

?>
