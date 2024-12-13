<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jokes.css">
    <title><?=$title?></title>
</head>
<body>
    <header><h1>Synequix Internet Question Database</h1></header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="question.php">Question list</a></li>
            <!-- <li><a href="admin/question.php">Admin</a></li> -->
            <li><a href="admin/login/login.html">Admin login</a></li>
        </ul>
    </nav>
    <main>
        <?=$output?>
    </main>
    <footer>&copy; SIQDB 2024</footer>
</body>
</html>