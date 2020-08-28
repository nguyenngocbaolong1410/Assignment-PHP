<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Quản lí đơn hàng</a>
            </li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Danh sách đơn hàng</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id Order</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Day Order</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id Order</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Day Order</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php 
                                foreach($list_order as $order){
                                    echo '<tr>
                                        <td>'.$order['id'].'</td>
                                        <td>'.$order['name'].'</td>
                                        <td>'.$order['address'].'</td>       
                                        <td>'.$order['phone'].'</td>           
                                        <td>'.$order['email'].'</td>           
                                        <td>'.$order['day_order'].'</td>
                                        <td>
                                            <a href="index.php?act=btn_delete_order&id_order='.$order['id'].'"
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