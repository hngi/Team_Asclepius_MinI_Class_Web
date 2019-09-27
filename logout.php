<?php

unset($_SESSION['User']);

session_destroy();

header("Location: login.php");

?>