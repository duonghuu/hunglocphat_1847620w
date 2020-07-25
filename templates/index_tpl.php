<?php foreach($product_danhmuc as $kdm=>$vdm) { 
  $link1 = $vdm["type"]."/".$vdm["tenkhongdau"]."-".$vdm["id"];
  $product_list = get_result("select id,ten$lang as ten,tenkhongdau,type from #_product_list
   where id_danhmuc='".$vdm["id"]."' and hienthi>0 order by stt");
  $iden = 'sp'.md5($vdm["tenkhongdau"].$vdm["id"]);
  $product = get_result("select id,ten$lang as ten,thumb,photo,tenkhongdau,diachi,mattien,vitri,type,id_city,id_dist from #_product
   where type='nha-dat' and id_danhmuc='".$vdm["id"]."' and noibat>0 and hienthi>0 order by stt");
  ?>
<div class="sanpham-noibat">
  <div class="main-title">
    <h2 class="main-title__name">
      <a class="main-title__name-url" href="<?= $link1 ?>"><?= $vdm["ten"] ?></a>
    </h2>
    <ul class="main-subtitle">
      <?php foreach($product_list as $kli=>$vli) {
        $link2 = $vli["type"]."/".$vli["tenkhongdau"]."-".$vli["id"]."/";
       ?>
      <li class="main-subtitle-item">
        <a class="main-subtitle-item__url" href="<?= $link2 ?>"><?= $vli["ten"] ?></a></li>
      <?php } ?>
    </ul>
  </div>
  <div id="<?= $iden ?>" data-rel="<?= $vdm["id"] ?>">
  <div class="product-grid">
    <?php 
    // foreach($product as $k=>$v) {
    //   showProduct($v);
    // }
     ?>
  </div>
  </div>
</div>
<?php } ?>