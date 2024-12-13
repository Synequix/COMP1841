<?php
require "login/Check.php";
try {
    include "../includes/DatabaseConnect.php";
    include "../includes/DatabaseFunction.php";
    $users = allUsers($pdo);
    $title = "User list";
    $totalUsers = totalUsers($pdo);
    ob_start();
    include "../templates/user.html.php";
    $output=ob_get_clean();

} catch (PDOException $e) {
    $output = "Error: DB connect with " . $e->getMessage();
}
include "../templates/admin_layout.html.php";