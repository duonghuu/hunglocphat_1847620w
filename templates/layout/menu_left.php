<div class="box-menu-slider">
<ul class="menu-left scrollstyle-4" style="overflow-y: scroll">
  <?php foreach($product_danhmuc as $kdm => $vdm){
    $dmsp1 = get_result("select ten$lang as ten,tenkhongdau,id,type from #_product_list where type='san-pham' and
     id_danhmuc='".$vdm["id"]."' and hienthi>0 order by stt asc");
  ?>
  <li class="hoverhori"><a href="san-pham/<?= $vdm["tenkhongdau"] ?>-<?= $vdm["id"] ?>">
    <?= $vdm["ten"] ?></a>
    <?php 
    if(!empty($dmsp1)){ echo '<ul>';
    foreach($dmsp1 as $k => $v){ ?>
      <li><a href="san-pham/<?= $v["tenkhongdau"] ?>-<?= $v["id"] ?>/"><?= $v["ten"] ?></a></li>
    <?php } echo '</ul>'; } ?>
  </li>
  <?php } ?>
</ul>
</div>