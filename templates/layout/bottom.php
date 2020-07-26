<div class="videoduan lazy" data-bg="url('images/video-bg.jpg')">
  <div class="container">
    <div class="videoduan__title text-center text-uppercase"><span>Video dự án</span></div>
    <div class="video-main">
      <?php foreach($video as $k=>$v) { 
        $iden = getYoutubeIdFromUrl($v["link"]);
        $img = "//i.ytimg.com/vi/".$iden."/mqdefault.jpg";
        ?>
        <div class="video-item">
          <a data-fancybox="" href="//www.youtube.com/watch?v=<?= $iden ?>" class="video-item__url">
            <div class="video-item__image">
              <figure class="video-item__figure"><img src="<?= $img ?>" alt="" class="video-item__img"></figure>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</div>