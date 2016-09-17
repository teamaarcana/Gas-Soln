<html>
<head>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

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
					<a href="../index.html" class="btn btn-primary pull-right">Back</a>
			</div>
			
			<div class="col-md-5">
				<?php
				$dbh = db_connect();
				$records = $dbh->query("select * from user");

				echo "<table class='table'><tr><th>Name</th><th>Password</th><th>Actions</th>
				<th></th>
				</tr>";
				foreach ($records as $row) {
					  echo "<tr>"; 
					  echo "<td>" . $row[1] . "</td>";
					  echo "<td>". $row[2] . "</td>";
					  echo "<td><a href='edit_user_form.php?id=".$row[0]."'>Edit</a></td>";
					  echo "<td><a href='delete_user.php?id=".$row[0]."'>Delete</a></td>";
					  echo "</tr>"; 
				}
				echo "</table>";
		
		?>
		
		
			</div>
	
		</div>
	
	</div>



<?php

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
  
  </body>
  </html>