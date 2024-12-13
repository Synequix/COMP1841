<?php
if (isset($_POST["id"])) {
    try {
        include "../includes/DatabaseConnect.php";
        include "../includes/DatabaseFunction.php";
        deleteQuestion($pdo, $_POST["id"]);
        header('location: question.php'); //redirect
    } catch (PDOException $e) {
        $title = "An error has occurred";
        $output = "DB error: ".$e->getMessage();
    }
} 
include "../templates/admin_layout.html.php";
