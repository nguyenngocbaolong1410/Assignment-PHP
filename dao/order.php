<?php

    function donhang_insert($name, $address, $phone, $email, $date){
        $sql = 'insert into donhang(name,address,phone,email,day_order) values(?,?,?,?,?)';
        pdo_execute($sql, $name, $address, $phone, $email, $date);
    }

    function donhang_getMaxId(){
        $sql = 'SELECT max( id ) FROM donhang';
        return pdo_query_value($sql);
    }

    function get_all_donhang(){
        $sql = 'SELECT * FROM donhang ORDER BY id DESC';
        return pdo_query($sql);
    }

    function delete_donhang($id_order){
        $sql = "DELETE FROM donhang WHERE id=".$id_order;
        pdo_execute($sql, $id_order);
    }
?>