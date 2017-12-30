<?php
@session_start();

session_destroy();

header("location: /TUBES/index.php");
?>