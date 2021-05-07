<!-- to destroy the session -->

<?php
    session_unset();
    session_destroy();
    header("Location:first.php");
?>