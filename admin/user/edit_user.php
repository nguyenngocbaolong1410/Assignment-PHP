<div id="content-wrapper">

    <form method="post">
        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php?act=btn_edit">Cập nhật user</a>
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
                        <input type="number" name="id" value="<?=$_GET['id_user']?>" class="form-control"
                            placeholder="auto number" readonly>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="<?=$user['name']?>" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value='<?=$user['email']?>' readonly>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="pass" class="form-control" value='<?=$user['pass']?>' readonly>
                    </div>
                    <div class="form-group">
                        <label>Authority</label>
                        <input type="number" name="authority" class="form-control" value='<?=$user['authority']?>' min="0" max="1" step="1"> 
                    </div>
                    <div class="form-group">
                        <button type="submit" name="cap_nhat" class="btn btn-dark">Cập nhật</button>
                        <a href="index.php?act=list-user" class="btn btn-dark">Danh sách</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>