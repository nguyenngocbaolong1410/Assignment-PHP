<?php

    function product_select_all(){
        $sql = 'select * from product order by rand() limit 16';
        return pdo_query($sql);
    }

    function product_select_five(){
        $sql = 'select * from product order by rand() limit 4';
        return pdo_query($sql);
    }

    function product_select_by_id($id){
        $sql = 'select * from product where id ='.$id;
        return pdo_query_one($sql);
    }

    function product_select_by_id_catalog($id_catalog){
        $sql = 'select * from product where id_catalog ='.$id_catalog;
        return pdo_query($sql);
    }

    function product_get_one_select_by_id_catalog($id_catalog){
        $sql = 'select * from product where id_catalog ='.$id_catalog;
        return pdo_query_one($sql);
    }

    function product_get_one_select_by_id_catalog_same_kind_and_top_buyed($id_catalog_parent){
        $sql = 'select * from product where id_catalog_parent ='.$id_catalog_parent.' order by price desc limit 5';
        return pdo_query($sql);
    }

    function product_select_by_id_catalog_parent($id_catalog_parent){
        $sql = 'select * from product where id_catalog_parent ='.$id_catalog_parent;
        return pdo_query($sql);
    }

    function product_select_by_top_buyed(){
        $sql = 'select * from product order by buyed desc limit 5';
        return pdo_query($sql);
    }

    function get_all_product(){
        $sql = 'SELECT * FROM product ORDER BY id DESC';
        return pdo_query($sql);
    }

    function delete_product($id_product){
        $sql = 'DELETE FROM product WHERE id='.$id_product;
        pdo_execute($sql, $id_product);
    }

    function product_update($id, $id_catalog, $id_catalog_parent, $name, $images, $price, $buyed, $content, $info){
        $sql = 'UPDATE product SET id_catalog=?, id_catalog_parent=?, name=?, images=?, price=?, buyed=?, content=?, info=? WHERE id=?';
        pdo_execute($sql, $id_catalog, $id_catalog_parent, $name, $images, $price, $buyed, $content, $info, $id);
    }

    function product_insert($id_catalog, $id_catalog_parent, $name, $images, $price, $buyed, $content, $info){
        $sql = 'INSERT INTO product(id_catalog, id_catalog_parent, name, images, price, buyed, content, info) VALUE(?,?,?,?,?,?,?,?)';
        pdo_execute($sql, $id_catalog, $id_catalog_parent, $name, $images, $price, $buyed, $content, $info);
    }

?>