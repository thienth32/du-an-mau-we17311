<?php
require_once '../global.php';
if(isset($_GET['san-pham'])){

    $VIEW_NAME = 'san-pham.php';
}elseif(isset($_GET['gio-hang'])){

    $VIEW_NAME = 'gio-hang.php';
}else{
    require_once '../dao/category_dao.php';
    require_once '../dao/product_dao.php';
    
    // echo "<pre>";
    // var_dump($list_categories);die;
    // lấy danh sách các danh mục muốn hiển thị ra màn hình
    $list_categories = get_all_categories([5, 4, 2]);
    // lấy danh sách các sản phẩm thuộc danh mục trong danh sách ở trên
    $list_products = get_products_by_cate_ids([5, 4, 2]);
    
    $VIEW_NAME = 'home.php';
}


include_once "./layout.php";

?>