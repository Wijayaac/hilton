<?php
session_start();
session_destroy();
echo '<meta http-equiv="refresh" content="1;url=login.php">';

// header("location:login.php");