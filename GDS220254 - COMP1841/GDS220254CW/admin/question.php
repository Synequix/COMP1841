<?php
require "login/Check.php";
try {
    include "../includes/DatabaseConnect.php";
    include "../includes/DatabaseFunction.php";
    $questions = allQuestions($pdo);
    $title = "Question list";
    $totalQuestions = totalQuestions($pdo);
    ob_start();
    include "../templates/question.html.php";
    $output=ob_get_clean();

} catch (PDOException $e) {
    $output = "Error: DB connect with " . $e->getMessage();
}
include "../templates/admin_layout.html.php";