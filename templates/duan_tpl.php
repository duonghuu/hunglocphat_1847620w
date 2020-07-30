<?php 
if($id_danhmuc!='')
    {
        $title_bar = get_fetch("select id,ten$lang as ten,tenkhongdau,type,title,keywords,description,h1,h2,h3,mota,noidung FROM #_news_danhmuc where id=".$id_danhmuc." limit 0,1");
        if(empty($title_bar)){redirect($config_url_ssl.'/404.php');}

        $title_cat = $title_bar['ten']; $mota = $title_bar['mota']; $noidung = $title_bar['noidung'];
        $title = $title_bar['title'];$keywords = $title_bar['keywords'];$description = $title_bar['description'];
        $h1 = $title_bar['h1'];$h2 = $title_bar['h2'];$h3 = $title_bar['h3'];

        $where = " type='".$title_bar['type']."' and id_danhmuc=".$title_bar['id']." and hienthi=1 order by stt,id desc";
    }
    //Tất cả tin tức
    else{
        $where = " type='".$type."' and hienthi=1 order by stt,id desc";
        $title_bar = get_fetch("select * FROM #_title where type='".$type."'");
        $title = $title_bar['title'];$keywords = $title_bar['keywords'];$description = $title_bar['description'];

        #Thông tin share facebook
        if(!empty($title_bar['photo'])) $images_facebook = $config_url_ssl.'/thumb/200x200/2/'._upload_hinhanh_l.$title_bar['photo'];
        $title_facebook = $title_bar['title'];
        $description_facebook = trim(strip_tags($title_bar['description']));
        $url_facebook = getCurrentPageURL();
    }
#Lấy tin tức và phân trang
$dem = get_fetch("SELECT count(id) AS numrows FROM #_news_list where $where");

$totalRows = $dem['numrows'];
$page = $_GET['p'];
if($id_list > 0){
    if($type=='du-an' or $type=='cong-trinh' or $type=='thu-vien' or $type=='album' or $type=='hinh-anh')
        $pageSize = $company['soluong_spk'];//Số item cho 1 trang
    else
        $pageSize = $company['soluong_tink'];//Số item cho 1 trang
}
else{
        if($type=='du-an' or $type=='cong-trinh' or $type=='thu-vien' or $type=='album' or $type=='hinh-anh')
            $pageSize = $company['soluong_sp'];//Số item cho 1 trang
        else
            $pageSize = $company['soluong_tin'];//Số item cho 1 trang
}
$offset = 5;//Số trang hiển thị
if ($page == "")$page = 1;
else $page = $_GET['p'];
$page--;
$bg = $pageSize*$page;

$tintuc = get_result("select id,ten$lang as ten,tenkhongdau,type,thumb,photo,
    mota$lang as mota,ngaytao FROM #_news_list where $where limit $bg,$pageSize");
$url_link = getCurrentPageURL();
 ?>
<div class="box_container">
    <div class="news-tpl-grid">
        <?php foreach($tintuc as $k => $v) { 
            $img = _upload_tintuc_l.$v['photo'];
            $com_var = ($com != "tim-kiem") ? $com : $type;
            ?>
            <div class="news-tpl-item">

                <a href="<?=get_url($v, $com_var,2)?>">
                    <div class="image">
                        <figure class="zoom_hinh"><img src="<?= $img ?>" onerror="this.src='1x1.png';" alt="<?=$v['ten']?>" ></figure>
                    </div>
                    <div class="info">
                        <h5><?=$v['ten']?></h5>
                        <div class="desc line-clamp"><?= $v['mota'] ?></div>    
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
<div class="clear"></div>
<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div><!---END .box_container-->