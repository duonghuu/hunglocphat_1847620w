<footer id="footer" class="ft">
  <div class="newsletter">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="newsletter__head">
        <img src="images/dknt.png" alt="newsletter" class="newsletter__head-img">
        <strong class="newsletter__head-title"><?= _dangkynhantin ?></strong>
      </div>
      <?php include _template."layout/dangkynhantin.php"; ?>
    </div>
  </div>
  <div class="ft-top ">
    <div class="container">
      <div class="ft-flex">
        <div class="ft-brand">
          <a href="" class="ft-brand__logo">
            <img class="ft-brand__logo-img" src="<?= _upload_hinhanh_l.$logolang["photo"] ?>" alt="logo">
          </a>
          <h2 class="ft-brand__name">Công ty cổ phần địa ốc <strong>hưng Lộc Phát</strong></h2>
        </div>
        <div class="ft-info">
          <div class="ft-info-item">
            <i class="fas fa-home"></i>
            <div class="ft-info-item__text">
              <p><?= _diachi ?>:</p>
              <p><?= $company["diachi"] ?></p>
            </div>
          </div>
          <div class="ft-info-item">
            <i class="fas fa-home"></i>
            <div class="ft-info-item__text">
              <p><?= _email ?>:</p>
              <p><?= $company["email"] ?></p>
            </div>
          </div>
          <div class="ft-info-item">
            <i class="fas fa-home"></i>
            <div class="ft-info-item__text">
              <p>Phone:</p>
              <p><?= $company["dienthoai"] ?></p>
            </div>
          </div>
          <div class="ft-info-item">
            <i class="fas fa-home"></i>
            <div class="ft-info-item__text">
              <p>Website:</p>
              <p><?= $company["website"] ?></p>
            </div>
          </div>
          <?php /* 
          <h2 class="ft-company"><a href=""><?= $company["ten"] ?></a></h2>  
          <div class="content"><?php echo lay_text('footer'); ?></div>  
          */?>
        </div>


        
        <?php /* 
        
        <?php  if($deviceType != "phone"){ ?>
          <div class="ft-fanpage">
           <div class="fanpageplace">
            <div class="fb-page" data-href="<?=$company['fanpage']?>" data-width="470" data-height="380" 
              data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" 
              data-show-posts="false">
              <div class="fb-xfbml-parse-ignore">
                <blockquote cite="<?=$company['fanpage']?>">
                  <a href="<?=$company['fanpage']?>">Facebook</a>
                </blockquote>
              </div>
            </div>      <!-- end fb-page  -->
          </div>
        </div>
      <?php } ?>   
         */?> 
      </div>
    </div>
  </div> 
  <div class="ft-bot">
    <div class="container">
      <div class="ft-bot-flex">
        <div class="ft-baiviet">
          <p class="ft-tit"><i class="fas fa-home"></i>Chính sách</p> 
          <?= for1('news','chinh-sach','chinh-sach','.html')?>
        </div>
        <div class="ft-baiviet">
          <p class="ft-tit"><i class="fas fa-home"></i>Tag Seo</p> 
          <ul>
          <?php foreach($tutags as $k=>$v) { 
            echo '<li><a href="'.$v["link"].'" target="_blank" >'.$v["ten"].'</a></li>';
          } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
  <div class="copyright">
    <div class="container">
      <div class="ft-wrap">
        <p class="text">Copyright © 2020 <?= $company["ten"] ?>. Design by Nina</p>
          <?php /* 
        <ul class="ft-thongke">
          <li>Online: <span><?php $count=count_online(); echo $tong_xem=$count['dangxem'];?></span></li>
          <li><?=_thongketuan?>: <span><?=$trongtuan;?></span></li>   
          <li><?=_thongkethang?>: <span><?=$trongthang;?></span></li>  
          <li><?=_tongtruycap?>: <span><?php $count=count_online(); echo $tong_xem=$count['daxem'];?></span></li>
        </ul>
          <li><?=_ngayhomqua?>: <span><?=$homqua;?></span></li>    
          */?>
      </div>
    </div>
  </div>
          <?php /* <div class="codebando"><?= $company["bando"] ?></div>
            include _template."layout/dangkynhantin.php";<img src="http://placehold.it/600x520" 
            alt="" style="   -webkit-clip-path: polygon(25% 0, 75% 0, 100% 50%, 75% 100%, 25% 100%, 0 50%);
            clip-path: polygon(25% 0, 75% 0, 100% 50%, 75% 100%, 25% 100%, 0 50%);   "> 
            https://bennettfeely.com/clippy/ */?>