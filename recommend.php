<?php
	header('Access-Control-Allow-Origin:*');
    $ch = curl_init();
  //  $url = 'http://open.vistastory.com/mobilecms/interface.action?';
  	
	$url = 'http://www.topnews9.com//index.php?m=wap&c=home&a=detail&t=app&id='.$_GET['num'].'&type=myapp';
	//		http://www.topnews9.com//index.php?m=wap&c=home&a=detail&id=47156&type=myapp
   $header = array(
   	//	'num:new.id',
//      'method:mag.hot.details.get ',
//      'code:visand001',
//      'page_size:10',
//      'cat_id:71',
//		'page_no:1',
//		'format:json',
//		'istop:0',
//		'fields=id%2Ctitle%2Cicon%2Cauthor%2Cpub_time%2Ccomment_count%2Cintro%2Cadtype%2Clink',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

    echo $res;
?>