<header class="header" >
  <div class="header-top">
    <div class="container d-flex">
      <p class="header-top__text">
        <i class="fas fa-home"></i><?= _diachi.": ".$company["diachi"] ?>
      </p>
      <p class="header-top__text">
        <i class="fas fa-home"></i><?= _email.": ".$company["email"] ?>
      </p>
      <p class="header-top__text">
        <i class="fas fa-home"></i><?= "Phone: ".$company["dienthoai"] ?>
      </p>
    </div>
  </div>
  <div class="header-bot">
    <div class="container d-flex">
      <a href="" class="header-bot__logo">
        <img class="header-bot__logo-img" src="<?= _upload_hinhanh_l.$logolang["photo"] ?>" alt="logo">
      </a>
      <?php include _template."layout/menu_top.php"; ?>
    </div>
    
  </div>
</header>