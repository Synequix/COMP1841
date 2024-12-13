<p><?=$totalModules?> Modules has been submitted.</p>
<?php
foreach ($modules as $module): ?>
    <blockquote>
        <?= htmlspecialchars($module["text"], ENT_QUOTES, "UTF-8") ?>
        <a href="editmodule.php?id=<?=$module['id']?>">Edit</a>
        <form action="deletemodule.php" method="post">
            <input type="hidden" name="id" value="<?=$module['id']?>">
            <input type="submit" value="Delete">
        </form>
    </blockquote>
<?php endforeach ?>