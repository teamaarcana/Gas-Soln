<?php
    $dbh = db_connect();
	
	
	$id = $_GET['id'];
    $stmt = $dbh->query("SELECT * from user where id='".$id."'");
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
	

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

<html>
<head>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

<script language="JavaScript">
function save()
	{
		if (document.frm.username.value=="")
		{
			alert("Contact Person Name must be filled.");
			return false;
		}
		if (document.frm.userpassword.value=="")
		{
			alert("Password must be filled.");
			return false;
		}
		if (document.frm.username.value!="" && document.frm.userpassword.value!="")
		{
			alert("Record has been updated");
			return true;
		}
	}
</script>
</head>
<body>


<div class="container">
		<div class="page-header">
		<h1>SMS</h1>
		</div>
		
		<div class="row">
			<div class="col-md-2">
				<ul class="List-group">
					<li class="List-group-item"><a href="display_users.php">Display user</a></li>
					<li class="List-group-item"><a href="add_user_form.php">Add user</a></li>
			</div>
			
			<div class="col-md-5">
				<form method="GET" action="edit_user.php" name="frm">
        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" class="form-control" name="username" value="<?php echo $records[0]['name']; ?>">
        </div>
		
        <div class="form-group">
            <label for="userpassword">Password</label>
            <input type="password" class="form-control" name="userpassword" value="<?php echo $records[0]['password']?>">
        </div>    
		<input type="hidden" name="id"  value="<?php echo $records[0]['id']?>">
		
        <button type="submit" class="btn btn-primary" onClick="save()">Update</button>
        <button type="submit" class="btn btn-primary">Cancel</button>
    </form>
		
			</div>
	
		</div>
	
	</div>




</body>
</html>