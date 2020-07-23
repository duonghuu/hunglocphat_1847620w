<?php  if(!defined('_source')) die("Error");
$id_danhmuc = (int)$_GET["id_danhmuc"];
$id_list = (int)$_GET["id_list"];
$id_city = (int)$_GET["id_city"];
$id_dist = (int)$_GET["id_dist"];
$id_khoanggia = (string)magic_quote(trim(strip_tags($_GET['id_khoanggia'])));
// $id_dientich = (string)magic_quote(trim(strip_tags($_GET['id_dientich'])));

$a_khoanggia = explode('-', $id_khoanggia);
// $a_dientich = explode('-', $id_dientich);

$where = " type='".$type."' and hienthi=1 ";
if($id_khoanggia != "") $where .= " and (dientich between ".$a_khoanggia[0]." and ".$a_khoanggia[1].")";
if($id_danhmuc > 0) $where .= " and id_danhmuc='".$id_danhmuc."'";
if($id_list > 0) $where .= " and id_list='".$id_list."'";
if($id_city > 0) $where .= " and id_city='".$id_city."'";
if($id_dist > 0) $where .= " and id_dist='".$id_dist."'";
$where .= " order by stt asc";

// $dem = get_fetch("SELECT count(id) AS numrows FROM #_product where $where");
// $totalRows = $dem['numrows'];
// $page = $_GET['p'];
// $pageSize = $company['soluong_sp'];
// $offset = 5;
// if ($page == "")$page = 1;
// else $page = $_GET['p'];
// $page--;
// $bg = $pageSize*$page;

// $product = get_result("select *,ten$lang as ten,mota$lang as mota from #_product where $where limit $bg,$pageSize");
// $url_link = getCurrentPageURL();
$product = get_result("select id,ten$lang as ten,thumb,photo,tenkhongdau,diachi,mattien,vitri,type,id_city,id_dist from #_product where $where");
