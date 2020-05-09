<?php
include("ayar.php");
session_start();
ob_start();
if(($_POST["username"]==$user) and ($_POST["password"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
echo "Hos Geldiniz";
}else{

header("Location:giris.html");
}
ob_end_flush();
?>