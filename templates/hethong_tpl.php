<div class="hethong-flex">
  <?php foreach($diachi as $k=>$v) {
  $img = _upload_tintuc_l.$v["photo"];
   ?>
  <div class="hethong-item">
    <article>
      <figure><img src="<?= $img ?>" alt="<?= $v["ten"] ?>"></figure>
      <section>
        <h5><?= $v["ten"] ?></h5>
        <p><?= _diachi ?>: <?= $v["diachi"] ?></p>
        <!-- <p>Số điện thoại: <?= $v["dienthoai"] ?></p> -->
        <div class="hethong-item__map">
          <?= $v["iframe"] ?>
        </div>
      </section>
    </article>
  </div>
  <?php } ?>
</div>