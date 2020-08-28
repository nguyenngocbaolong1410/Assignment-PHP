<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop mua bán thú cưng</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="content/css/style.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Header -->
    <div class="fixed">
        <div class="row alert background-color-top">
            <div class="col-sm-12">
                <div class="text-center text-white font-weight-bold">FREE SHIPPING - ORDER TODAY</div>
            </div>
        </div>
        <div class="row border-bottom">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-1 text-right padding-top-header1">
                        <a href="index.php?act=home"><img src="content/images/logo-con-meo.png" width="100%"
                                height="70px"></a>
                    </div>
                    <div class="col-sm-11 non-space padding-top-header1">
                        <h2 style="color: #ff5f42;"><a href="index.php?act=home" style="color: #ff5f42; text-decoration: none;">BESTIES</a></h2>
                        <h6 class="text-muted"><a href="index.php?act=home" style="color: #ccc; text-decoration: none;">A Pet's Favorite Place</a></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 text-right">
                <i class='fab fa-facebook-f padding-top-header' style='font-size:24px'></i>
                <i class='fab fa-instagram padding-top-header' style='font-size:24px'></i>
                <i class='fab fa-youtube' style='font-size:24px'></i>
            </div>
            <div class="col-sm-2 background-color-top-right">
                <div class="text-center text-white font-weight-bold">Call Us</div>
                <div class="text-center text-white font-weight-bold"><small>123-456-789</small></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10">
                <!-- MENU -->
                <nav class="navbar">
                    <ul class="nav">
                        <?php
                            foreach($sths as $sth ){
                            if($sth['id'] <= 8){
                                echo ' <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="index.php?act='.$sth['name'].'&id='.$sth['id'].'">'.$sth['name'].'</a>
                                </li>';
                                }
                            }
                        ?>
                    </ul>
                </nav>
                <!-- ------------ -->
            </div>
            <div class="col-sm-2">
                <div class="row">
                    <div class="col-sm-6">
                        <i class='fas fa-user-circle padding-top-menu-right' style='font-size:24px'></i>
                        <?php 
                                session_start();
                                if(isset($_SESSION['name'])){
                                    echo '<span style="color: #ff5f42;">'.$_SESSION['name'].'<a href="../animal_website/admin/index.php?act=logout" style="color:#ff5f42;"><i class="fas fa-sign-out-alt" style="font-size:12px"></i></a></span>';
                                }
                                else{
                                    echo '<a href="#myModal" class="trigger-btn" data-toggle="modal"><span style="color: #ff5f42;">Login</span></a>';
                                }
                            ?>
                        <div id="myModal" class="modal fade">
                            <div class="modal-dialog modal-login">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="avatar">
                                            <img src="content/images/logo-con-meo.png" alt="Avatar" width="100%"
                                                height="100%">
                                        </div>
                                        <h4 class="modal-title">Member Login</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../animal_website/admin/index.php" method="post">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Email login..." required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="Password" required="required">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block login-btn"
                                                    name="submit">Login</button>
                                            </div>
                                            <div class="form-group">
                                                <a href="#myModal2" data-toggle="modal"
                                                    class="btn btn-primary btn-lg btn-block login-btn">Register</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#myModal3" data-toggle="modal">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="myModal2" class="modal fade">
                            <div class="modal-dialog modal-login">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="avatar">
                                            <img src="content/images/logo-con-meo.png" alt="Avatar" width="100%"
                                                height="100%">
                                        </div>
                                        <h4 class="modal-title">Member Register</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../animal_website/admin/index.php" method="post">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Email login..." required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Input name..." required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="Password..." required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="password2"
                                                    placeholder="Password confluent..." required="required">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block login-btn"
                                                    name="register">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="myModal3" class="modal fade">
                            <div class="modal-dialog modal-login">
                                <div class="modal-content" style="height: 420px; width:350px;">
                                    <div class="modal-header">
                                        <div class="avatar">
                                            <img src="content/images/logo-con-meo.png" alt="Avatar" width="100%"
                                                height="100%">
                                        </div>
                                        <h4 class="modal-title">Forgot password</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="../animal_website/admin/index.php" method="post">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Enter your registered name..." required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Enter your registered email..." required="required">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" name="pass"
                                                    placeholder="Enter your new pass..." required="required">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block login-btn"
                                                    name="find">Find the password</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <a href="site/trang-chinh/gio-hang/index.php"><i class='fas fa-cart-plus padding-top-menu-right'
                                style='font-size:24px; color:black;'></i></a>
                        <?php 
                            if(isset($_SESSION['cart_items'])){
                                $total_quantity = 0;
                                foreach($_SESSION['cart_items'] as $item){
                                    $total_quantity += $item['quantity'];
                                }
                                echo '<span class="mark">'.$total_quantity.'</span>';
                            }
                            else{
                                echo '<span class="mark">0</span>';
                            }
                        
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------------------------------------- -->