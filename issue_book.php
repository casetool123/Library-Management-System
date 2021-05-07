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
                <a class="navbar-brand" href="admin_dashboard.php"> Dashboard</a>
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
				<a href="" class="nav-link">Dashboard</a>
			</li>
			
			<li class="nav-item">
				<a href="issue_book.php" class="nav-link">Issue Book</a>
			</li>
		</ul>
	</div>
</nav><br>

<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
        <center><h3> You can issue book here!</h3></center>
			<form action="" method="post">
                <div class="form-group">
					<label>Book Id:</label>
					<input type="text" name="book_id" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Book_title:</label>
					<input type="text" name="book_title" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Book publisher</label>
					<select class="form-control" name="book_publisher">
						<option>-Publisher name-</option>
						<?php
							$connection = mysqli_connect("localhost","root","");
							$db = mysqli_select_db($connection,"library");
							$query = "SELECT publisher_name from publisher";
							$query_run = mysqli_query($connection,$query);
							while($row = mysqli_fetch_assoc($query_run)){
								?>
								<option><?php echo $row['publisher_name'];?></option>
								<?php
							}
						?>
					</select>
				
				<div class="form-group">
					<label>Student ID:</label>
					<input type="text" name="student_id" class="form-control" required="">
				</div>
               
				<div class="form-group">
					<label>Issue Date:</label>
					<input type="text" name="issue_date" class="form-control" value="<?php echo date("yy-m-d");?>" required="">
				</div>	
				</div>
				<button class="btn btn-primary" name="issue_book">Issue Book</button>

			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
    
</body>
</html>

<?php
	if(isset($_POST['issue_book'])){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"library");
		$query = "INSERT into issued_books values(null,$_POST[book_id],'$_POST[book_title]','$_POST[book_publisher]',$_POST[student_id],1,'$_POST[issue_date]')";
		$query_run = mysqli_query($connection,$query);
	}
?>