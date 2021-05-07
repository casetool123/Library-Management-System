<?php
    require('function.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="first.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <title>Admin Dashboard</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="admin_dashboard.php">Admin Dashboard</a>
            </div>
            <font style="color: white"><span><h5>Welcome! <?php echo $_SESSION['Name'];?> </h5></span></font>
            <font style="color: white"><span><h5>Email: <?php echo $_SESSION['Email'];?> </h5></span></font>

            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="a_view_profile.php">View Profile</a>
                        <a class="dropdown-item" href="a_change_password.php">Change Password</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                
            </ul>

        </div>
    </nav>


    <nav class="navbar navbar-expand-lg bg-info navbar-dark">
	<div class="container-fluid">
		<ul class="nav navbar-nav navbar-center">
			<li class="nav-item">
				<a href="admin_dashboard.php" class="nav-link">Dashboard</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Book</a>
				<div class="dropdown-menu">
					<a href="add_book.php" class="dropdown-item">Add New Book</a>
					
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
				<div class="dropdown-menu">
					<a href="add_category.php" class="dropdown-item">Add New Category</a>
					
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Publisher</a>
				<div class="dropdown-menu">
					<a href="add_publisher.php" class="dropdown-item">Add New Publisher</a>
					
				</div>
			</li>
			<li class="nav-item">
				<a href="issue_book.php" class="nav-link">Issue Book</a>
			</li>
		</ul>
	</div>
</nav><br><br>

<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
        <center><h3> Add New Category</h3></center>
			<form action="" method="post">
				<div class="form-group">
					<label>category_id:</label>
					<input type="text" name="category_id" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>category_name:</label>
					<input type="text" name="category_name" class="form-control" required="">
				</div>

				<button class="btn btn-info" name="add_category">Add Category</button>

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
   
    
</body>
</html>

<?php
	if(isset($_POST['add_category'])){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library");
		$query = "INSERT into category values($_POST[category_id],'$_POST[category_name]')";
		$query_run = mysqli_query($connection,$query);
	}
?>