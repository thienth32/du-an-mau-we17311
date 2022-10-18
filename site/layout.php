<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WE17311 - Lập trình website - FPT Poly</title>
    <link rel="stylesheet" href="<?= CONTENT_URL ?>/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= CONTENT_URL ?>/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= SITE_URL ?>">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= SITE_URL ?>?san-pham">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= SITE_URL ?>?gio-hang">Giỏ hàng</a>
                    </li>
                    <?php if(isset($_SESSION['auth'])):?>
                        <li class="nav-item">
                            <label for="">Xin chào, <?= $_SESSION['auth']['name']?></label>
                        </li>
                    <?php endif?>
                    
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <?php include_once $VIEW_NAME ?>
    </div>
    <footer>
        Chân trang ở đây
    </footer>
</body>

</html>