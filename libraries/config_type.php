<?php
$type = (string)(isset($_REQUEST['type'])) ? addslashes($_REQUEST['type']) : "";
$act = (string)(isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
$act = explode('_',$act);
if(count($act>1)){
	$act = $act[1];
} else {
	$act = $act[0];
}

$config['type'] = array();
$config['title'] = array();
$config['ck'] = array();
@define ( _ext_thumb , '' );
switch($type){
//-------------san pham------------------
	case 'nha-dat':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('ten','seo');
		$config['title'] = array('noibat'=>"Nổi bật",'tieubieu'=>"Hiện menu",'hinhanh2'=>"Icon");
		@define ( _width_thumb , 470 );
		@define ( _height_thumb , 350 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 470 );
		@define ( _height_thumb2 , 350 );
		@define ( _widthhinhanh_thumb , 40 );
		@define ( _heighthinhanh_thumb , 40 );
		@define ( _stylehinhanh_thumb , 2 );
		@define ( _widthhinhanh_thumb2 , 40 );
		@define ( _heighthinhanh_thumb2 , 40 );
		break;

		case 'list':
		$config['type'] = array('seo','ten');
		$config['title'] = array('noibat'=>"Nổi bật");
		@define ( _width_thumb , 250 );
		@define ( _height_thumb , 560 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 250 );
		@define ( _height_thumb2 , 560 );
		break;

		case 'cat':
		$config['type'] = array('seo','ten');
		@define ( _width_thumb , 250 );
		@define ( _height_thumb , 200 );
		@define ( _style_thumb , 1 );
		break;

		default:
		$config['type'] = array('seo','ten','hinhanh','noidung','hinhthem',"noibat",'danhmuc','list'
			,'gia','id_huong',"dientich",'mattien',"vitri");
		$config['ck'] = array('mota2');
		$config['title'] = array('tieubieu'=>"Nổi bật",'noibat'=>"Nổi bật",
			'spmoi'=>"Khuyến mãi",'spbanchay'=>"Bán chạy","toado"=>"Iframe google map",
			"mota2"=>"Mô tả",'mattien'=>"Phòng ngủ","dientich"=>"Diện tích (m2)","thuonghieu"=>"Thương hiệu",
			"vitri"=>"Giá bằng chữ");
		@define ( _width_thumb , 500 );
		@define ( _height_thumb , 320 );
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 500 );
		@define ( _height_thumb2 , 320 );
		break;
	}
	break;
