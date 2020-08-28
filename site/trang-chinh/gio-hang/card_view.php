<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gio hang</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="height:auto;">

    <div id="shopping-cart">
        <div class="txt-heading" style="font-weight:bold;">Shopping Cart <span class="text-right"><a
                    href="../../../index.php?act=SHOP ALL">Tiếp tục mua hàng</a></span></div>

        <a id="btnEmpty" href="index.php?act=empty">Empty Cart</a>
    </div>
    <!-- Form -->
    <h3 style="text-align:center;">THÔNG TIN ĐẶT HÀNG</h3>

    <div class="container EditShopping">
    <form method="post" action="index.php?act=order">
            <label for="fname" style="font-weight: bold; color: #11191b">Tên Khách Hàng</label>
            <input type="text" id="name" name="name" placeholder="Your name..">

            <label for="lname" style="font-weight: bold; color: #11191b">Địa chỉ</label>
            <input type="text" id="address" name="address" placeholder="Address..">

            <label for="country" style="font-weight: bold; color: #11191b">Số Điện Thoại</label>
            <input type="number" id="phone" name="phone" placeholder="Phone..">

            <label for="subject" style="font-weight: bold; color: #11191b">Email</label>
            <input type="email" id="email" name="email" placeholder="Email..">

            <input type="submit" value="ĐẶT HÀNG" name="submit">
    </form>
        <h4><?=$message?></h4>
    </div>

    <div id="shopping-cart">
        <?php
            if(isset($_SESSION["cart_items"])){
                $total_quantity = 0;
                $total_price = 0;
        ?>
        <table class="tbl-cart" cellpadding="10" cellspacing="1">
            <tbody>
                <tr>
                    <th style="text-align:left;" width="30%">Name</th>
                    <th style="text-align:left;">Content</th>
                    <th style="text-align:right;" width="10%">Quantity</th>
                    <th style="text-align:right;" width="10%">Price</th>
                    <th style="text-align:center;" width="5%">Remove</th>
                </tr>
                <?php		
                    foreach ($_SESSION["cart_items"] as $item){
                        $item_price = $item["quantity"]*$item["price"];
                ?>
                <tr>
                    <td><img src='../../../content/images/<?=$item["images"]?>'
                            class="cart-item-image" /><?php echo $item["name"]; ?>
                    </td>
                    <td style="text-align:left;"><?php echo $item["content"]; ?></td>
                    <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
                    <td style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
                    <td style="text-align:center;"><a href="index.php?act=remove&id=<?php echo $item["pro_id"]; ?>"
                            class="btnRemoveAction"><img src="../../../content/images/icon-delete.png"
                                alt="Remove Item" /></a></td>
                </tr>
                <?php
                    $total_quantity += $item["quantity"];
                    $total_price += ($item["price"]*$item["quantity"]);
                    }
                ?>

                <tr>
                    <td colspan="2" align="right">Total:</td>
                    <td align="right"><?php echo $total_quantity; ?></td>
                    <td align="right" colspan="1"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong>
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <?php
            } else {
        ?>
        <div class="no-records">Your Cart is Empty <a href="../../../index.php?act=SHOP ALL"
                style="color:red; text-decoration:none; font-weight:bold;">Tiếp tục Shopping -> </a></div>
        <?php 
            }
        ?>
    </div>

    <div id="product-grid">
        <div class="txt-heading" style="font-weight:bold;">Other products</div>
        <?php
	if (!empty($get_five_product)) { 
		foreach($get_five_product as $product){
    ?>
        <div class="product-item" style="height: 350px">
            <form method="post" action="index.php?act=add&id=<?php echo $product['id']; ?>">
                <div class="Edit-img-Product">
                    <div class="product-image"><img src="../../../content/images/<?=$product["images"]?>" width="100%"
                        height="100%"></div>
                </div>
                <div class="product-tile-footer">
                    <div class="product-title" style="width:300px;"><?php echo $product["name"]; ?></div>
                    <div class="product-price"><?php echo "$".$product["price"]; ?></div>
                    <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1"
                            size="2"/><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                </div>
            </form>
        </div>
        <?php
		}
	}
    ?>
    </div>
</body>

</html>