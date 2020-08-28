<div class="main">
    <div class="padding-shop_all">
        <div class="row padding-bottom">
            <div class="col-sm-12">
                <?php 
                    echo '<h2 class="text-center font-weight-bold" style="color: #ff5f42;">'.$getNameCategoriesParent['name'].'</h2>'
                ?>
            </div>
            <div class="col-sm-2">
                <div class="display-4 padding-top-shop_all border-bottom"><small>Filter by</small></div>
                <h5 class="txt-shop_all" data-toggle="collapse" data-target="#demo">Collection</h5>
                <div id="demo" class="collapse show padding-top-shop_all border-bottom" style="padding-top:0;">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link"
                                href="index.php?act=<?=$get_cagory['name']?>&id=<?=$get_cagory['id']?>">All</a>
                        </li>
                        <?php 
                                foreach ($getCategoriesByParentIDs as $getCategoriesByParentID) {
                                    echo '<li class="nav-item">
                                        <a class="nav-link" href="index.php?act='.$getCategoriesByParentID['name'].'&id_catalog='.$getCategoriesByParentID['id'].'">'.$getCategoriesByParentID['name'].'</a>
                                        </li>';
                                }
                        ?>
                    </ul>
                </div>
                <h5 class="txt-shop_all" data-toggle="collapse" data-target="#demo2">Price</h5>
                <div id="demo2" class="collapse show padding-top-shop_all border-bottom" style="padding-top:0;">
                    <form>
                        <input type="range" class="custom-range" id="customRange" name="points1" max="150" min="1"
                            value="1">
                        <p>$: <span id="demo3"></span></p>
                    </form>
                    <script>
                    var slider = document.getElementById("customRange");
                    var output = document.getElementById("demo3");
                    output.innerText = slider.value + '.00';
                    slider.oninput = function() {
                        output.innerHTML = this.value + '.00';
                    }
                    </script>
                </div>
            </div>
            <div class="col-sm-10 padding-top-shop_all">
                <div class="row padding-top4">
                    <?php
                        if(isset($_GET['id'])){
                            foreach ($getProductByIdCatalogParent as $product) {
                                echo '<div class="col-sm-3 padding-bottom-shop_all box-product">
                                        <h5 class="box-hover text-center">Quick view</h5>
                                        <a href="index.php?act=details&id='.$product['id'].'"><img src="content/images/'.$product['images'].'" alt="" width="100%" height="100%"></a>
                                        <div class="box-txt-product">
                                            <h6 class="text-center font-weight-bold" style="padding-top:10px;">'.$product['name'].'</h6>
                                            <h6 class="text-center">$'.$product['price'].'.00</h6>
                                        </div>
                                    </div>';
                            }
                        }
                        else{
                            foreach ($getProductByIdCatalog as $product) {
                                echo '<div class="col-sm-3 padding-bottom-shop_all box-product">
                                        <h5 class="box-hover text-center">Quick view</h5>
                                        <a href="index.php?act=details&id='.$product['id'].'"><img src="content/images/'.$product['images'].'" alt="" width="100%" height="100%"></a>
                                        <div class="box-txt-product">
                                            <h6 class="text-center font-weight-bold" style="padding-top:10px;">'.$product['name'].'</h6>
                                            <h6 class="text-center">$'.$product['price'].'.00</h6>
                                        </div>
                                    </div>';
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>