<?php

session_start();

unset($_SESSION["petshop"]);
session_destroy();
header("Location:cats.php");



?>