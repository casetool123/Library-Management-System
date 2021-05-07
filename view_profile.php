<?php
    session_start();
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "library");

    $Name = "";
    $Email = "";
    $Phone = "";
    $Address = "";
    $query = "SELECT * FROM users WHERE Email = '$_SESSION[Email]'";
    $query_run = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($query_run)){
        $Name = $row['Name'];
        $Email = $row['Email'];
        $Phone = $row['Phone'];
        $Address = $row['Address'];
    }

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
    
    <title>User Dashboard</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="user_dashboard.php">User Dashboard</a>
            </div>
            <font style="color: white"><span><h5>Welcome! <?php echo $_SESSION['Name'];?> </h5></span></font>
            <font style="color: white"><span><h5>Email: <?php echo $_SESSION['Email'];?> </h5></span></font>

            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="view_profile.php">View Profile</a>
                        <a class="dropdown-item" href="change_password.php">Change Password</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav><br><br>
    
    <div id ="content2">
    
    <form>
    <center><h3>User Details</h3></center> 
            <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" value="<?php echo $Name; ?>" disabled>
            </div>
            <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" value="<?php echo $Email; ?>" disabled>
            </div>
            <div class="form-group">
            <label>Phone No.:</label>
            <input type="tel" class="form-control" value="<?php echo $Phone; ?>" disabled>
            </div>
            <div class="form-group">
            <label>Address:</label>
            <textarea rows="3" cols="40" disabled="" class="form-control"><?php echo $Address; ?></textarea>
            </div>
            
    </form>
    </div>
    
</body>
</html>