<div id="content-wrapper">

    <form method="post">
        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php?act=btn_edit">Cập nhật product</a>
                </li>
            </ol>
            <?php
                        if(strlen($message)){
                            echo '<h5 class="alert alert-warning">'.$message.'</h5>';
                        }
                    ?>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Id</label>
                        <input type="number" name="id" value="<?=$_GET['id_product']?>" class="form-control"
                            placeholder="auto number" readonly>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="<?=$product['name']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Buyed</label>
                        <input type="number" name="buyed" value="<?=$product['buyed']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="cap_nhat" class="btn btn-dark">Cập nhật</button>
                        <a href="index.php?act=list-product" class="btn btn-dark">Danh sách</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Id_catalog</label>
                        <input type="number" name="id_catalog" value="<?=$product['id_catalog']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="images" class="form-control">
                        <input type="text" name="images2" value="<?=$product['images']?>" class="form-control" hidden>
                        <img src="../content/images/<?=$product['images']?>" alt="" height="50px" width="100px">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" class="form-control" cols="10" rows="5">
                            <?=$product['content']?>
                        </textarea>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Id_catalog_parent</label>
                        <input type="number" name="id_catalog_parent" value="<?=$product['id_catalog_parent']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" name="price" value="<?=$product['price']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Info</label>
                        <textarea name="info" class="form-control" cols="10" rows="5">
                            <?=$product['info']?>
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
</div>
</form>
</div>