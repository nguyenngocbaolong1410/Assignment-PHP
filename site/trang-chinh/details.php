<div class="container">
    <h5 style="padding-top:230px; padding-bottom:20px; display: none">Home / <?=$get_cagory['name']?> / <span
            style="font-style:italic;"><?=$get_product['name']?></span></h5>
    <div class="row padding-bottom" style="margin-top: 300px">
        <div class="col-sm-6">
            <img src="content/images/<?=$get_product['images']?>" alt="" width="100%" height="500px">
        </div>
        <div class="col-sm-6">
            <form method="post"
                action="site/trang-chinh/gio-hang/index.php?act=add&id=<?php echo $get_product['id']; ?>">
                <h2 style="color:#211a1a; margin-bottom: 10px"><?=$get_product['name']?></h2>
                <h3 style="color:#019eaa">$<?=$get_product['price']?>.00</h3>
                <input class="btn btn-outline-primary" type="number" name="quantity" id="" max="20" min="1" value="1">
                <input class="btn btn-primary" style="width:70%; margin-left:20px; font-weight: bold; color: #ffffff" type="submit" value="BUY IT"><br>
            </form>
            <button class="btn btn-warning" style="margin-top:20px; width:100%; font-weight: bold; color: #ffffff">ĐẶT MUA NHANH <br> Gọi điện và tư
                vấn
                giao hàng tân nơi</button>
            <div id="accordion">
                <div class="card mo-ta">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapseOne">
                            Mô tả
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                            <?=$get_product['content']?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                            Thông tin bổ sung
                        </a>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <?=$get_product['info']?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                            Địa chỉ mua hàng
                        </a>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                            <div class="col-sm-6" style="float:left">
                                <h5>TP. Hồ Chí Minh</h5>
                                <ul class="address">
                                    <li>Số 116 Ba Tháng Hai, P12, Quận 10</li>
                                    <li>Số 341 Nguyễn Trãi, P7, Quận 5</li>
                                    <li>Số 244 Khánh Hội, P6, Quận 4</li>
                                    <li>Số 312 Quang Trung, P10, Quận Gò Vấp</li>
                                    <li>Số 892 Cách Mạng Tháng 8, P7, Quận Tân Bình</li>
                                    <li>Số 222 Phan Đăng Lưu, P3, Quận Phú Nhuận</li>
                                    <li>Số 180 Hậu Giang, P6, Quận 6</li>
                                    <li>Số 179 Xô Viết Nghệ Tĩnh, P17, Quận Bình Thạnh</li>
                                </ul>
                            </div>
                            <div class="col-sm-6" style="float:left">
                                <h5>TP. Hà Nội</h5>
                                <ul class="address">
                                    <li>Số 3 Đại Cồ Việt, Quận Hai Bà Trưng</li>
                                    <li>Số 83 Nghi Tàm, Quận Tây Hồ</li>
                                    <li>Số 206 Kim Mã, Quận Ba Đình</li>
                                    <li>Số 18 Chả Cá, Quận Hoàn Kiếm</li>
                                    <li>Số 242 Nguyễn Trãi, Quận Thanh Xuân</li>
                                    <li>Số 226 Nguyễn Văn Cừ, Quận Long Biên</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row padding-top2">
        <div class="col-sm-12 border-top">
            <h2 class="text-center font-weight-bold" style="color: #ff5f42; padding-top:20px;">SẢN PHẨM CÙNG LOẠI</h2>
        </div>
    </div>
    <div class="row padding-top2">
        <?php 
        
            foreach ($get_product_same_cagory_parent as $product) {
                echo '<div class="col-sm">
                    <a href="index.php?act=details&id='.$product['id'].'"><img src="content/images/'.$product['images'].'" alt="" width="100%" height="200px"></a>
                    <h6 class="text-center font-weight-bold">'.$product['name'].'</h6>
                    <h5 class="text-center" style="padding-bottom:20px;">$'.$product['price'].'.00</h5>
                    </div>';
            }

        ?>
    </div>
</div>