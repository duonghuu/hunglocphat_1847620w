<?php 
if($id_list>0){
  $tintuc = get_result("select id,ten$lang as ten,tenkhongdau,type,noidung$lang as noidung
   FROM #_news where id_list='".$id_list."'");
}
 ?>
 <div class="d-flex justify-content-between duan-detail flex-wrap">
   
 
<!-- Nav pills -->
<ul class="nav nav-pills flex-column col-md-3">
  <?php foreach($tintuc as $k=>$v) {
$iden = 'da'.md5($v["tenkhongdau"].$v["id"]);
   ?>
  <li class="nav-item">
    <a class="nav-link <?= ($k==0)?'active':'' ?>" data-toggle="pill" href="#<?= $iden ?>"><?= $v["ten"] ?></a>
  </li>
<?php } ?>
</ul>

<!-- Tab panes -->
<div class="tab-content col-md-9">
  <h1 class="text-center"><?= $title_bar["ten"] ?></h1>
    <?php foreach($tintuc as $k=>$v) {
  $iden = 'da'.md5($v["tenkhongdau"].$v["id"]);
     ?>
  <div class="tab-pane <?= ($k==0)?'active':'fade' ?>" id="<?= $iden ?>">
    <?= $v["noidung"] ?>
  </div>
  <?php } ?>
</div>
</div>
