<?php
session_start();
session_destroy();
setcookie('userEmail', null, time() - 1);
setcookie('userPass', null, time() - 1);
header("Location: index.php");


?>