<?php 
if($source=="index"){
 
  $tinnb = get_result("select id,ten$lang as ten,mota$lang as mota,thumb,photo,tenkhongdau,ngaytao,type from #_news
   where type='tin-tuc' and noibat>0 and hienthi>0 order by stt limit 0,6");
}
  $video=get_result("select id,ten$lang as ten,tenkhongdau,link,thumb,photo
   from #_video where hienthi=1 and type='video' order by stt");
$duan = get_result("select id,ten$lang as ten,mota$lang as mota,thumb,photo,tenkhongdau,ngaytao,type from #_news
 where type='du-an' and noibat>0 and hienthi>0 order by stt");
$kygui = get_result("select id,ten$lang as ten,mota$lang as mota,thumb,photo,tenkhongdau,ngaytao,type from #_news
 where type='ky-gui' and hienthi>0 order by stt");
$hotro = get_result("select id,ten$lang as ten,mota$lang as mota,thumb,photo,tenkhongdau,ngaytao,type,link from #_news
 where type='ho-tro' and hienthi>0 order by stt");

  $dichvu_list = get_result("select id,ten$lang as ten,mota$lang as mota,thumb,photo,tenkhongdau,ngaytao,type from #_news
   where type='dich-vu' and hienthi>0 order by stt");
  $linksanpham = get_result("select id,ten$lang as ten,link from #_news
   where type='link-san-pham' and hienthi>0 order by stt");
  $quangcao = get_result("select ten$lang as ten,mota$lang as mota,photo,thumb,link from #_slider 
    where hienthi=1 and type='quang-cao' order by stt");
  $quangcao2 = get_result("select ten$lang as ten,mota$lang as mota,photo,thumb,link from #_slider 
    where hienthi=1 and type='quang-cao2' order by stt");
$search_city = get_result("select id,ten$lang as ten from #_place_city
 where hienthi>0 order by stt");
$search_huong = get_result("select id,ten$lang as ten from #_news
 where type='id_huong' and hienthi>0 order by stt");
$search_khoanggia = get_result("select id,ten$lang as ten,chucvu,link from #_news
 where type='id_khoanggia' and hienthi>0 order by stt");
$logolang = get_fetch("select photo$lang as photo from #_background where type='logo'");
// $bannerlang = get_fetch("select photo as photo from #_background where type='banner'");
$product_danhmuc = get_result("select id,ten$lang as ten,tenkhongdau,type from #_product_danhmuc
 where type='nha-dat' and hienthi>0 order by stt");
// $ftlogo=get_fetch("select photo from #_about where type='footer' ");
// $bgbnlang = get_fetch("select photo as photo,thumb as thumb from #_background where type='bgbn'");
$tutags = get_result("select id,ten$lang as ten,link from #_news where type='tags'
 and hienthi=1 order by stt asc");
// $hotline = get_result("select id,ten$lang as ten,chucvu,link from #_news where
//  type='hotline' and hienthi=1 order by stt asc");
// $diachi = get_result("select id,ten$lang as ten,ten2$lang as diachi,mota as iframe,chucvu as email,
//  link as dienthoai,photo,thumb from #_news where type='diachi' and hienthi=1 order by stt asc");
$yahoo = get_result("select * from #_yahoo where type='yahoo' and hienthi=1 order by stt asc");
// $lkweb = get_result("select link,ten from #_lkweb where type='lkweb' and hienthi=1 order by stt asc");


