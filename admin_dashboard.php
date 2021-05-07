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
		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header"><strong>Registered Users:</strong></div>
				<div class="card-body">
					<p class="card-text">No. of users: <?php echo user_count();?></p>
					<a href="view_users.php" class="btn btn-success" target="_blank">View Registered Users</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header"><strong>Registered Books:</strong></div>
				<div class="card-body">
					<p class="card-text">No. of availbale books: <?php echo book_count();?></p>
					<a href="view_books.php" class="btn btn-success" target="_blank">View Registered Books</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header"><strong>Registered Category:</strong></div>
				<div class="card-body">
					<p class="card-text">No. of book's category: <?php echo category_count();?></p>
					<a href="view_category.php" class="btn btn-success" target="_blank">View Categories</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header"><strong>Registered Publishers:</strong></div>
				<div class="card-body">
					<p class="card-text">No. of publishers: <?php echo publisher_count();?></p>
					<a href="view_publisher.php" class="btn btn-success" target="_blank">View Publishers</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header"><strong>Books Issued:</strong></div>
				<div class="card-body">
					<p class="card-text">No. of books issued: <?php echo issued_book_count();?></p>
					<a href="view_issued_books.php" class="btn btn-primary" target="_blank">View Issued books</a>
				</div>
			</div>
		</div>
	</div>
    
   
    
</body>
</html>