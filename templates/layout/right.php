
<div class="widget">
  <div class="widget__title"><?= _hotrotructuyen ?></div>
  <div class="widget__box hotro">
    <div class="hotro__hotline">
      <img src="images/hotro-call.png" alt="hotline" class="hotro__hotline-img">
      <div class="hotro__hotline-info">
        <p class="hotro__hotline-text">Hotline:</p>
        <span class="hotro__hotline-dienthoai"><?= $company["dienthoai"] ?></span>
      </div>
    </div>
    <div class="hotro-list">
      <?php foreach($yahoo as $k=>$v) { ?>
      <div class="hotro-item">
        <div class="hotro-item__line ">
          <p class="hotro-item__email"><?= $v["email"] ?></p>
        </div>
        <div class="hotro-item__line">
          <a href="//zalo.me/<?=preg_replace('/[^0-9]/','',$v['yahoo']);?>" class="hotro-item__zalo"></a>
          <span class="hotro-item__dienthoai"><?= $v["dienthoai"] ?></span>
          <span class="hotro-item__ten">(<?= $v["ten"] ?>)</span>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<div class="widget">
  <div class="widget__box">
    <div class="quangcao">
      <?php foreach($quangcao2 as $k=>$v) {
        $link = $v["type"]."/".$v["tenkhongdau"]."-".$v["id"].".html";
        $img = _upload_hinhanh_l.$v["thumb"];
       ?>
      <p class="quangcao-item">
        <a class="quangcao-item__url" href="<?= $v["link"] ?>">
          <img src="<?= $img ?>" alt="<?= $v["ten"] ?>" class="quangcao-item__img">
        </a>
      </p>
      <?php } ?>
    </div>
  </div>
</div>