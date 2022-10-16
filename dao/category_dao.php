<?php

function get_all_categories($list_ids = []){
    $sqlQuery = "select * from categories";
    // $list_ids = [5, 4]
    if(count($list_ids) > 0){
        // select * from categories where id in (5, 4)
        $sqlQuery .= " where id in (" . implode(', ', $list_ids) . ")";
    }
    return pdo_query($sqlQuery);
}

?>