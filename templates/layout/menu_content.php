<li class="<?php if($source=='index') echo 'active'; ?>"><a href=""><?= _trangchu ?></a></li>
<li class="<?php if($com=='gioi-thieu') echo 'active'; ?>"><a href="gioi-thieu.html">
<?= _gioithieu ?></a></li> 
<?php 
$str='';
for($i=0;$i<count($product_danhmuc);$i++){
  $link1 = $product_danhmuc[$i]["type"].'/'.$product_danhmuc[$i]["tenkhongdau"].'-'.$product_danhmuc[$i]["id"];
  $str.='<li><a href="'.$link1.'">'.$product_danhmuc[$i]["ten"].'</a>';
  $danhmuc_cap2= get_result("select id,ten$lang as ten,tenkhongdau,type from #_product_list 
    where hienthi=1 and type='$type' and id_danhmuc='".$product_danhmuc[$i]["id"]."' order by stt,id asc");
  if(count($danhmuc_cap2)>0){
    $str.='<ul class="sub-menu">';
    for($j=0;$j<count($danhmuc_cap2);$j++){
      $link2 = $danhmuc_cap2[$j]["type"].'/'.$danhmuc_cap2[$j]["tenkhongdau"].'-'.$danhmuc_cap2[$j]["id"].'/';
      $str.='<li><a href="'.$link2.'">'.$danhmuc_cap2[$j]["ten"].'</a></li>';
    }
    $str.='</ul>';
  }
  $str.='</li>';
}
echo $str;
 ?>
<?php /* 

 <li class="<?php if($com=='san-pham') echo 'active'; ?>"><a href="san-pham.html">
 <?= _sanpham ?></a>
 <?= for2cap('product_danhmuc','product_list','san-pham','san-pham','','/')?> 
 </li> 
 */?> 
 <li class="<?php if($com=='du-an') echo 'active'; ?>"><a href="du-an.html">
<?= _duan ?></a>
 <?= for1('news_danhmuc','du-an','du-an','')?>
</li>
 <li class="<?php if($com=='tin-tuc') echo 'active'; ?>"><a href="tin-tuc.html">
 <?= _tintuc ?></a></li>
<li class="<?php if($com == 'lien-he') echo 'active'; ?>"><a href="lien-he.html">
  <?= _lienhe ?></a></li>
<?php /* 
<?= for1('news_danhmuc','nang-luc','nang-luc','')?>
  */?>