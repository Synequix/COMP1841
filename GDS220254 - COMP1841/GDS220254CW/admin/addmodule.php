<?php
include "../includes/DatabaseConnect.php";
include "../includes/DatabaseFunction.php";
if (isset($_POST["text"])) {
    try {
        insertModule($pdo, $_POST["text"]);
        header('location: module.php'); //redirect
    } catch (PDOException $e) {
        $title = "An error has occurred";
        $output = "DB error: " . $e->getMessage();
    }
} else {
    $title = "Add a new module";
    $modules=allModules($pdo);
    ob_start();
    include "../templates/addmodule.html.php";
    $output = ob_get_clean();
}
include "../templates/admin_layout.html.php";