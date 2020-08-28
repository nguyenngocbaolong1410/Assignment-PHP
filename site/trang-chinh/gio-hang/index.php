<?php
    include '../../../dao/pdo.php';
    include '../../../dao/categories.php';
    include '../../../dao/product.php';
    include '../../../dao/order.php';
    include '../../../dao/order_detail.php';


    session_start();
    $get_five_product = product_select_five();
    $message = "";
    // include '../../../site/trang-chinh/header.php';
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'add':
                if(isset($_GET['id'])){
                    $pro_id = $_GET['id'];
                    $was_found = false;
                    $i = 0;
                    $get_product = product_select_by_id($_GET['id']);
                    if(!isset($_SESSION['cart_items'])){
                        $_SESSION['cart_items'] = array(0 => array('pro_id' => $pro_id, 'quantity' => $_POST['quantity'], 'name' => $get_product['name'], 'images' => $get_product['images'], 'price' => $get_product['price'], 'content' => $get_product['content']));
                    }
                    else{
                        foreach ($_SESSION['cart_items'] as $item) {
                            $i++;
                            while(list($key, $value) = each($item)){
                                if($key == 'pro_id' && $value == $pro_id){
                                    array_splice($_SESSION['cart_items'], $i-1, 1, array(array('pro_id' => $pro_id, 'quantity' => $_POST['quantity'] + $item['quantity'], 'name' => $get_product['name'], 'images' => $get_product['images'], 'price' => $get_product['price'], 'content' => $get_product['content'])));
                                    $was_found = true;
                                }
                            }
                        }
                        if($was_found==false){
                            array_push($_SESSION['cart_items'],array('pro_id' => $pro_id, 'quantity' => $_POST['quantity'], 'name' => $get_product['name'], 'images' => $get_product['images'], 'price' => $get_product['price'], 'content' => $get_product['content']));
                        }
                    }
                    // $_SESSION['cart_items'] = null;
                    include '../gio-hang/card_view.php';
                }
                break;
            case 'remove':
                if(!empty($_SESSION["cart_items"])) {
                    foreach($_SESSION["cart_items"] as $k => $items) {
                        foreach ($items as $item) {
                            if($_GET["id"] == $item)
                            unset($_SESSION["cart_items"][$k]);				
                            if(empty($_SESSION["cart_items"]))
                            unset($_SESSION["cart_items"]);
                        }
                    }
                }
                include '../gio-hang/card_view.php';
                break;
            case 'empty':
                unset($_SESSION['cart_items']);
                include '../gio-hang/card_view.php';
                break;
            case 'back':
                include '../../../index.php';
                break;
            case 'order':
                if(isset($_POST['submit']) && $_POST['submit']){
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $date = date('Y-m-d H:i:s');
                    if($name == '' || $address == '' || $phone == '' || $email == '' || !isset($_SESSION['cart_items'])){
                        $message = "Bạn đã đặt hàng thất bại";
                    }
                    else {
                        donhang_insert($name, $address, $phone, $email, $date);
                        $dh_id = donhang_getMaxId();
                        foreach($_SESSION['cart_items'] as $item){
                            order_detailInsert($dh_id, $item['pro_id'], $item['name'], $item['price'], $item['images'], $item['quantity'], $date);
                        }
                        $message = "Bạn đã đặt hàng thành công";
                        unset($_SESSION['cart_items']);
                    }
                }
                include '../gio-hang/card_view.php';
                break;
            default :
                include '../gio-hang/card_view.php';
                break;
        }
    }
    else {
        include '../gio-hang/card_view.php';
    }
    // include '../../../site/trang-chinh/footer.php';


?>