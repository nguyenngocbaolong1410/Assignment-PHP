<!-- Body -->
<div class="main">
    <div class="row">
        <div class="col-sm-12 non-space">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="content/images/cho-meo.jpg" alt="Los Angeles" width="100%" style="margin-top: -350px">
                        <div class="carousel-caption">
                            <div class="box-carousel">
                                <div class="display-4 font-weight-bold">Welcome to Our Pet Supply Shop</div>
                                <div class="box-small-carousel text-center text-white"><a href="index.php?act=SHOP ALL">Start Shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="content/images/meo.jpg" alt="Chicago" width="100%">
                        <div class="carousel-caption">
                            <div class="box-carousel">
                                <div class="display-4 font-weight-bold text-left" style="margin-left: .5em;">
                                    Play,<br>Stretch,<br>Sleep,<br>Repeat</div>
                                <div class="box-small-carousel text-center text-white"><a href="index.php?act=CATS">Shop Cat Toys</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="content/images/chim.jpg" alt="New York" width="100%" style="margin-top: -180px">
                        <div class="carousel-caption">
                            <div class="box-carousel">
                                <div class="display-4 font-weight-bold text-left" style="margin-left: .5em;">
                                    Hear the Birds Chirping</div>
                                <div class="font-weight-bold text-left" style="margin: 1.7em;">
                                    30% on our birds products</div>
                                <div class="box-small-carousel text-center text-white"><a href="index.php?act=BIRDS">Shop Bird Foods</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="row padding-top">
        <div class="col-sm-3 box-col3">
            <img src="content/images/gold.jpg" alt="" width="100%" height="100%">
            <div class="h1 text-left text-white font-weight-bold txt-col3">DEAL <br> OF THE <br> WEEK</div>
            <div class="line"></div>
            <div class="h4 text-left text-white txt2-col3">50% OFF <br>
                <small class="font-weight-bold">on dog treats</small> </div>
            <a href="index.php?act=SHOP ALL">
                <div class="box-small-carousel text-center text-white shop-now">Shop Now
                </div>
            </a>
        </div>
        <div class="col-sm-5 box-col5">
            <img src="content/images/dog.jpg" alt="" width="100%" height="100%">
            <div class="h1 text-left text-white font-weight-bold txt-col5">Dogs</div>
            <a href="index.php?act=DOGS">
                <div class="box-small-carousel text-center text-white shop-now">Shop Now
                </div>
            </a>
        </div>
        <div class="col-sm-4 box-col4">
            <img src="content/images/cat.jpg" alt="" width="100%" height="100%">
            <div class="h1 text-left text-white font-weight-bold txt-col5">Cats</div>
            <a href="index.php?act=CATS">
                <div class="box-small-carousel text-center text-white shop-now">Shop Now
                </div>
            </a>
        </div>
    </div>

    <div class="row padding-top">
        <div class="col-sm-4 box-col4">
            <img src="content/images/bird.jpg" alt="" width="100%" height="100%">
            <div class="h1 text-left text-white font-weight-bold txt-col5">Birds</div>
            <a href="index.php?act=BIRDS">
                <div class="box-small-carousel text-center text-white shop-now">Shop Now
                </div>
            </a>
        </div>
        <div class="col-sm-8 box-col8">
            <img src="content/images/fish.jpg" alt="" width="100%" height="100%">
            <div class="h1 text-left text-white font-weight-bold txt-col5">Fish</div>
            <a href="index.php?act=FISH AND AQUATICS">
                <div class="box-small-carousel text-center text-white shop-now">Shop Now
                </div>
            </a>
        </div>
    </div>
    <div class="row padding-top">
        <div class="col-sm-8 box-col8">
            <img src="content/images/hamster.jpg" alt="" width="100%" height="100%">
            <div class="h1 text-left text-white font-weight-bold txt-col5">Small Animals</div>
            <a href="index.php?act=SMALL ANIMALS">
                <div class="box-small-carousel text-center text-white shop-now">Shop Now
                </div>
            </a>
        </div>
        <div class="col-sm-4 box-col4">
            <img src="content/images/reptile.jpg" alt="" width="100%" height="100%">
            <div class="h1 text-left text-white font-weight-bold txt-col5">Reptiles</div>
            <a href="index.php?act=REPTILES">
                <div class="box-small-carousel text-center text-white shop-now">Shop Now
                </div>
            </a>
        </div>
    </div>
    <div class="row padding-top2">
        <div class="col-sm-12 border-top">
            <h2 class="text-center font-weight-bold" style="color: #ff5f42;">Our's Pet Choice</h2>
        </div>
    </div>
    <div class="row padding-top2">
        <?php 
        
            foreach ($getTopBuyed as $product) {
                echo '<div class="col-sm">
                    <img src="content/images/'.$product['images'].'" alt="" width="100%" height="200px">
                    <h4 class="text-center font-weight-bold">'.$product['name'].'</h4>
                    <h5 class="text-center">$'.$product['price'].'.00</h5>
                    </div>';
            }

        ?>
    </div>
    <div class="row padding-top2">
        <div class="col-sm-12 text-center shop-all font-weight-bold"><a href="index.php?act=SHOP ALL">Shop All</a></div>
    </div>
    <div class="row padding-top2">
        <div class="col-sm-12 box-col12">
            <h2 class="text-center font-weight-bold padding-top" style="color: #ff5f42;">Best Brands at Lowest Prices
            </h2>
            <div class="row padding-top2">
                <div class="col-sm">
                    <img src="content/images/hang1.png" alt="" width="200" height="150">
                </div>
                <div class="col-sm">
                    <img src="content/images/hang2.jpg" alt="" width="200" height="100">
                </div>
                <div class="col-sm">
                    <img src="content/images/hang3.png" alt="" width="200" height="100">
                </div>
                <div class="col-sm">
                    <img src="content/images/hang4.png" alt="" width="200" height="100">
                </div>
                <div class="col-sm">
                    <img src="content/images/hang5.png" alt="" width="250" height="100">
                </div>
            </div>
        </div>
    </div>
</div>