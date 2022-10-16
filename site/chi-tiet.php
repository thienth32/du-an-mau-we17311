<h2><?= $product['name']?></h2>
<img src="<?= $product['main_image']?>" width="200">
<p>Gía: <?= $product['price']?></p>
<p>Danh mục: <?= $product['category_name']?></p>
<p>
    Màu sắc: 
    <?php foreach($colors as $color):?>
        <input type="radio" name="color" value="<?= $color['color_id']?>"><?= $color['color_name']?>
    <?php endforeach?>
</p>