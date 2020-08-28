<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Quản lí sản phẩm</a>
            </li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Danh sách sản phẩm</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Id Catalog</th>
                                <th>Id Catalog Parent</th>
                                <th>Images</th>
                                <th>Price</th>
                                <th>Buyed</th>
                                <th>Content</th>
                                <th>Info</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Id Catalog</th>
                                <th>Id Catalog Parent</th>
                                <th>Images</th>
                                <th>Price</th>
                                <th>Buyed</th>
                                <th>Content</th>
                                <th>Info</th>
                                <th><a href="index.php?act=add_product" class="btn btn-dark">Nhập
                                        thêm</a></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php 
                            
                                foreach($list_product as $product){
                                    echo '<tr>
                                        <td>'.$product['name'].'</td>
                                        <td>'.$product['id_catalog'].'</td>       
                                        <td>'.$product['id_catalog_parent'].'</td>       
                                        <td><img src="../content/images/'.$product['images'].'" alt="" width="100%"></td>       
                                        <td>'.$product['price'].'</td>       
                                        <td>'.$product['buyed'].'</td>       
                                        <td>'.$product['content'].'</td>       
                                        <td>'.$product['info'].'</td>
                                        <td>
                                            <a href="index.php?act=btn_edit_product&id_product='.$product['id'].'"
                                                class="btn btn-dark">Sửa</a>
                                            <a href="index.php?act=btn_delete_product&id_product='.$product['id'].'"
                                                class="btn btn-dark">Xóa</a>
                                        </td>       
                                            </tr>';
                                }

                            ?>

                        </tbody>
                    </table>
                </div>
                <h4 class="text-danger"><?=$message?></h4>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

    </div>
    <!-- /.container-fluid -->