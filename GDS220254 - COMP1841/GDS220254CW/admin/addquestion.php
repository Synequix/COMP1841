<?php
include "../includes/DatabaseConnect.php";
include "../includes/DatabaseFunction.php";
if (isset($_POST["questiontext"])) {
    try {
        insertQuestion($pdo, $_POST["questiontext"], $_FILES["fileToUpload"]["name"], $_POST["user_id"], $_POST["module_id"]);
        include "../includes/uploadfile.php";
        header('location: question.php'); //redirect
    } catch (PDOException $e) {
        $title = "An error has occurred";
        $output = "DB error: " . $e->getMessage();
    }
} else {
    $title = "Add a new question";
    $users=allUsers($pdo);
    $modules=allModules($pdo);
    ob_start();
    include "../templates/addquestion.html.php";
    $output = ob_get_clean();
}
include "../templates/admin_layout.html.php";
