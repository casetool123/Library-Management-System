<?php
    session_start();
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "library");
    $Password = "";
    $query = "SELECT * from users where Email = '$_SESSION[Email]'";
    $query_run = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($query_run)){
        $Password = $row['Password'];
    }
    if($Password == $_POST['old_Password']){
        $query = "UPDATE users set Password = '$_POST[new_Password]' where Email = '$_SESSION[Email]'";
        $query_run = mysqli_query($connection, $query);
    }
    
    
?>

<script type="text/javascript">
    alert("Changed Successfully");
    window.location.href = "user_dashboard.php";
</script>