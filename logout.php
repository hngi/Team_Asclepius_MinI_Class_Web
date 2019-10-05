<?php

session_destroy();
unset($_SESSION['User']);

header("Location: login.php");

?>