//-------------san pham------------------
	case 'mausac':
	switch($act){
		default:
		$config['type'] = array('ten','color');
		$config['title']["noibat"] = "Dùng hình ảnh";
		@define ( _width_thumb , 200 );
		@define ( _height_thumb , 200 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 200 );
		@define ( _height_thumb2 , 200 );
		break;
	}
	break;
	case 'size':
	switch($act){
		default:
		$config['type'] = array('ten');
		@define ( _width_thumb , 400 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 400 );
		@define ( _height_thumb2 , 300 );
		break;
	}
	break;
	case 'coupon':
	switch($act){
		default:
		$config['type'] = array('ten','gia');
		break;
	}
	break;
	case 'id_hientrang':
	case 'id_huong':
	switch($act){
		default:
		$config['type'] = array('ten');
		break;
	}
	break;
	case 'id_khoanggia':
	switch($act){
		default:
		$config['type'] = array('ten','chucvu','link');
		$config['title'] = array('chucvu'=>"Giá từ",'link'=>"Giá đến");
		break;
	}
	break;
	case 'tailieu':
	switch($act){
		default:
		$config['type'] = array('seo','taptin','ten','mota');
		break;
	}
	break;
	case 'bntrong':
	switch($act){
		default:
		$config['type'] = array('hinhanh','ten');
		@define ( _width_thumb , 1366 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 1366 );
		@define ( _height_thumb2 , 300 );
		break;
	}
	break;
	case 'thuonghieu':
	switch($act){
		default:
		$config['type'] = array('hinhanh2', 'hinhanh','ten','seo');
		$config['title'] = array('hinhanh2'=>'Icon', 'hinhanh'=>'Hình ảnh');
		@define ( _width_thumb , 590 );
		@define ( _height_thumb , 480 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 590 );
		@define ( _height_thumb2 , 480 );
		@define ( _width_thumb4 , 145 );
		@define ( _height_thumb4 , 110 );
		break;
	}
	break;
	case 'yahoo':
	switch($act){
		default:
		$config['type'] = array('hinhanh');
		@define ( _width_thumb , 70 );
		@define ( _height_thumb , 70 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 70 );
		@define ( _height_thumb2 , 70 );
		break;
	}
	break;
	case 'tin-tuc':
	case 'tuyen-dung':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('seo','ten');
		break;
		default:
		$config['type'] = array('seo','ten','noidung','mota','hinhanh');
		if($type == "tin-tuc"){
			$config['type'][] = 'noibat';
		}
		@define ( _width_thumb , 300 );
		@define ( _height_thumb , 250 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 300);
		@define ( _height_thumb2 , 250 );
		break;
	}
	break;
	case 'tu-van':
	case 'xay-dung':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('seo','ten');
		break;
		default:
		$config['type'] = array('seo','ten','noidung','mota','hinhanh','danhmuc');
		@define ( _width_thumb , 300 );
		@define ( _height_thumb , 250 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 300);
		@define ( _height_thumb2 , 250 );
		break;
	}
	break;
	case 'txtnewsletter':
	case 'txttin-tuc':
	switch($act){
		default:
		$config['type'] = array('mota');
		break;
	}
	break;
	case 'y-kien':
	switch($act){
		default:
		$config['type'] = array('ten','mota','hinhanh','chucvu');
		@define ( _width_thumb , 120 );
		@define ( _height_thumb , 120 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 120);
		@define ( _height_thumb2 , 120 );
		break;
	}
	break;
	case 'ky-gui':
	switch($act){
		default:
		$config['type'] = array('ten','mota','hinhanh','noidung','seo');
		@define ( _width_thumb , 550 );
		@define ( _height_thumb , 450 );
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 550);
		@define ( _height_thumb2 , 450 );
		break;
	}
	break;
	case 'du-an':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('seo','ten');
		break;
		case 'list':
		$config['type'] = array('seo','ten','hinhanh','noibat','mota');
		@define ( _width_thumb , 550 );
		@define ( _height_thumb , 450 );
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 550);
		@define ( _height_thumb2 , 450 );
		break;
		default:
		$config['type'] = array('ten','danhmuc','list','noidung');
		break;
	}
	break;
	case 'loc-san-pham':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('ten');
		break;
		default:
		$config['type'] = array('ten','danhmuc');
		break;
	}
	break;
	case 'hotline':
	case 'zalo':
	switch($act){
		default:
		$config['type'] = array('ten','link');
		$config['title'] = array('link'=>"SĐT",'chucvu'=>"Bộ phận");
		break;
	}
	break;
	case 'diachi':
	switch($act){
		default:
		$config['type'] = array('ten','ten2','mota');
		$config['title'] = array('mota'=>"Iframe bản đồ",'link'=>'Link bản đồ',
			'ten2'=>'Địa chỉ','chucvu'=>'Email');
		@define ( _width_thumb , 200 );
		@define ( _height_thumb , 180 );
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 200 );
		@define ( _height_thumb2 , 180 );
		break;
	}
	break;
	case 'link-san-pham':
	case 'tags':
	switch($act){
		default:
		$config['type'] = array('ten', 'link');
		break;
	}
	break;
//-------------tin tuc------------------
	case 'chinh-sach':
	case 'dich-vu':
	switch($act){
		default:
		$config['type'] = array('seo','ten','noidung');
		break;
	}
	break;
	case 'thong-tin':
	switch($act){
		default:
		$config['type'] = array('seo','ten','hinhanh','noidung');
		@define ( _width_thumb , 70 );
		@define ( _height_thumb , 70 );
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 70 );
		@define ( _height_thumb2 , 70 );
		break;
	}
	break;
	case 'thu-vien':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('seo','ten');
		@define ( _width_thumb , 430 );
		@define ( _height_thumb , 430 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 600);
		@define ( _height_thumb2 , 600 );
		break;
		default:
		$config['type'] = array('ten','seo','hinhthem','hinhanh','noibat');
		@define ( _width_thumb , 450 );
		@define ( _height_thumb , 320 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 600 );
		@define ( _height_thumb2 , 430 );
		break;
	}
	break;
	case 'txtthu-vien':
	switch($act){
		default:
		$config['type'] = array('mota');
		@define ( _width_thumb , 680 );
		@define ( _height_thumb , 750 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 680 );
		@define ( _height_thumb2 , 750 );
		break;
	}
	break;
//-------------chinh sach / ho tro / cham soc khach hang------------------
	case 'ho-tro':
	switch($act){
		default:
		$config['type'] = array('seo','ten','hinhanh','mota','noidung','link');
		$config['title'] = array('link'=>'Link');
		@define ( _width_thumb , 550 );
		@define ( _height_thumb , 450 );
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 550);
		@define ( _height_thumb2 , 450 );
		break;
	}
	break;

