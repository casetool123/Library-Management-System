<?php
    require('function.php');
    session_start();
    $connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"library");
	$s_no = "";
	$book_id = "";
	$book_title = "";
	$book_publisher = "";
    $student_id = "";
    $status = "";
    $issue_date = "";

	$query = "SELECT * from issued_books";
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
					<a href="" class="dropdown-item">Add New Book</a>
					
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
				<div class="dropdown-menu">
					<a href="" class="dropdown-item">Add New Category</a>
					
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Publisher</a>
				<div class="dropdown-menu">
					<a href="" class="dropdown-item">Add New Publisher</a>
					
				</div>
			</li>
			<li class="nav-item">
				<a href="" class="nav-link">Issue Book</a>
			</li>
		</ul>
	</div>
</nav><br><br>

    <div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form>
			<table class="table-bordered" width="900px" style="text-align: center">
				<tr>
					<th>s_no:</th>
					<th>book_id:</th>
					<th>book_title:</th>
					<th>book_publisher:</th>
                    <th>student_id:</th>
                    <th>status:</th>
                    <th>issue_date:</th>
				</tr>
				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$s_no = $row['s_no'];
						$book_id = $row['book_id'];
						$book_title = $row['book_title'];
                        $book_publisher = $row['book_publisher'];
                        $student_id = $row['student_id'];
                        $status = $row['status'];
                        $issue_date = $row['issue_date'];
				?>
						<tr>
							<td><?php echo $s_no;?></td>
							<td><?php echo $book_id;?></td>
							<td><?php echo $book_title;?></td>
							<td><?php echo $book_publisher;?></td>
                            <td><?php echo $student_id;?></td>
                            <td><?php echo $status;?></td>
                            <td><?php echo $issue_date;?></td>
						</tr>
						<?php
					}
				?>
			</table>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>
    
   
    
</body>
</html>