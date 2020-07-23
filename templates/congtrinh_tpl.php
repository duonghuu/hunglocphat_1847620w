<?php /* <div class="tieude_giua"><div><?=$title_cat?></div></div> */?>
<div class="box_container">
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
</div>

