<?php
include "../includes/DatabaseConnect.php";
include "../includes/DatabaseFunction.php";
try {
    if (isset($_POST["text"])) {
        updateModule($pdo, $_POST["moduleid"], $_POST["text"]);
        header('location: module.php'); //redirect
    } else {
        $module = getModule($pdo, $_GET["id"]);
        $title = "Edit module";

        ob_start();
        include "../templates/editmodule.html.php";
        $output = ob_get_clean();
    }
} catch (PDOException $e) {
    $title = "An error has occurred";
    $output = "DB error: " . $e->getMessage();
}
include "../templates/admin_layout.html.php";