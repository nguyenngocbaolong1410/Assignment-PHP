<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Quản lí đơn hàng chi tiết</a>
            </li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Danh sách đơn hàng chi tiết</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-border_detailed" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id_order</th>
                                <th>Id_product</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Images</th>
                                <th>Quantity</th>
                                <th>Day Order</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id_order</th>
                                <th>Id_product</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Images</th>
                                <th>Quantity</th>
                                <th>Day Order</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php 
                                foreach($list_order_detail as $order_detail){
                                    echo '<tr>
                                        <td>'.$order_detail['id_order'].'</td>
                                        <td>'.$order_detail['id_product'].'</td>       
                                        <td>'.$order_detail['name'].'</td>           
                                        <td>'.$order_detail['price'].'</td>           
                                        <td><img src="../content/images/'.$order_detail['images'].'" alt="" width="20%" height="10%"></td>          
                                        <td>'.$order_detail['quantity'].'</td>           
                                        <td>'.$order_detail['day_order'].'</td>           
                                            </tr>';
                                }

                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

    </div>
    <!-- /.container-fluid -->