<?php
include "../includes/DatabaseConnect.php";
include "../includes/DatabaseFunction.php";
try {
    if (isset($_POST["questiontext"])) {
        updateQuestion($pdo, $_POST["questionid"], $_POST["questiontext"], $_POST["user_id"], $_POST["module_id"]);
        header('location: question.php'); //redirect
    } else {
        $question = getQuestion($pdo, $_GET["id"]);
        $title = "Edit question";
        $users=allUsers($pdo);
        $modules=allModules($pdo);
        ob_start();
        include "../templates/editquestion.html.php";
        $output = ob_get_clean();
    }
} catch (PDOException $e) {
    $title = "An error has occurred";
    $output = "DB error: " . $e->getMessage();
}
include "../templates/admin_layout.html.php";
