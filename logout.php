<?php
session_start();
session_unset();
session_destroy();



//echo "logout";
header("Location: index.php");

?>