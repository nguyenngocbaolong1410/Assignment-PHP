<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Quản lí loại sản phẩm</a>
            </li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Danh sách loại sản phẩm</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Id Parent</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Id Parent</th>
                                <th><a href="index.php?act=add-catalog" class="btn btn-dark">Nhập
                                        thêm</a></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php 
                            
                                foreach($list_catalog as $catalog){
                                    echo '<tr>
                                        <td>'.$catalog['name'].'</td>
                                        <td>'.$catalog['id_parent'].'</td>
                                        <td>
                                            <a href="index.php?act=btn_edit_catalog&id_catalog='.$catalog['id'].'"
                                                class="btn btn-dark">Sửa</a>
                                            <a href="index.php?act=btn_delete_catalog&id_catalog='.$catalog['id'].'"
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