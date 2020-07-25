<?php //include _template."layout/sanpham_boloc.php";?>
<div class="widget">
  <div class="widget__title"><?= _duan ?></div>
  <div class="widget__box">
    <div class="tinmoi-container">
      <ul>
        <?php foreach($duan as $k=>$v) { 
        $link = get_url($v, $v["type"]);
        $imgurl='<img class="tinmoi-item__figure-img" src="'._upload_tintuc_l.$v["thumb"].'" alt="'.$v["ten"].'"  />';
          ?>
          <li class="tinmoi-item">
            <a class="tinmoi-item__url" href="<?= $link ?>">
              <figure class="tinmoi-item__figure"><?= $imgurl ?></figure>
              <h3 class="tinmoi-item__name"><?= $v["ten"] ?></h3>
            </a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</div>
<div class="widget">
  <div class="widget__title"><?= _hotrotructuyen ?></div>
  <div class="widget__box">
  </div>
</div>
<div class="widget">
  <div class="widget__title">Nhận ký gửi</div>
  <div class="widget__box">
    <div class="tinmoi-container">
      <ul>
        <?php foreach($kygui as $k=>$v) { 
        $link = get_url($v, $v["type"]);
        $imgurl='<img class="tinmoi-item__figure-img" src="'._upload_tintuc_l.$v["thumb"].'" alt="'.$v["ten"].'"  />';
          ?>
          <li class="tinmoi-item">
            <a class="tinmoi-item__url" href="<?= $link ?>">
              <figure class="tinmoi-item__figure"><?= $imgurl ?></figure>
              <h3 class="tinmoi-item__name"><?= $v["ten"] ?></h3>
            </a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</div>
<div class="widget">
  <div class="widget__title">Hỗ trợ pháp lý</div>
  <div class="widget__box">
    <div class="tinmoi-container">
      <ul>
        <?php foreach($hotro as $k=>$v) { 
        if(!empty($v["link"])){
          $target = 'target="_blank"';
          $link = (string)magic_quote(trim(strip_tags($v['link'])));
        }else{
          $target = '';
          $link = get_url($v, $v["type"]);
        }
        $imgurl='<img class="tinmoi-item__figure-img" src="'._upload_tintuc_l.$v["thumb"].'" alt="'.$v["ten"].'"  />';
          ?>
          <li class="tinmoi-item">
            <a <?= $target ?> class="tinmoi-item__url" href="<?= $link ?>">
              <figure class="tinmoi-item__figure"><?= $imgurl ?></figure>
              <h3 class="tinmoi-item__name"><?= $v["ten"] ?></h3>
            </a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</div>
<?php /* <div class="hotro danhmuc">
  <div class="tieude"><span>Gọi mua hàng</span></div>
  <div class="danhmuc-box">
    <div class="hotro-img"><img src="images/hotro.png" alt="<?=_hotrotructuyen?>"></div>
    <div class="hotro-hotline">
      <img src="images/sb-hotline.png" alt="hotline" class="sb-hotline">
      <p>Hotline</p>
      <?php foreach ($hotline as $key => $value) { ?>
        <a href="tel:<?=preg_replace('/[^0-9]/','',$value['link']);?>"><?=$value['link']?></a>
      <?php } ?>
    </div>
    <?php foreach($yahoo as $key => $value) { ?>
      <div class="hotro-item">
        
        <h5><?= $value["ten"] ?></h5>
        <p><img src="images/phone.png" alt=""> <span><?= _dienthoai ?> <?= $value["dienthoai"] ?></span></p>
        <p><img src="images/email.png" alt=""> <span><?= $value["email"] ?></span></p>
      </div>
    <?php } ?>
  </div>
<div class="widget dm-sp">
  <div class="widget__title"><i class="fas fa-home"></i>Danh mục</div>
  <div class="widget__box" id="danhmuc">
    <?= for2cap('product_danhmuc','product_list','bat-dong-san','bat-dong-san','','/') ?>
  </div>
</div>
 <div class="widget">
    <div class="widget__title"><i class="fas fa-home"></i>Video clip</div>
    <div class="widget__box">
      <div id="video2-idx">
        <iframe id="iframe2" src="https://www.youtube.com/embed/<?= getYoutubeIdFromUrl($video[0]["link"]) ?>" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="widget__hotline">
        <span>Hotline:</span>
        <a href="tel:<?=preg_replace('/[^0-9]/','',$company['dienthoai']);?>">
                    <?= $company['dienthoai'] ?></a>
      </div>
    </div>
  </div>
  
   <div class="chaysp widget">
   <div class="widget__title"><i class="fas fa-home"></i>Các tin nổi bật</div>
   <div class="widget__box">
    <div class="tinmoi-container">
      <ul>
        <?php foreach($spnoibat as $k=>$v) { 
        $docgia = docgia($v["gia"]);
        $link = get_url($v, $v["type"]);
        $imgurl='<img src="'._upload_sanpham_l.$v["thumb"].'" alt="'.$v["ten"].'"  />';
          ?>
          <li>
            <a href="<?= $link ?>">
              <figure><?= $imgurl ?></figure>
              <h3><?= $v["ten"] ?></h3>
              <p>Giá: <span><?= $docgia ?></span></p>
            </a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
  </div>
</div> */?>


<?php /* <div class="chaysp danhmuc">

  <div class="tieude">tin mới nhất</div>
  <div class="danhmuc-box">
   <div class="tinmoi-container">
     <ul class="tinchay-box">
        <?php foreach ($tinnb as $key => $value) {
          echo '<li class="tinchay-item"><a href="'.get_url($value).'">
            <figure><img src="'._upload_tintuc_l.$value["thumb"].'" alt="'.$value["ten"].'"></figure><h5 class="line-clamp">'.$value["ten"].'</h5>
          </a></li>';
        } ?>
     </ul>

   </div>
 </div>
 </div>

 <!-- hotro --> */?>
