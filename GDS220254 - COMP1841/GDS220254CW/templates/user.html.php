<p><?=$totalUsers?> Users has been submitted.</p>
<?php
foreach ($users as $user): ?>
    <blockquote>
        <?= htmlspecialchars($user["name"], ENT_QUOTES, "UTF-8") ?>
        (Email: <a href="<?= htmlspecialchars($user["email"], ENT_QUOTES, "UTF-8") ?>"><?= htmlspecialchars($user["email"], ENT_QUOTES, "UTF-8") ?></a>)
        <a href="edituser.php?id=<?=$user['id']?>">Edit</a>
        <form action="deleteuser.php" method="post">
            <input type="hidden" name="id" value="<?=$user['id']?>">
            <input type="submit" value="Delete">
        </form>
    </blockquote>
<?php endforeach ?>