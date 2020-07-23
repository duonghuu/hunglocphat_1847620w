<?php 
$gioithieu = get_result("select id,ten$lang as ten,noidung$lang as noidung,link,tenkhongdau from #_news
 where type='gioi-thieu' and hienthi>0");
 ?>
 <div class="gioithieu-bar">
<!-- Nav pills -->
<ul class="nav nav-pills">
  <?php foreach($gioithieu as $k=>$v) { 
$iden = 'gt'.md5($v["tenkhongdau"].$v["id"]);
    ?>
  <li class="nav-item">
    <a class="nav-link <?= ($k==0)?'active':'' ?>" data-toggle="pill" href="#<?= $iden ?>"><?= $v["ten"] ?></a>
  </li>
  <?php } ?>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <?php foreach($gioithieu as $k=>$v) { 
      $iden = 'gt'.md5($v["tenkhongdau"].$v["id"]);
      ?>
  <div class="tab-pane <?= ($k==0)?'active':'fade' ?>" id="<?= $iden ?>">
    <div class="content">
      <?= $v["noidung"] ?>
    </div>
  </div>
<?php } ?>
</div>
</div>