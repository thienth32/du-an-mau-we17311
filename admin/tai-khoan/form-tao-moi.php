<form action="<?= ADMIN_URL . 'tai-khoan/index.php?luu-tao-moi'?>" method="post">
    <div>
        <label for="">Tên người dùng</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">Email</label>
        <input type="email" name="email">
    </div>
    <div>
        <label for="">Mật khẩu</label>
        <input type="password" name="password">
    </div>
    <div>
        <label for="">Quyền</label>
        <select name="role_id" id="">
            <?php foreach($roles as $role): ?>
                <option value="<?= $role['id']?>"><?= $role['name']?></option>
            <?php endforeach?>
        </select>
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>