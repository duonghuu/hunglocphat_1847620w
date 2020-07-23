<?php foreach($product_danhmuc as $kdm=>$vdm) { 
  $link1 = $vdm["type"]."/".$vdm["tenkhongdau"]."-".$vdm["id"];
  $iden = 'sp'.md5($vdm["tenkhongdau"].$vdm["id"]);
  $product = get_result("select id,ten$lang as ten,thumb,photo,tenkhongdau,diachi,mattien,vitri,type,id_city,id_dist from #_product
   where type='nha-dat' and id_danhmuc='".$vdm["id"]."' and noibat>0 and hienthi>0 order by stt");
  ?>
<div class="sanpham-noibat">
  <div class="main-title">
    <h2 class="main-title__name"><a href="<?= $link1 ?>"><?= $vdm["ten"] ?></a></h2>
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