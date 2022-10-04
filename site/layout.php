<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WE17311 - Lập trình website - FPT Poly</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="/we17311/site/index.php">Trang chủ</a>
                </li>
                <li>
                    <a href="/we17311/site/index.php?san-pham">Danh sách sản phẩm</a>
                </li>
                <li>
                    <a href="/we17311/site/index.php?gio-hang">Giỏ hàng</a>
                </li>
            </ul>
        </nav>
    </header>    
    <main>
        <?php include_once $VIEW_NAME ?>
    </main>
    <footer>
        Chân trang ở đây
    </footer>
</body>
</html>