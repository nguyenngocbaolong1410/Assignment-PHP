<?php 
    ob_start();

    include 'dao/pdo.php';
    include 'dao/categories.php';
    include 'dao/product.php';
    // include 'admin/login.php';

    $sths = categories_select_all();

    $getTopBuyed = product_select_by_top_buyed();

    include 'site/trang-chinh/header.php';
    if(isset($_GET['act'])){
        switch ($_GET['act']){
            case 'CONTACT':
                include 'site/trang-chinh/contact.php';
                break;
            case 'SHOP ALL':
                if(isset($_GET['id'])){
                    $getNameCategoriesParent = categories_select_by_id($_GET['id']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($_GET['id']);
                    $getProductByIdCatalogParent = product_select_all();
                    $get_cagory = categories_select_by_id(1);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
                else{
                    $getNameCategoriesParent = categories_select_by_id(1);
                    $getCategoriesByParentIDs = categories_select_by_id_parent(1);
                    $getProductByIdCatalog = product_select_all();
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
            case 'DOGS':
                if(isset($_GET['id'])){
                    $getNameCategoriesParent = categories_select_by_id($_GET['id']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($_GET['id']);
                    $getProductByIdCatalogParent = product_select_by_id_catalog_parent($_GET['id']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
                elseif(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog_parent($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent(1);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_cagory = categories_select_by_id(1);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
                else{
                    $getNameCategoriesParent = categories_select_by_name($_GET['act']);
                    $getProductByIdCatalog = product_select_by_id_catalog_parent($getNameCategoriesParent['id']);
                    $get_cagory = categories_select_by_id($getNameCategoriesParent['id']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($getNameCategoriesParent['id']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
            case 'CATS':
                if(isset($_GET['id'])){
                    $getNameCategoriesParent = categories_select_by_id($_GET['id']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($_GET['id']);
                    $getProductByIdCatalogParent = product_select_by_id_catalog_parent($_GET['id']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
                elseif(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog_parent($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent(1);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_cagory = categories_select_by_id(1);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
                else{
                    $getNameCategoriesParent = categories_select_by_name($_GET['act']);
                    $getProductByIdCatalog = product_select_by_id_catalog_parent($getNameCategoriesParent['id']);
                    $get_cagory = categories_select_by_id($getNameCategoriesParent['id']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($getNameCategoriesParent['id']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
            case 'BIRDS':
                if(isset($_GET['id'])){
                    $getNameCategoriesParent = categories_select_by_id($_GET['id']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($_GET['id']);
                    $getProductByIdCatalogParent = product_select_by_id_catalog_parent($_GET['id']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
                elseif(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog_parent($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent(1);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_cagory = categories_select_by_id(1);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
                else{
                    $getNameCategoriesParent = categories_select_by_name($_GET['act']);
                    $getProductByIdCatalog = product_select_by_id_catalog_parent($getNameCategoriesParent['id']);
                    $get_cagory = categories_select_by_id($getNameCategoriesParent['id']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($getNameCategoriesParent['id']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }    
            case 'FISH AND AQUATICS':
                if(isset($_GET['id'])){
                    $getNameCategoriesParent = categories_select_by_id($_GET['id']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($_GET['id']);
                    $getProductByIdCatalogParent = product_select_by_id_catalog_parent($_GET['id']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
                elseif(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog_parent($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent(1);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_cagory = categories_select_by_id(1);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
                else{
                    $getNameCategoriesParent = categories_select_by_name($_GET['act']);
                    $getProductByIdCatalog = product_select_by_id_catalog_parent($getNameCategoriesParent['id']);
                    $get_cagory = categories_select_by_id($getNameCategoriesParent['id']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($getNameCategoriesParent['id']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }    
            case 'SMALL ANIMALS':
                if(isset($_GET['id'])){
                    $getNameCategoriesParent = categories_select_by_id($_GET['id']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($_GET['id']);
                    $getProductByIdCatalogParent = product_select_by_id_catalog_parent($_GET['id']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
                elseif(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog_parent($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent(1);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_cagory = categories_select_by_id(1);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
                else{
                    $getNameCategoriesParent = categories_select_by_name($_GET['act']);
                    $getProductByIdCatalog = product_select_by_id_catalog_parent($getNameCategoriesParent['id']);
                    $get_cagory = categories_select_by_id($getNameCategoriesParent['id']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($getNameCategoriesParent['id']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
            case 'REPTILES':
                if(isset($_GET['id'])){
                    $getNameCategoriesParent = categories_select_by_id($_GET['id']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($_GET['id']);
                    $getProductByIdCatalogParent = product_select_by_id_catalog_parent($_GET['id']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
                elseif(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog_parent($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent(1);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_cagory = categories_select_by_id(1);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
                else{
                    $getNameCategoriesParent = categories_select_by_name($_GET['act']);
                    $getProductByIdCatalog = product_select_by_id_catalog_parent($getNameCategoriesParent['id']);
                    $get_cagory = categories_select_by_id($getNameCategoriesParent['id']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($getNameCategoriesParent['id']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }

                // Con của dog ****************************
            case 'Dog Beds':
                if(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog($_GET['id_catalog']);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_product = product_get_one_select_by_id_catalog($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($get_product['id_catalog_parent']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/show_product_all.php';
                break;
                }
            case 'Dog Collars':
                if(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog($_GET['id_catalog']);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_product = product_get_one_select_by_id_catalog($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($get_product['id_catalog_parent']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/show_product_all.php';
                break;
                }
            case 'Dog Foods':
                if(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog($_GET['id_catalog']);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_product = product_get_one_select_by_id_catalog($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($get_product['id_catalog_parent']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/show_product_all.php';
                break;
                }
            case 'Dog Toys':
                if(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog($_GET['id_catalog']);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_product = product_get_one_select_by_id_catalog($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($get_product['id_catalog_parent']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/show_product_all.php';
                break;
                }

                // *******************************

                // Con của cat

            case 'Cat Litters':
                if(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog($_GET['id_catalog']);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_product = product_get_one_select_by_id_catalog($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($get_product['id_catalog_parent']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
            case 'Cat Poles':
                if(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog($_GET['id_catalog']);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_product = product_get_one_select_by_id_catalog($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($get_product['id_catalog_parent']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
            case 'Cat Toys':
                if(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog($_GET['id_catalog']);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_product = product_get_one_select_by_id_catalog($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($get_product['id_catalog_parent']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
            case 'Cat Tools':
                if(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog($_GET['id_catalog']);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_product = product_get_one_select_by_id_catalog($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($get_product['id_catalog_parent']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }

                // *******************************
                // Con cua bird

            case 'Bird Houses':
                if(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog($_GET['id_catalog']);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_product = product_get_one_select_by_id_catalog($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($get_product['id_catalog_parent']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
            case 'Bird Toys':
                if(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog($_GET['id_catalog']);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_product = product_get_one_select_by_id_catalog($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($get_product['id_catalog_parent']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
            case 'Bird Food':
                if(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog($_GET['id_catalog']);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_product = product_get_one_select_by_id_catalog($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($get_product['id_catalog_parent']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }

                // *******************************
                // Con cua fish

            case 'Fish Aquariums':
                if(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog($_GET['id_catalog']);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_product = product_get_one_select_by_id_catalog($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($get_product['id_catalog_parent']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
            case 'Fish Decoration':
                if(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog($_GET['id_catalog']);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_product = product_get_one_select_by_id_catalog($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($get_product['id_catalog_parent']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
            case 'Fish Cleaning':
                if(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog($_GET['id_catalog']);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_product = product_get_one_select_by_id_catalog($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($get_product['id_catalog_parent']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }

                // *******************************
                // Con cua small animal

            case 'Small Animal Cages':
                if(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog($_GET['id_catalog']);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_product = product_get_one_select_by_id_catalog($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($get_product['id_catalog_parent']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
            case 'Small Animal Equipment':
                if(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog($_GET['id_catalog']);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_product = product_get_one_select_by_id_catalog($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($get_product['id_catalog_parent']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
            case 'Small Animal Toys':
                if(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog($_GET['id_catalog']);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_product = product_get_one_select_by_id_catalog($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($get_product['id_catalog_parent']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }

                // *******************************
                // Con cua reptile

            case 'Reptile Aquariums':
                if(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog($_GET['id_catalog']);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_product = product_get_one_select_by_id_catalog($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($get_product['id_catalog_parent']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
            case 'Reptile Heating':
                if(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog($_GET['id_catalog']);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_product = product_get_one_select_by_id_catalog($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($get_product['id_catalog_parent']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }
            case 'Reptile Decoration':
                if(isset($_GET['id_catalog'])){
                    $getProductByIdCatalog = product_select_by_id_catalog($_GET['id_catalog']);
                    $getNameCategoriesParent = categories_select_by_id($_GET['id_catalog']);
                    $get_product = product_get_one_select_by_id_catalog($_GET['id_catalog']);
                    $getCategoriesByParentIDs = categories_select_by_id_parent($get_product['id_catalog_parent']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/show_product_all.php';
                    break;
                }

                // *******************************
                // Trang Deatils

            case 'details':
                if(isset($_GET['id'])){
                    $get_product = product_select_by_id($_GET['id']);
                    $get_cagory = categories_select_by_id($get_product['id_catalog_parent']);
                    $get_product_same_cagory_parent = product_get_one_select_by_id_catalog_same_kind_and_top_buyed($get_product['id_catalog_parent']);
                    include 'site/trang-chinh/details.php';
                }
                break;

                // *******************************
            default:
                include 'site/trang-chinh/home.php';
                break;
        }
    }
    else{
        include 'site/trang-chinh/home.php';
    }
    include 'site/trang-chinh/footer.php';

?>