<?php
	// session_start();
	// @define ( '_template' , '../templates/');
	// @define ( '_lib' , '../libraries/');
	// @define ( '_source' , '../sources/');	
	// if(!isset($_SESSION['lang']))
	// {
	// $_SESSION['lang']='vi';
	// }
	// $lang=$_SESSION['lang'];

	// include_once _lib."config.php";
	// include_once _lib."constant.php";
	// include_once _lib."functions.php";
	// include_once _lib."class.database.php";
	// $d = new database($config['database']);
	include ("ajax_config.php");
	$kichthuoc=$_POST['kichthuoc'];
	$id_product=$_POST['id_product'];

	$d->reset();
	$sql = "select gia,giakm from #_gia where kichthuoc='$kichthuoc' and id_product='$id_product' limit 0,1";
	$d->query($sql);
	$record = $d->fetch_array();
	// if($record['gia']!=0) {
	// 	echo $record['gia'];
	// }
	// else {
	// 	echo 0;
	// }
  $cls_giacu = ($record['giakm'] > 0)?'giacu':'';
  $val_gia = ($record['gia'] > 0)?number_format($record['gia'],0, ',', '.').'  vnđ':_lienhe;
  $s_panel_gia = "";
  $s_panel_gia .= '<div class="gia '.$cls_giacu.' li">'._gia.': ';
  $s_panel_gia .= $val_gia;
  $s_panel_gia .= '</div>';
  if($record['giakm'] > 0) {
  	$s_panel_gia .= '<div class="giakm li">'._giakm.': '.number_format($record['giakm'],0, ',', '.').' vnđ';
  	$s_panel_gia .= '<span class="tinh_phantram">-'.tinh_phantram($record['gia'],$record['giakm']).'%';
  	$s_panel_gia .= '</div>';
  }
  echo $s_panel_gia;
?>