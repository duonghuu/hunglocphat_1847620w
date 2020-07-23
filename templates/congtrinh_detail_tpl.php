<?php /* <div class="tieude_giua"><div><?=_chitiet?></div></div> */?>
<div class="box_container">
  <div class="wap_pro">
    <?php 
    $thumbphoto = '';
    $thumbhinhcon = '';
    $img_row_detail = _upload_sanpham_l.$row_detail["thumb"];
    ?>
    <div class="zoom_slick">
      <div id="bs-carousel<?= $row_detail["id"] ?>" class="mybs-carousel carousel slide" data-ride="carousel">
        <div class="carousel-slider">
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a data-fancybox="gallery27" data-caption="<?= $row_detail["ten"] ?>" href="
                <?= _upload_sanpham_l.$row_detail["photo"] ?>">
                <img src="<?= $img_row_detail ?>" alt="<?= $row_detail["ten"] ?>"></a>
              </div>
              <?php foreach ($hinhthem as $k_hinh => $v_hinh) { 
                $img_hinhthem = _upload_hinhthem_l.$v_hinh["thumb"];
                ?>
                <div class="carousel-item">
                  <a data-fancybox="gallery27" data-caption="<?= $row_detail["ten"] ?>" href="
                    <?= _upload_hinhthem_l.$v_hinh["photo"] ?>">
                    <img src="<?= $img_hinhthem ?>" alt="<?= $row_detail["ten"] ?>"></a>
                  </div>
                <?php } ?>
              </div>
              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#bs-carousel<?= $row_detail["id"] ?>" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#bs-carousel<?= $row_detail["id"] ?>" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
            <!-- Indicators -->
            <ul class="carousel-indicators scrollstyle-4">
              <li data-target="#bs-carousel<?= $row_detail["id"] ?>" data-slide-to="0" class="active">
                <figure><img src="<?= $img_row_detail ?>" alt="<?= $row_detail["ten"] ?>"></figure>
              </li>
              <?php foreach ($hinhthem as $k_hinh => $v_hinh) { 
                $img_hinhthem = _upload_hinhthem_l.$v_hinh["thumb"];
                ?>
                <li data-target="#bs-carousel<?= $row_detail["id"] ?>" data-slide-to="<?= $k_hinh+1 ?>">
                  <figure><img src="<?= $img_hinhthem ?>" alt="<?= $row_detail["ten"] ?>"></figure>
                </li>
              <?php } ?>
            </ul>
          </div>
   </div><!--.zoom_slick-->
   <div class="product_info">
    <div class="ten li"><?=$row_detail['ten']?></div>
    <?php if($row_detail['masp'] != '') { ?><div class="li"><b><?=_masanpham?>:</b> 
      <?=$row_detail['masp']?></span></div><?php } ?>
    <?php if($row_detail['vitri'] != '') { ?><div class="li"><b>Địa chỉ:</b> 
      <?=$row_detail['vitri']?></span></div><?php } ?>
    <?php if($row_detail['dientich'] != '') { ?><div class="li"><b>Diện tích:</b> 
      <?=$row_detail['dientich']?></span></div><?php } ?>
      <?php if($row_detail['mattien'] != '') { ?><div class="li"><b>Giá:</b> 
        <?=$row_detail['mattien']?></span></div><?php } ?>
<?php if($row_detail['mota2'] != '') { ?><div class="content li"><?=$row_detail['mota2']?></div><?php } ?>
<div class="li"><?php include _template."layout/share.php";?></div>
</div>
</div><!--.wap_pro-->

<!-- Nav tabs -->
<ul class="nav nav-tabs mt-3">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#thongtinchitiet"><strong>
      <?= _thongtinchitiet ?></strong></a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="thongtinchitiet">
      <div class="content p-2"><?=$row_detail['noidung']?></div>
  </div>
</div>
<div class="clear"></div>
</div><!--.box_containe-->
<?php if(count($product)>0) { ?>
  <div class="tieude_giua mt-3"><div><?=$title_other?></div></div>
  <div class="spnoibat-list">
      <?php foreach($product as $k=>$v) { 
        $link = get_url($v,$v["type"]);
        $img = _upload_sanpham_l.$v["thumb"];
        ?>
      <div class="spnoibat-item">
        <article class="spnoibat-item__box">
          <a href="<?= $link ?>" class="spnoibat-item__image">
            <figure class="spnoibat-item__figure">
              <img src="<?= $img ?>" alt="<?= $v["ten"] ?>" class="spnoibat-item__img">
            </figure>
          </a>
          <div class="spnoibat-item__info">
            <h3 class="spnoibat-item__name"><a href="<?= $link ?>"><?= $v["ten"] ?></a></h3>
            <p class="spnoibat-item__text"><i class="fas fa-map-marker-alt"></i><?= _diachi ?>:<span><?= $v["vitri"] ?></span></p>
            <p class="spnoibat-item__text"><i class="fas fa-map-marked-alt"></i><?= _dientich ?>:<span><?= $v["dientich"] ?></span></p>
            <p class="spnoibat-item__text"><i class="fas fa-tag"></i>Giá:<span><?= $v["mattien"] ?></span></p>
            <p class="spnoibat-item__post">Ngày đăng: <?= date('d/m/Y',$v["ngaytao"]) ?></p>
          </div>
        </article>
      </div>
    <?php } ?>
    </div>
  <div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
<?php } ?>

