      <?php 
      if($source == "index" || $source == "search"){
        $slider = get_result("select ten$lang as ten,mota$lang as mota,photo,thumb,link from #_slider 
          where hienthi=1 and type='slider' order by stt");
         ?>
           <div id="slideshow">
             <div class="slideshow-slider-main">
               <?php 
               foreach ($slider as $key => $v) {
                ?>
                <div class="slideshow-slider-item">
                 <section>
                  <a href="<?= $v["link"] ?>" class="slider-link">
                    <picture>
                      <source media="(min-width: 1024px)" srcset="<?= _upload_hinhanh_l.$v["thumb"] ?>" />
                        <source media="(min-width: 550px)" srcset="thumb/768x250/1/<?= _upload_hinhanh_l.$v["thumb"] ?>" />
                          <img src="thumb/425x140/1/<?= _upload_hinhanh_l.$v["thumb"] ?>" alt="<?= $v["ten"] ?>" /> 
                        </picture> 
                    </a>
                      <?php /* 
                      <div class="slider-text-bg">
                                            <div class="slider-text">
                                              <div class="slider-text__ten">
                                                <?= $v["ten"] ?>
                                              </div>
                                              <div class="slider-text__mota">
                                                <?= $v["mota"] ?>
                                              </div>
                                              <div class="slider-text__button slider-button">
                                                <a href="<?= $v["link"] ?>" class="slider-button__xemthem">Xem chi tiết</a>
                                              </div>
                                            </div>
                                          </div>  
                      */?>
                    </section>
                  </div>
                <?php } ?>
              </div>
           
         </div>
         <div class="tim-bds">
           <div class="container">
             <form action="" method="post">
               <div class="switch-field">
                 <?php foreach($product_danhmuc as $kdm=>$vdm) {
                   
                  ?>
                 <input type="radio" id="radio-<?= $vdm["id"] ?>" name="id_danhmuc" 
                 value="<?= $vdm["id"] ?>" <?= ($kdm==0)?'checked':'' ?> />
                 <label for="radio-<?= $vdm["id"] ?>"><?= $vdm["ten"] ?></label>
               <?php } ?>
               </div>

               <div class="form-group">
                 <input type="text" id="keyword" placeholder="Từ khóa tìm kiếm" class="form-control">
               </div>
               <div class="form-group d-flex">
                 <?php 
                 if(!empty($product_danhmuc)){
                   $search_product_list = get_result("select ten$lang as ten,tenkhongdau,id 
                     from table_product_list where id_danhmuc='".$product_danhmuc[0]["id"]."' and hienthi>0 order by stt asc");
                 }
                  ?>
                 <select name="id_list" id="id_list" class="form-control">
                   <option value="">Chọn loại nhà đất</option>
                   <?php foreach($search_product_list as $k=>$v) { ?>
                   <option value="<?= $v["id"] ?>"><?= $v["ten"] ?></option>
                   <?php } ?>
                 </select>
                 <select name="id_city" id="thanhpho" class="form-control">
                   <option value="">Chọn tỉnh/thành</option>
                   <?php foreach($search_city as $k=>$v) { ?>
                   <option value="<?= $v["id"] ?>"><?= $v["ten"] ?></option>
                   <?php } ?>
                 </select>
                 <select name="id_dist" id="quan" class="form-control">
                   <option value="">Chọn quận/huyện</option>
                 </select>
                 <select name="id_huong" id="id_huong" class="form-control">
                   <option value="">Chọn hướng</option>
                   <?php foreach($search_huong as $k=>$v) { ?>
                   <option value="<?= $v["id"] ?>"><?= $v["ten"] ?></option>
                   <?php } ?>
                 </select>
                 <select name="id_khoanggia" id="id_khoanggia" class="form-control">
                   <option value="">Chọn giá</option>
                   <?php foreach($search_khoanggia as $k=>$v) { ?>
                   <option value="<?= $v["chucvu"] ?>-<?= $v["link"] ?>"><?= $v["ten"] ?></option>
                   <?php } ?>
                 </select>
                 <button class="btn btn-primary" type="button" onclick="onSearch2($(this));return false;"><?= _timkiem ?></button>
               </div>  
             </form>
           </div>
         </div>
          <?php }else{ 
  // $bntype = $type;
  // if($type=="about") $bntype = 'gioi-thieu';
  // if($type=="thong-tin") $bntype = 'tin-tuc';
  // $bntrong=get_fetch("select ten$lang as ten,tenkhongdau,photo,thumb from #_news where type='bntrong' and ten='".$bntype."'");
  // <div class="inner-banner" style="background-image: url(images/banner.jpg)">
  // </div>
          }
          ?>

