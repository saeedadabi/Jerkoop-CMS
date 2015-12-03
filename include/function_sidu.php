
<?php
	
	require_once ('query_sidu.php');
	
	// select
	function request_select($index,$id) {
				
		$sql = select_query($index,$id);

		$conn = connect_db();
		
		try {
			
			 $stmt = $conn->prepare($sql);
			 $stmt->execute();
			 
			 $result = arrays($stmt);
			 return $result;
			 
		}// end try
		
		catch(PDOException $e) {
			
			echo "connection failed" . $e->getMessage();
			
		}// end catch
		
	}// end request_select()
	
	// insert
	function request_insert($index, $insert) {
		
		$sql = insert_query($index,$insert);

		$conn = connect_db();
		
		try {
			
			 $stmt = $conn->prepare($sql);
			 $stmt->execute();
			 return $stmt;
			 
		}// end try
		
		catch(PDOException $e) {
			
			echo "inserted failed" . $e->getMessage();
			
		}// end catch
		
	}// end request_insert()
	
	// delete
	function request_delete($index , $id) {
		
		$sql = delete_query($index,$id);

		$conn = connect_db();
		
		try {
			
			 $stmt = $conn->prepare($sql);
			 $stmt->execute();
			 return $stmt;
			 
			}// end try
		
		catch(PDOException $e) {
			
			 echo $sql . "<br>" . $e->getMessage();
			
		}// end catch
		
		
	}// end request_delete()
	
	// update
	function request_update($index , $update) {
		
		$sql = update_query($index,$update);

		$conn = connect_db();
		
		try {
			
			 $stmt = $conn->prepare($sql);
			 $stmt->execute();
			 return $stmt;
			 
			}// end try
		
		catch(PDOException $e) {
			
			 echo $sql . "<br>" . $e->getMessage();
			
		}// end catch
		
	}// end request_update()
		
	function arrays($stmt) {
		
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	
	}// end arrays()

	function name_tables() {

		$conn = connect_db();

		try {
			
			$stmt = $conn->prepare("show tables");
			$stmt->execute();
			while ($row = $stmt->fetch(PDO::FETCH_NUM))
				$table = $table . $row[0];

			return $table;

		}// end try

		catch(PDOException $e) {
			
			echo "failed" . $e->getMessage();
		
		}// end catch
	
	}// end show_tables()
	
?>
