<?php
$ActualPassword = "nost04";
if ($_POST["password"] == $ActualPassword) {
    session_start();
    $_SESSION["Authorised"] = "Y";
    header("Location:../question.php");
} else {
    header("Location:WrongPassword.php");
}