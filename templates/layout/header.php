<header class="header" >
    <div class="container">
      <div class="header__wrap">
        <a href="" class="header__logo">
          <img class="header__logo-img" src="<?= _upload_hinhanh_l.$logolang["photo"] ?>" alt="logo">
        </a>
        <div class="header__info">
          <h2 class="header__info-text header__info-text--big"><a href="" class="header__info-url"><?= $company["ten"] ?></a></h2>
          <p class="header__info-text"><?= _diachi.": ".$company["diachi"] ?></p>
          <p class="header__info-text"><?= "Website: ".$company["website"] ?></p>
        </div>
        <div class="header__info-right">
          <div class="header__hotline"><img class="header__hotline-img" src="images/hd-hotline.png" 
            alt="hotline"><span class="header__hotline-number"><?= $company["dienthoai"] ?></span></div>
          <div class="header__email"><img class="header__email-img" src="images/hd-email.png" 
            alt="email"><?= $company["email"] ?></div>
        </div>
      </div>
    </div>
</header>