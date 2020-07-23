<?php
session_start();
$session=session_id();
@define ( '_source' , '../../sources/');
@define ( '_lib' , '../../libraries/');
include_once _lib."config.php";
include_once _lib."constant.php";
require_once _source."lang$lang.php";
include_once _lib."functions.php";
include_once _lib."functions_for.php";
if (version_compare(phpversion(), '7.0.0', '<')) include_once _lib."class.database.php";
else include_once _lib."class.database7.3.php"; 
include_once _lib."functions_user.php";
include_once _lib."functions_giohang.php";
include_once _lib."file_requick.php";
include_once "class_paging_ajax.php";
$page = (int)$_POST["page"];
$id_danhmuc = (int)$_POST["id_danhmuc"];
if(!empty($page))
{
    $paging = new paging_ajax();
    $paging->class_pagination = "pagination";
    $paging->class_active = "active";
    $paging->class_inactive = "inactive";
    $paging->class_go_button = "go_button";
    $paging->class_text_total = "total";
    $paging->class_txt_goto = "txt_go_button";
    $paging->per_page = 6;
    $paging->page = $_POST["page"];
    $paging->text_sql = "select id,ten$lang as ten,thumb,photo,tenkhongdau,diachi,mattien,vitri,type,id_city,id_dist from
    table_product where hienthi=1 and noibat>0 ";
    if($id_danhmuc>0){
        $paging->text_sql .= " and id_danhmuc='".$id_danhmuc."' ";    
    }
    $paging->text_sql .= " order by stt asc";
    $product = $paging->GetResult();
    $message = '';
    $paging->data = "".$message."";
}
$result["spthem"] = "";
$result["morebtn"] = "";
?>
<?php foreach($product as $key=>$value){    
    // $link = get_url($value,'san-pham');
    // $giasp = ($value["giakm"]>0)?$value["giakm"]:$value["gia"];
    // $gia = ($giasp>0)?num_format($giasp).'đ':_lienhe;
    // $s_gia = "";
    // if($value["giakm"]>0) {
    //     $s_gia .= '<span>'.num_format($value["giakm"]).'đ</span>';
    //     $s_gia .= '<del>'.num_format($value["gia"]).'đ</del>';
    // }else{
    //     $s_gia .= '<span>'.$gia.'</span>';
    // }
    // $result["spthem"] .= '<div class="pr-box name "><article><a href="'.$link.'" class="imgsp zoom_hinh">
    // <img class="lazy" data-src="'._upload_sanpham_l.$value["thumb"].'" alt="'.$value["ten"].'">'
    // .$cls_banchay.$giaspgiam.'</a> <div class="info"><h3><a href="'.$link.'">'.
    // $value["ten"].'</a></h3></div></article></div>';
    $result["spthem"] .= showProductAjax($value);
} 
?>
<?php /* <?=$paging->Load(); ?> */?>
<?php 
$result["morebtn"] = $paging->Load();
echo json_encode($result);
 ?>