<?php
session_start();
$_SESSION["username"]="user";
echo $_SESSION["username"];
session_unset();
?>