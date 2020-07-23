<div class="tintuc-noibat lazy" data-bg="url('images/tintuc.jpg')">
  <div class="container">
    <div class="tintuc-noibat__title">
      <a href="tin-tuc.html" class="tintuc-noibat__title-url">Tin tức nổi bật</a>
    </div>
    <div class="tintuc-noibat-list">
      <?php foreach($tinnb as $k=>$v) { 
        $link = get_url($v,$v["type"]);
        $img = _upload_tintuc_l.$v["thumb"];
        ?>
      <div class="tintuc-noibat-item">
        <a href="<?= $link ?>" class="tintuc-noibat-item__url">
          <div class="tintuc-noibat-item__image">
            <figure class="tintuc-noibat-item__figure">
              <img src="<?= $img ?>" alt="<?= $v["ten"] ?>" class="tintuc-noibat-item__img">
            </figure>
          </div>
          <div class="tintuc-noibat-item__info">
            <h5 class="tintuc-noibat-item__name"><?= $v["ten"] ?></h5>
            <p class="tintuc-noibat-item__post"><i class="fas fa-calendar-check"></i><?= date('d/m/Y',$v["ngaytao"]) ?></p>
            <div class="tintuc-noibat-item__desc"><?= $v["mota"] ?></div>
          </div>
        </a>
      </div>
    <?php } ?>
    </div>
  </div>
</div>
<div class="tagseo">
  <div class="container">
    <div class="tagseo__title">
      tag seo : tìm kiếm nhu cầu phù hợp
    </div>
    <div class="tagseo-list">
      <?php foreach($tutags as $k=>$v) { 
        echo '<a href="'.$v["link"].'" target="_blank" class="tagseo-item">'.$v["ten"].'</a>';
      } ?>
    </div>
  </div>
</div>