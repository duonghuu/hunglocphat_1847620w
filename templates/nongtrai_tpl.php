<?php 
$nongtrai = get_result("select id,ten$lang as ten,ten2$lang as ten2,mota2$lang as mota2,thumb,photo,tenkhongdau
 from #_news where type='nong-trai' and hienthi>0");
 ?>
 <div class="nongtrai mb-5">
   <?php foreach($nongtrai as $k=>$v) { 
     $img = _upload_tintuc_l.$v["thumb"];
     ?>
     <div class="nongtrai-item"><a href="<?= get_url($v,'nong-trai') ?>">
       <figure><img src="<?= $img ?>" alt="<?= $v["ten"] ?>"></figure>
       <div class="nongtrai-info">
         <div class="nongtrai-info-box">
           <div class="nongtrai-info-box__head">
             <h5><?= $v["ten"] ?></h5>
             <p><?= $v["ten2"] ?></p>
           </div>
           <div class="nongtrai-info-box__body">
             <?= catchuoi($v["mota2"],180) ?>
           </div>
           <div class="nongtrai-info-box__foot">
             <span>Xem chi tiết</span>
           </div>
         </div>
       </div>
     </a></div>
   <?php } ?>
 </div>