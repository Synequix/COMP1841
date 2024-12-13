<?php
include "../includes/DatabaseConnect.php";
include "../includes/DatabaseFunction.php";
if (isset($_POST["user_text"])) {
    try {
        insertUser($pdo, $_POST["user_text"], $_POST["email"]);
        header('location: user.php'); //redirect
    } catch (PDOException $e) {
        $title = "An error has occurred";
        $output = "DB error: " . $e->getMessage();
    }
} else {
    $title = "Add a new user";
    $users=allUsers($pdo);
    ob_start();
    include "../templates/adduser.html.php";
    $output = ob_get_clean();
}
include "../templates/admin_layout.html.php";