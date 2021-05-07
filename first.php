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
    
    <title>Library Management System</title>
</head>
<body>
<img class="bg" src="bg.jpg" alt="library image">

    <nav class="navbar navbar-expand-lg bg-danger navbar-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="first.php">Library Management System</a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="first.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Admin</a>
                </li>
            </ul>

        </div>
    </nav>
    <span><marquee>Welcome to the Library. Library opens at 9 AM and closes at 8 PM (Mon-Sat).</marquee></span><br><br>
   
    <div id ="content">
    
    <form action="register.php" method="post">
    <center><h3>User Registration Form</h3></center> 
            <div class="form-group">
            <label for="Name">Full Name:</label>
            <input type="text" name="Name" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="Email">Email Id:</label>
            <input type="email" name="Email" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="Phone">Phone No.:</label>
            <input type="tel" name="Phone" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="Password">Password:</label>
            <input type="password" name="Password" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="Address">Address:</label>
            <textarea rows="3" cols="40" name="Address" class="form-control"></textarea>
            </div>
        <center><button type="submit" class="btn btn-primary">Register</button></center>
    </form>
    </div>
    
</body>
</html>