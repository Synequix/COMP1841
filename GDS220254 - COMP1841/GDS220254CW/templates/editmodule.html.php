<form action="" method="post">
    <input type="hidden" name="moduleid" value="<?= $module['id'] ?>">
    <label for="text">Edit your module here:</label>
    <textarea name="text" rows="3" cols="40">
    <?= $module['text'] ?>
    </textarea>
    <input type="submit" name="submit" value="Save">
</form>