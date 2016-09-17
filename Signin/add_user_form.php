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
			frm.username.focus();
			return false;
		}
		if (document.frm.userpassword.value=="")
		{
			alert("Password must be filled.");
			frm.userpassword.focus();
			return false;
		}
		if (document.frm.username.value!="" && document.frm.userpassword.value!="")
		{
			alert("Record has been added");
			return true;
		}
	}
</script>

</head>
<body>

<div class="container">
		<div class="page-header">
		<h1>Signin</h1>
		</div>
		
		<div class="row">
			<div class="col-md-2">
				<ul class="List-group">
					<li class="List-group-item"><a href="display_users.php">Display user</a></li>
					<li class="List-group-item"><a href="add_user_form.php">Add user</a></li>
			</div>
			
			<div class="col-md-7">
				<form method="GET" action="add_record.php" name="frm">
        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" class="form-control" name="username" placeholder="Name">
        </div>
		
        <div class="form-group">
            <label for="userpassword">Password</label>
            <input type="password" class="form-control" name="userpassword" placeholder="Password">
        </div>    
		
        <button type="submit" class="btn btn-primary" onClick="save()">Add</button>
        <a href="index.php" class="btn btn-primary">Cancel</a>
        <a href="../index.html" class="btn btn-primary pull-right">Back</a>
    </form>	
		
			</div>
	
		</div>
	
	</div>



</body>
</html>