<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
 */
?>

<?php
session_start();
if (!isset($_SESSION["username"])) {
    // menggantikan header location karena di hosting terjadi error
    echo '<meta http-equiv="refresh" content="1;url=login.php">';
    exit();}
?>