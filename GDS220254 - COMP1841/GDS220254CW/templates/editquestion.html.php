<form action="" method="post">
    <input type="hidden" name="questionid" value="<?= $question['id'] ?>">
    <label for="questiontext">Edit your question here:</label>
    <textarea name="questiontext" rows="3" cols="40">
    <?= $question['text'] ?>
    </textarea>
    <select name="user_id">
        <option value="">Select a user</option>
        <?php
        foreach ($users as $user): ?>
            <option value="<?= htmlspecialchars($user["id"], ENT_QUOTES, "UTF-8") ?>">
                <?= htmlspecialchars($user["name"], ENT_QUOTES, "UTF-8") ?></option>
        <?php endforeach ?>
    </select>
    <select name="module_id">
        <option value="">Select a module</option>
        <?php
        foreach ($modules as $module): ?>
            <option value="<?= htmlspecialchars($module["id"], ENT_QUOTES, "UTF-8") ?>">
                <?= htmlspecialchars($module["text"], ENT_QUOTES, "UTF-8") ?></option>
        <?php endforeach ?>
    </select>
    <input type="submit" name="submit" value="Save">
</form>