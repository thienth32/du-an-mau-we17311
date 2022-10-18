<form action="<?= SITE_URL . '?post-login'?>" method="POST">
    <?php if(isset($_GET['msg'])): ?>
        <h3 style="color: red;"><?= $_GET['msg'] ?></h3>
    <?php endif?>
    <div>
        <label for="">Email</label>
        <input type="email" name="email">
    </div>
    <div>
        <label for="">Password</label>
        <input type="password" name="password">
    </div>
    <div>
        <button type="submit">Login</button>
    </div>
</form>