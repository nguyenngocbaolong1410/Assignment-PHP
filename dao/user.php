<?php 

    function get_user($email, $password){
        $sql = 'SELECT * FROM user WHERE email=? AND pass=?';
        return pdo_query_one($sql, $email, $password);
    }

    function get_all_user(){
        $sql = 'SELECT * FROM user ORDER BY id DESC';
        return pdo_query($sql);
    }

    function delete_user($id_user){
        $sql = 'DELETE FROM user WHERE id='.$id_user;
        pdo_execute($sql, $id_user);
    }

    function update_user($id, $authority){
        $sql = 'UPDATE user SET authority=? WHERE id=?';
        pdo_execute($sql, $authority, $id);
    }

    function get_user_by_id($id){
        $sql = "SELECT * FROM user WHERE id=$id";
        return pdo_query_one($sql, $id);
    }

    function add_user($name, $email, $pass){
        $sql = 'INSERT INTO user(name, email, pass, authority) VALUE(?,?,?,0)';
        pdo_execute($sql, $name, $email, $pass);
    }

    function update_user_pass($email, $pass){
        $sql = 'UPDATE user SET pass=? WHERE email=?';
        pdo_execute($sql, $pass, $email);
    }

    function get_user_by_name($email){
        $sql = "SELECT * FROM user WHERE email=?";
        return pdo_query_one($sql, $email);
    }
?>