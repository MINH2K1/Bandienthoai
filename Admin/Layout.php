<?php
    include($level."config.php");
    include($level.DB_path."connect.php");
    if($IsLogin == true){
        include($level.Head_path."HeadLogin.php");
        include($level.Content_path."bodyLogin.php");
    }
    if($Isindex_admin == true){
        include($level.Head_path."HeadAdmin.php");
        include($level.Content_path."SlideBar.php");
        include($level.Footer_path."footer-admin.php");
        include($level.Script_path."JavaScripts-Admin.php");
    }
    if($Isproduct_admin == true){
        include($level.Head_path."Headform.php");
        include($level.Content_path."Bar.php");
        include($level.Content_path."Form-products.php");
        include($level.Script_path."JavaScripts-Admin.php");
    }

    if($IsSearchProduct == true){
        include($level.Head_path."Headform.php");
        include($level.Content_path."Bar.php");
        include($level.Content_path."Form-search-products.php");
        include($level.Script_path."JavaScripts-Admin.php");
    }
    if($IsSearchcart0 == true){
        include($level.Head_path."Headform.php");
        include($level.Content_path."Bar.php");
        include($level.Content_path."Form-search-cart0.php");
        include($level.Script_path."JavaScripts-Admin.php");
    }
    if($IsSearchcart1 == true){
        include($level.Head_path."Headform.php");
        include($level.Content_path."Bar.php");
        include($level.Content_path."Form-search-cart1.php");
        include($level.Script_path."JavaScripts-Admin.php");
    }
    if($IsSearchcart2 == true){
        include($level.Head_path."Headform.php");
        include($level.Content_path."Bar.php");
        include($level.Content_path."Form-search-cart2.php");
        include($level.Script_path."JavaScripts-Admin.php");
    }
    if($IsSearchcart3 == true){
        include($level.Head_path."Headform.php");
        include($level.Content_path."Bar.php");
        include($level.Content_path."Form-search-cart3.php");
        include($level.Script_path."JavaScripts-Admin.php");
    }
    if($IsCategory == true){
        include($level.Head_path."HeadForm.php");
        include($level.Content_path."Bar.php");
        include($level.Content_path."Form-category.php");
        include($level.Script_path."JavaScripts-Admin.php");
    }
    if($IsBrand == true){
        include($level.Head_path."HeadForm.php");
        include($level.Content_path."Bar.php");
        include($level.Content_path."Form-Brand.php");
        include($level.Script_path."JavaScripts-Admin.php");
    }
    if($IsProviders == true){
        include($level.Head_path."HeadForm.php");
        include($level.Content_path."Bar.php");
        include($level.Content_path."Form-Providers.php");
        include($level.Script_path."JavaScripts-Admin.php");
    }
    if($IsCart == true){
        include($level.Head_path."HeadForm.php");
        include($level.Content_path."Bar.php");
        include($level.Content_path."Form-cart.php");
        include($level.Script_path."JavaScripts-Admin.php");
    }
    if($IsCus == true){
        include($level.Head_path."HeadForm.php");
        include($level.Content_path."Bar.php");
        include($level.Content_path."Form-customers.php");
        include($level.Script_path."JavaScripts-Admin.php");
    }
    if($IsNews == true){
        include($level.Head_path."HeadForm.php");
        include($level.Content_path."Bar.php");
        include($level.Content_path."Form-news.php");
        include($level.Script_path."JavaScripts-Admin.php");
    }
    if($IsDate == true){
        include($level.Head_path."HeadForm.php");
        include($level.Content_path."Bar.php");
        include($level.Content_path."Form-search-date.php");
        include($level.Script_path."JavaScripts-Admin.php");
    }
?>