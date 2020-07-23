<div class="videoduan lazy" data-bg="url('images/video-bg.jpg')">
  <div class="container">
    <div class="videoduan__title text-center text-uppercase"><span>Video dự án</span></div>
  </div>
</div>
<div class="tagseo">
  <div class="container">
    <div class="tagseo__title">
      tag seo : tìm kiếm nhu cầu phù hợp
    </div>
    <div class="tagseo-list">
      <?php foreach($tutags as $k=>$v) { 
        echo '<a href="'.$v["link"].'" target="_blank" class="tagseo-item">'.$v["ten"].'</a>';
      } ?>
    </div>
  </div>
</div>