//-------------tin tuc------------------
//-------------Dạng photo------------------
	case 'logo':
	switch($act){
		default:
		// $config['type'] = array('ten','mota');
		$config['title'] = array('mota'=>'Tiêu đề nhỏ');
		@define ( _width_thumb , 300 );
		@define ( _height_thumb , 100);
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 300 );
		@define ( _height_thumb2 , 100);
		break;
	}
	break;
	case 'dong':
	switch($act){
		default:
		@define ( _width_thumb , 100 );
		@define ( _height_thumb , 100 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 250 );
		@define ( _height_thumb2 , 250 );
		break;
	}
	break;
	case 'banner':
	switch($act){
		default:
		@define ( _width_thumb , 390 );
		@define ( _height_thumb , 50);
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 390 );
		@define ( _height_thumb2 , 50 );
		break;
	}
	break;
	case 'bgbn':
	switch($act){
		default:
		@define ( _width_thumb , 1366 );
		@define ( _height_thumb , 150 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 1366 );
		@define ( _height_thumb2 , 150 );
		break;
	}
	break;
	case 'bgft':
	switch($act){
		default:
		@define ( _width_thumb , 700 );
		@define ( _height_thumb , 500 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 700 );
		@define ( _height_thumb2 , 500 );
		break;
	}
	break;
	case 'banner_mobi':
	switch($act){
		default:
		@define ( _width_thumb , 600 );
		@define ( _height_thumb , 150 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 600 );
		@define ( _height_thumb2 , 150 );
		break;
	}
	break;
	case 'pupop':
	switch($act){
		default:
		@define ( _width_thumb2 , 550 );
		@define ( _height_thumb2 , 480 );
		@define ( _style_thumb2 , 1 );
		break;
	}
	break;
	case 'slider':
	switch($act){
		default:
		@define ( _width_thumb , 1366 );
		@define ( _height_thumb , 440);
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 1366 );
		@define ( _height_thumb2 , 440);
		break;
	}
	break;
	case 'slidermb':
	switch($act){
		default:
		@define ( _width_thumb , 768 );
		@define ( _height_thumb , 300);
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 768 );
		@define ( _height_thumb2 , 300);
		break;
	}
	break;
	case 'letruot':
	switch($act){
		default:
		@define ( _width_thumb , 150 );
		@define ( _height_thumb , 390 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 150 );
		@define ( _height_thumb2 , 390 );
		break;
	}
	break;
	case 'doi-tac':
	switch($act){
		default:
		@define ( _width_thumb , 200 );
		@define ( _height_thumb , 130 );
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 200 );
		@define ( _height_thumb2 , 130 );
		break;
	}
	break;
	case 'quang-cao':
	switch($act){
		default:
		@define ( _width_thumb , 350 );
		@define ( _height_thumb , 560 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 350 );
		@define ( _height_thumb2 , 560 );
		break;
	}
	break;
	case 'quang-cao2':
	switch($act){
		default:
		@define ( _width_thumb , 350 );
		@define ( _height_thumb , 560 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 350 );
		@define ( _height_thumb2 , 560 );
		break;
	}
	break;
//-------------Dạng 1 bài viết------------------
	case 'gioi-thieu':
	case 'chinh-sach-ban-si':
	switch($act){
		default:
		$config['type'] = array('seo','noidung');
		break;
	}
	break;
	case 'video':
	switch($act){
		default:
		// $config['type'] = array('hinhanh');
		@define ( _width_thumb , 425 );
		@define ( _height_thumb , 340 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 600 );
		@define ( _height_thumb2 , 480 );
		break;
	}
	break;
	case 'txtvideo':
	case 'txtban-chay':
	switch($act){
		default:
		$config['type'] = array('mota');
		$config['title'] = array('ten2'=>'Tiêu để nhỏ');
		@define ( _width_thumb , 585 );
		@define ( _height_thumb , 400 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 585 );
		@define ( _height_thumb2 , 400 );
		break;
	}
	break;
	
	case 'lienhe':
	switch($act){
		default:
		$config['type'] = array('noidung');
		break;
	}
	break;
	case 'footer':
	case 'footer2':
	switch($act){
		default:
		$config['type'] = array('noidung');
		@define ( _width_thumb , 490 );
		@define ( _height_thumb , 50);
		@define ( _style_thumb , 2 );
		@define ( _width_thumb2 , 490 );
		@define ( _height_thumb2 , 50 );
		break;
	}
	break;
//-------------tin tuc------------------

//--------------defaut main---------------
	default:
	$source = "";
	$template = "index";
	break;
}