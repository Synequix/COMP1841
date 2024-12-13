<?php
require "login/Check.php";
try {
    include "../includes/DatabaseConnect.php";
    include "../includes/DatabaseFunction.php";
    $modules = allModules($pdo);
    $title = "Module list";
    $totalModules = totalModules($pdo);
    ob_start();
    include "../templates/module.html.php";
    $output=ob_get_clean();

} catch (PDOException $e) {
    $output = "Error: DB connect with " . $e->getMessage();
}
include "../templates/admin_layout.html.php";