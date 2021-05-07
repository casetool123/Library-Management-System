<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "library");

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Password = $_POST['Password'];
    $Address = $_POST['Address'];

    $query = "INSERT INTO `users` (`Name`, `Email`, `Phone`, `Password`, `Address`) VALUES ('$Name', '$Email', '$Phone', '$Password', '$Address')";
    $query_run = mysqli_query($connection, $query);
?>

<script type ="text/javascript">
    alert("Registration successfull... Login to your account.");
    window.location.href = "login.php";
</script>
