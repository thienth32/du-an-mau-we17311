<?php
    foreach ($list_categories as $cate):     
?>  
    <?php
        $product_by_id = array_filter($list_products, function($pro) use ($cate){
            return $pro['category_id'] == $cate['id'];
        });
    ?>
    <fieldset>
        <legend><?= $cate['name']?> - <?= $cate['id']?></legend>
        <table>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Category id</th>
                <th>Price</th>
            </thead>
            <tbody>
                <?php foreach($product_by_id as $item):?>
                <tr>
                    <td><?= $item['id']?></td>
                    <td><?= $item['name']?></td>
                    <td><?= $item['category_id']?></td>
                    <td><?= $item['price']?></td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </fieldset>
<?php endforeach ?>

