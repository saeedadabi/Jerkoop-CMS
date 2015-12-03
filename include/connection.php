<?php

	function connect_db()  {

	$server=constant("db-host");
	$user=constant("db-user");
	$pass=constant("db-pass");
	$db=constant("db-name");
		
		try {

			$conn=new PDO("mysql:host=$server;dbname=$db",$user,$pass);
			$conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
			return $conn;

		}// end try

		catch(PDOException $e) {
		
			echo"connection failed" . $e->getMessage();
	
		}// end catch

	}// end function connect_db()

?>
