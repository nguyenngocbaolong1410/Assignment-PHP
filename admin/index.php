<?php

    ob_start();
    session_start();

    include '../dao/pdo.php';
    include '../dao/user.php';
    include '../dao/categories.php';
    include '../dao/product.php';
    include '../dao/order.php';
    include '../dao/order_detail.php';

    $message = '';

    // Login
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email == '' || $password == ''){
            $message = 'Your email or password is Empy';
            include '../admin/login.php';
        }
        else{
            $user_login = get_user($email, $password);
            if($user_login['id'] > 0 && $user_login['authority'] == 1){
                $_SESSION['name'] = $user_login['name'];
            }
            else if($user_login['id'] > 0 && $user_login['authority'] == 0){
                $_SESSION['name'] = $user_login['name'];
                header('location:../index.php');
            }
            else{
                $message = 'Your email or password is Wrong';
                include '../admin/login.php';
            }
        }
    }

    // Register
    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $pass2 = $_POST['password2'];
        if($pass == $pass2){
            add_user($name, $email, $pass);
            $message = 'Register Success';
            include '../admin/login.php';
        }
        else{
            $message = 'password and password confluent are not same';
            include '../admin/register.php';
        }
    } 

    // Find the password
    if(isset($_POST['find'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $get_user_by_name = get_user_by_name($email);
        if($name == $get_user_by_name['name'] && $email == $get_user_by_name['email']){
            update_user_pass($email, $pass);
            $message = 'Find the password success';
            include '../admin/login.php';
        }
        else{
            $message = 'Password recovery failed';
            include '../admin/find_password.php';
        }
    }

    if(!isset($_SESSION['name'])){
        include '../admin/login_none.php';
    }
    else{
    // **********************************
    // action
        include '../admin/dashboard/header.php';
        if(isset($_GET['act'])){
            switch ($_GET['act']) {
                // CATALOG
                case 'list-catalog':
                    $list_catalog = categories_select_all();
                    include '../admin/catalog/list_catalog.php';
                    break;
                case 'btn_delete_catalog':
                    if(isset($_GET['id_catalog'])){
                        categories_delete($_GET['id_catalog']);
                        $list_catalog = categories_select_all();
                        $message = "Xóa thành công Loại Sản Phẩm";
                        include '../admin/catalog/list_catalog.php';
                    }
                    break;
                case 'btn_edit_catalog':
                    if(isset($_GET['id_catalog'])){
                        $list_catalog = categories_select_by_id($_GET['id_catalog']);
                        if(isset($_POST['cap_nhat'])){
                            $name = $_POST['name'];
                            $id_parent = $_POST['id_parent'];
                            categories_update($_GET['id_catalog'], $name, $id_parent);
                            $message = "Cập nhật cartalog thành công";
                            $list_catalog = categories_select_by_id($_GET['id_catalog']);
                            include '../admin/catalog/edit_catalog.php';
                            break;
                        }
                        include '../admin/catalog/edit_catalog.php';
                    }
                    break;
                case 'add-catalog':
                    if(isset($_POST['add'])){
                        $name = $_POST['name'];
                        $id_parent = $_POST['id_parent'];
                        if($name == "" || $id_parent == ""){
                            $message = "Your new name catalog or new id_parent is empty !!";
                        }
                        else{
                            categories_insert($name, $id_parent);
                            $message = "Thêm mới catalog thành công";
                        }
                    }
                    include '../admin/catalog/add_catalog.php';
                    break;
                // ******************************** 
                // USER 
                case 'list-user':
                    $list_user = get_all_user();
                    include '../admin/user/list_user.php';
                    break;
                case 'btn_delete_user':
                    if(isset($_GET['id_user'])){
                        delete_user($_GET['id_user']);
                        $list_user = get_all_user();
                        $message = "Xóa thành công User";
                        include '../admin/user/list_user.php';
                    }
                    break;
                case 'btn_edit_user':
                    if(isset($_GET['id_user'])){
                        $user = get_user_by_id($_GET['id_user']);
                        if(isset($_POST['cap_nhat'])){
                            $authority = $_POST['authority'];
                            update_user($_GET['id_user'], $authority);
                            $message = "Cập nhật user thành công";
                            $user = get_user_by_id($_GET['id_user']);
                            include '../admin/user/edit_user.php';
                            break;
                        }
                        include '../admin/user/edit_user.php';
                    }
                    break;
                // ********************************
                // PRODUCT 
                case 'list-product':
                    $list_product = get_all_product();
                    include '../admin/product/list_product.php';
                    break;
                case 'btn_delete_product':
                    if(isset($_GET['id_product'])){
                        delete_product($_GET['id_product']);
                        $list_product = get_all_product();
                        $message = "Xóa thành công Sản Phẩm";
                        include '../admin/product/list_product.php';
                    }
                    break;
                case 'btn_edit_product':
                    if(isset($_GET['id_product'])){
                        $product = product_select_by_id($_GET['id_product']);
                        if(isset($_POST['cap_nhat'])){
                            $info = $_POST['info'];
                            $id_catalog = $_POST['id_catalog'];
                            $id_catalog_parent = $_POST['id_catalog_parent'];
                            $name = $_POST['name'];
                            $images = $_POST['images'];
                            if($images == ""){
                                $images = $_POST['images2'];
                            }
                            $price = $_POST['price'];
                            $buyed = $_POST['buyed'];
                            $content = $_POST['content'];
                            product_update($_GET['id_product'], $id_catalog, $id_catalog_parent, $name, $images, $price, $buyed, $content, $info);
                            $message = "Cập nhật sản phẩm thành công";
                            $product = product_select_by_id($_GET['id_product']);
                            include '../admin/product/edit_product.php';
                            break;
                        }
                        include '../admin/product/edit_product.php';
                    }
                    break;
                case 'add_product':
                    if(isset($_POST['add'])){
                        $info = $_POST['info'];
                        $id_catalog = $_POST['id_catalog'];
                        $id_catalog_parent = $_POST['id_catalog_parent'];
                        $name = $_POST['name'];
                        $images = $_POST['images'];
                        if($images == ""){
                            $images = $_POST['images2'];
                        }
                        $price = $_POST['price'];
                        $buyed = $_POST['buyed'];
                        $content = $_POST['content'];
                        if($info == "" || $id_catalog == "" || $id_catalog_parent == "" || $name == "" || $images == "" || $price == "" || $buyed == "" || $content ==""){
                            $message = "You have not entered a field yet";
                        }
                        else{
                            product_insert($id_catalog, $id_catalog_parent, $name, $images, $price, $buyed, $content, $info);
                            $message = "Thêm mới catalog thành công";
                        }
                    }
                    include '../admin/product/add_product.php';
                    break;
                // ********************************
                // ORDER
                case 'list-don_hang':
                    $list_order = get_all_donhang();
                    include '../admin/order/list_order.php';
                    break;
                case 'btn_delete_order':
                    if(isset($_GET['id_order'])){
                        delete_donhang($_GET['id_order']);
                        $list_order = get_all_donhang();
                        $message = "Xóa thành công Đơn Hàng";
                        include '../admin/order/list_order.php';
                    }
                    break;
                // ********************************
                // ORDER
                case 'list-order_detail':
                    $list_order_detail = get_all_orderDetail();
                    include '../admin/order_detail/list_order_detail.php';
                    break;
                // ********************************
                case 'logout':
                    unset($_SESSION['name']);
                    header('location: /animal_website/index.php');
                    break;
                default:
                    include '../admin/dashboard/home.php';
                    break;
            }
        }
        else{
            include '../admin/dashboard/home.php';
        }
        include '../admin/dashboard/footer.php';
    }
?>