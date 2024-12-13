<?php

function query($pdo, $sql, $parameters = []): mixed {
    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}

function totalQuestions($pdo) {
	$query = query($pdo, 'SELECT COUNT(*) FROM question');
	$row = $query->fetch();
	return $row[0];
}

function getQuestion($pdo, $id): mixed {
    $parameters = [':id' => $id];
    $query = query($pdo, 'SELECT * FROM question WHERE id = :id', $parameters);
    return $query->fetch();
}

function getModule($pdo, $moduleid): mixed {
    $parameters = [':id' => $moduleid];
    $query = query($pdo, 'SELECT * FROM module WHERE id = :id', $parameters);
    return $query->fetch();
}

function getUser($pdo, $userid): mixed {
    $parameters = [':id' => $userid];
    $query = query($pdo, 'SELECT * FROM user WHERE id = :id', $parameters);
    return $query->fetch();
}

function allQuestions($pdo): mixed {
    $questions = query($pdo,'SELECT question.id, question.text as questiontext, image, name, email, module.text as moduletext FROM question
    INNER JOIN user ON user_id = user.id
    INNER JOIN module ON module_id = module.id');
    return $questions->fetchAll();
}

function totalModules($pdo) {
	$query = query($pdo, 'SELECT COUNT(*) FROM module');
	$row = $query->fetch();
	return $row[0];
}

function totalUsers($pdo) {
	$query = query($pdo, 'SELECT COUNT(*) FROM user');
	$row = $query->fetch();
	return $row[0];
}

function insertQuestion($pdo, $questiontext, $fileToUpload, $user_id, $module_id): void {
    $query = 'INSERT INTO question (text, image, user_id, module_id)
    VALUES (:text, :fileToUpload, :user_id, :module_id)';
    $parameters = [':text' => $questiontext, ':fileToUpload' => $fileToUpload, ':user_id' => $user_id, ':module_id' => $module_id];
    query($pdo, $query, $parameters);
}

function insertModule($pdo, $module_text): void {
    $query = 'INSERT INTO module (text)
    VALUES (:text)';
    $parameters = [':text' => $module_text];
    query($pdo, $query, $parameters);
}

function insertUser($pdo, $username, $email): void {
    $query = 'INSERT INTO user (name, email)
    VALUES (:name, :email)';
    $parameters = [':name' => $username, 'email' => $email];
    query($pdo, $query, $parameters);
}

function updateQuestion($pdo, $questionid, $questiontext, $user_id, $module_id): void {
    $query = 'UPDATE question SET text = :text, user_id = :user_id, module_id = :module_id WHERE id = :id';
    $parameters = [':text' => $questiontext, ':id' => $questionid, ':user_id' => $user_id, ':module_id' => $module_id];
    query($pdo, $query, $parameters);
}

function updateUser($pdo, $userid, $username, $email): void {
    $query = 'UPDATE user SET name = :name, email =:email WHERE id = :id';
    $parameters = [':name' => $username, ':id' => $userid, ':email'=> $email];
    query($pdo, $query, $parameters);
}


function updateModule($pdo, $moduleid, $text): void {
    $query = 'UPDATE module SET text = :text WHERE id = :id';
    $parameters = [':text' => $text, ':id' => $moduleid];
    query($pdo, $query, $parameters);
}

function deleteQuestion($pdo, $id): void {
    $parameters = [':id' => $id];
    query($pdo, 'DELETE FROM question WHERE id = :id', $parameters);
}

function deleteModule($pdo, $id): void {
    $parameters = [':id' => $id];
    query($pdo, 'DELETE FROM module WHERE id = :id', $parameters);
}

function deleteUser($pdo, $id): void {
    $parameters = [':id' => $id];
    query($pdo, 'DELETE FROM user WHERE id = :id', $parameters);
}


function allUsers($pdo): mixed {
    $users = query($pdo,'SELECT * FROM user');
    return $users->fetchAll();
}

function allModules($pdo): mixed {
    $modules = query($pdo,'SELECT * FROM module');
    return $modules->fetchAll();
}