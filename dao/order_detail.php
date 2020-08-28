<?php 

    function order_detailInsert($id_order, $id_product, $name, $price, $images, $quantity, $day_order){
        $sql = 'INSERT INTO order_detail(id_order, id_product, name, price, images, quantity, day_order) values(?,?,?,?,?,?,?)';
        pdo_execute($sql, $id_order, $id_product, $name, $price, $images, $quantity, $day_order);
    }

    function get_all_orderDetail(){
        $sql = 'SELECT * FROM order_detail ORDER BY id_order DESC';
        return pdo_query($sql);
    }

?>