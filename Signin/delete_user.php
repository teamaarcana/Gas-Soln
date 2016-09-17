<?php
	$dbh = db_connect();
	
		
		$id = $_GET['id'];
		
		$sql = "delete from user where id=" .$id;
		$q = $dbh->prepare($sql);
		$q->execute();
		
		header('location: display_users.php');
		
		function db_connect(){
    	
        $user = "root";
        $pass = "";
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=sms', $user, $pass);     
            //echo "Successfully connected";
			
			return  $dbh;       
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        
  }
  ?>
