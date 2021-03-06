<div id="content-wrapper">

    <form method="post">
        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php?act=btn_edit">Cập nhật catalog</a>
                </li>
            </ol>
            <?php
                        if(strlen($message)){
                            echo '<h5 class="alert alert-warning">'.$message.'</h5>';
                        }
                    ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Id</label>
                        <input type="number" name="id" value="<?=$_GET['id_catalog']?>" class="form-control"
                            placeholder="auto number" readonly>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="<?=$list_catalog['name']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Id_parent</label>
                        <input type="number" name="id_parent" class="form-control" value='<?=$list_catalog['id_parent']?>'>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="cap_nhat" class="btn btn-dark">Cập nhật</button>
                        <a href="index.php?act=list-catalog" class="btn btn-dark">Danh sách</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>