<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../jokes.css">
    <title><?=$title?></title>
</head>
<body>
    <header id="admin"><h1>Synequix Internet Question Database Admin</h1></header>
    <nav>
        <ul>
            <li><a href="user.php">User list</a></li>
            <li><a href="module.php">Module list</a></li>
            <li><a href="question.php">Question list</a></li>
            <li><a href="adduser.php">Add a new user</a></li>
            <li><a href="addmodule.php">Add a new module</a></li>
            <li><a href="addquestion.php">Add a new question</a></li>
            <li><a href="login/Logout.php">Public site/Logout</a></li>
        </ul>
    </nav>
    <main>
        <?=$output?>
    </main>
    <footer>&copy; SIQDB 2024</footer>
</body>
</html>