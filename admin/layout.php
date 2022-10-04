<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WE17311 - Trang quản trị</title>
</head>
<body>
    
    <header>
        Header của trang quản trị
        <br>
        <a href="<?= ADMIN_URL . 'tai-khoan/index.php'?>">Quản trị tài khoản</a>
        <br>
        <a href="<?= ADMIN_URL . 'san-pham/index.php'?>">Quản trị Sản phẩm</a>
    </header>
    <main>
        <?php include_once $VIEW_NAME ?>
    </main>
    <footer>
        Chân trang quản trị
    </footer>
</body>
</html>