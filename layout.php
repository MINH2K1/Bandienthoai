<?php
 include $level."config.php";
 include $level.DB_path."connect.php";
 include $level.head_path."head.php";
 include $level.search_path."search.php";
 include $level.head_path."topheader.php";
 include $level.logo_path."logo.php";
 include $level.head_path."navigation.php";

 if($isindex==true)
{

   include $level.head_path."slideshow.php";
    include $level.body_path."product.php";
    include $level.body_path."categories.php";
    include $level.body_path."brand.php";
} 
if($issearchcat==true)
{
    include $level.head_path."slideshow.php";
    include $level.body_path."searchcategory.php";
    include $level.body_path."categories.php";
    include $level.body_path."brand.php";
}
if($issearchbrand==true)
{
    include $level.head_path."slideshow.php";
    include $level.body_path."searchbrand.php";
    include $level.body_path."categories.php";
    include $level.body_path."brand.php";
}
if($issearchproduct==true)
{
    include $level.head_path."slideshow.php";
    include $level.body_path."searchproducts.php";
    include $level.body_path."categories.php";
    include $level.body_path."brand.php";
}
if($isabout==true)
{
    include $level.body_path."bodyabout.php"; 
}


if($iscontact==true)
{
    include $level.body_path."bodycontactmap.php";
    include $level.body_path."bodycontactcompanyinfo.php";
    include $level.body_path."bodycontactcontactus.php";
}
if($issingle==true)
{
    include $level.body_path."bodysingletree.php";
    include $level.body_path."bodysingledetailimg.php";
    include $level.body_path."bodysingledetailpro.php";
    include $level.body_path."bodysingleshare.php";
    include $level.body_path."bodysinglemoreinfo.php";
    include $level.body_path."categories.php";
    include $level.body_path."brand.php";


}
if($isstore==true)
{
    include $level.body_path."bodystoretotal.php";
    include $level.body_path."bodystoreproduct.php";
    include $level.body_path."categories.php";
    include $level.body_path."brand.php";
  
}
if($isregister==true)
{
    include $level.head_path."slideshow.php";
    include $level.body_path."bodyregister.php";
}
if($islogin==true)
{
    include $level.head_path."slideshow.php";
    include $level.body_path."bodylogin.php";
}
if($ischangeaccount==true)
{
    include $level.head_path."slideshow.php";
    include $level.body_path."bodychangeaccount.php";
}
if($isgiohang==true)
{
    include $level.head_path."slideshow.php";
    include $level.body_path."bodygh.php";

}
if($ishistory==true)
{
    include $level.head_path."slideshow.php";
    include $level.body_path."bodyghhistory.php";

}
 include $level.footer_path."footer.php";
 ?>