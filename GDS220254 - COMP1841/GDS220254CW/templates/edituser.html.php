<form action="" method="post">
    <input type="hidden" name="userid" value="<?= $user['id'] ?>">
    <label for="username">Edit your username here:</label>
    <textarea name="username" rows="3" cols="40">
    <?= $user['name'] ?>
    </textarea>
    <label for="email">Edit your user email here:</label>
    <textarea name="email" rows="3" cols="40">
    <?= $user['email'] ?>
    </textarea>
    <input type="submit" name="submit" value="Save">
</form>