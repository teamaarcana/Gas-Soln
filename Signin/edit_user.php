<?php
$dbh = db_connect();
$username = $_GET['username'];
$password = $_GET['userpassword'];
$id = $_GET['id'];


$sql = "Update user set name =:name, password=:password where id=" .$id;
$q = $dbh->prepare($sql);
$q->execute(array(':name'=>$username,':password'=>$password));
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