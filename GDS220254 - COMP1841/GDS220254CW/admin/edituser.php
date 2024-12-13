<?php
include "../includes/DatabaseConnect.php";
include "../includes/DatabaseFunction.php";
try {
    if (isset($_POST["username"])) {
        updateUser($pdo, $_POST["userid"], $_POST["username"], $_POST["email"]);
        header('location: user.php'); //redirect
    } else {
        $user = getUser($pdo, $_GET["id"]);
        $title = "Edit user";

        ob_start();
        include "../templates/edituser.html.php";
        $output = ob_get_clean();
    }
} catch (PDOException $e) {
    $title = "An error has occurred";
    $output = "DB error: " . $e->getMessage();
}
include "../templates/admin_layout.html.php";