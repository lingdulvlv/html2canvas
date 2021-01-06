<?php
$image = $_POST['img'];
if (strstr($image,",")){
	$image = explode(',',$image);
	$image = $image[1];
}
// 创建文件夹
$path = "./".date("Ymd",time());
if (!is_dir($path)){ //判断目录是否存在 不存在就创建
 	mkdir($path,0777,true);
}
$imageSrc = $path.'/'.date('His',time()).'.png';
$r = file_put_contents($imageSrc, base64_decode($image));
if (!$r) {
$tmparr1=array('data'=>null,"code"=>1,"msg"=>"图片生成失败");
 	echo json_encode($tmparr);
}else{
$tmparr2=array('data'=>1,"code"=>0,"msg"=>"图片生成成功",'status'=>1);
 	echo json_encode($tmparr2);
}


?>