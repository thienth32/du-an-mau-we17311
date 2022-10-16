<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>
            <a href="<?= ADMIN_URL . 'tai-khoan/index.php?tao-moi'?>">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user['id']?></td>
                <td><?= $user['name']?></td>
                <td><?= $user['email']?></td>
                <td><?= $user['role_name']?></td>
                <td>
                    <a href="">Sửa</a>
                    <a href="">Xóa</a>
                </td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>