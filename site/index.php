<?php
require_once '../global.php';
require_once '../dao/base_dao.php';
if(isset($_GET['san-pham'])){

    $VIEW_NAME = 'san-pham.php';
}elseif(isset($_GET['chi-tiet'])){
    require_once '../dao/product_dao.php';
    require_once '../dao/product_color_dao.php';
    // lấy thông tin sản phẩm dựa vào id trên đường dẫn
    $product = get_product_by_id($_GET['id']);
    // lấy ra tất cả sản phẩm cùng danh mục với sản phẩm vừa lấy được ở trên
    $r_products = get_products_by_cate_ids([$product['category_id']]);
    // trong danh sách sản phẩm liên quan
    // loại bỏ sản phẩm đang xem
    $relate_products = array_filter($r_products, function($item) use ($product){
        return $item['id'] != $product['id'];
    });

    // lấy danh sách màu cho sản phẩm
    $colors = get_product_colors($product['id']);
    // echo "<pre>";
    // var_dump($relate_products);die;
    $VIEW_NAME = 'chi-tiet.php';
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