<?php
$username = $_GET['username'];
$password = $_GET['userpassword'];

//echo $username;
//echo $password;

$dbh = db_connect();
header('location: add_user_form.php');

$sql = "INSERT INTO user (name, password) VALUES (:name, :password)";
$q = $dbh->prepare($sql);
$q->execute(array(':name'=>$username,':password'=>$password));
//echo "The data has been added!!";

function db_connect(){
    	
        $user = "root";
        $pass = "";
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=sms', $user, $pass);     
           // echo "Successfully connected";
			
			return  $dbh;       
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        
  }
?>