<?php
$day = date("d/m/Y");
$res="\033[0m";
$do="\033[1;91m";
$grean="\033[1;32m";  
$mit="\033[0;32m";
$vang="\033[0;33m";
$mti="\033[0;33m";
$test="\033[1;33m";
$tim="\033[1;36m";
$lam="\033[1;34m";
$tmi="\033[1;34m";
$hong="\033[1;35m";
$imt="\033[1;35m";
$blue="\033[1;36m";
$trang="\033[1;37m";
$ress="\033[0;32m";
$res="\033[0;33m";
$do="\033[1;91m";
$vang="\033[0;33m";
$white= "\033[0;33m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$trang="\033[1;97m";
$maufullxduong= "\e[1;47;34m";
$maufulldo= "\e[1;47;31m";
$maufullluc= "\e[1;47;32m";
$maufullxnhac= "\e[1;47;36m";
$maufullden= "\e[1;47;30m";
$maufullvang= "\e[1;47;33m";
$maufullhong= "\e[1;47;33m";
$ngancachfullmau= "\e[0m";
$lightblue= '\033[94m';
if (!file_exists('CKFB_L2L.txt')){
	$k = fopen("CKFB_L2L.txt","a+");
	}
$blue="\033[1;36m";
error_reporting(0);
$purple="\e[35m";
date_default_timezone_set("Asia/Ho_Chi_Minh");
//login
@system('clear');
echo $luc."Thêm CookieFB Vào File \033[1;93mCKFB_L2L.txt\033[1;92m (Mỗi Cookie 1 Dòng)\n";
if (!file_exists('CKFB_L2L.txt')){
	exit();
	}else{
		$js = fread(fopen("CKFB_L2L.txt","r"),filesize("CKFB_L2L.txt"));
		if (empty($js)){

			exit();
			}
$jsdec    = explode(PHP_EOL,$js);
$count=count($jsdec);
		}
@system('clear');
echo "";
usleep(55777);
echo "     \033[1;91m  ███████╗       ████████╗ █████╗  █████╗ ██╗ \n";
usleep(55777);
echo " \033[1;93m      ╚════██║       ╚══██╔══╝██╔══██╗██╔══██╗██║\n";
usleep(55777);
echo "   \033[1;94m      ███╔═╝  █████╗  ██║   ██║  ██║██║  ██║██║\n";
usleep(55777);
echo "      \033[1;36m ██╔══╝    ╚════╝  ██║   ██║  ██║██║  ██║██║\n";
usleep(55777);
echo "     \033[1;97m  ███████╗          ██║   ╚█████╔╝╚█████╔╝███████╗\n";
usleep(55777);
echo "       ╚══════╝          ╚═╝    ╚════╝  ╚════╝ ╚══════╝\n";
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";
usleep(23456);
echo "\033[1;94mBản Quyền:";
usleep(23456);
echo "Nguyễn Minh Huy\n";
usleep(23456);
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";
usleep(23456);
echo "\033[1;92mToolZVip | Like2Like.Org\n";
usleep(23456);
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";
usleep(23456);
echo "\033[1;36mYoutube:Minh Huy Offcial\n";
usleep(23456);
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";
usleep(23456);
echo "\033[1;93mHãy Tìm Đến Tôi Nếu Khi Bạn Cần\n";
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";
usleep(23456);
echo "\033[1;97mFb.com/UserName.MinhHuyOffcial | Zalo:0867536995\n";
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";
echo "".$trang."[".$do."●".$trang."]".$trang." -".$luc." Đang Tool$blue ".count($jsdec)."$luc Tài Khoản FB\n";
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";
echo "".$trang."[".$luc."●".$trang."]".$trang." -".$luc." Nhập \033[1;91m[\033[1;92m1\033[1;91m] \033[1;92mNhiệm Vụ Like Page\n";
usleep(23456);
echo "".$trang."[".$luc."●".$trang."]".$trang." -".$luc." Nhập \033[1;91m[\033[1;92m2\033[1;91m] \033[1;92mNhiệm Vụ Like\n";
usleep(23456);
echo "".$trang."[".$luc."●".$trang."]".$trang." -".$luc." Nhập \033[1;91m[\033[1;92m3\033[1;91m] \033[1;92mNhiệm Vụ Tham Gia Group\n";
usleep(23456);
echo "".$trang."[".$luc."●".$trang."]".$trang." -".$luc." Nhập \033[1;91m[\033[1;92mX\033[1;91m] \033[1;92mThoát Tool\n";
usleep(23456);
echo "".$trang."[".$luc."●".$trang."]".$trang." -".$luc." Vui Lòng Chọn Nhiệm Vụ:$vang";
$c=trim(fgets(STDIN));
if ($c=="1"){
$nhiemvu="https://like2like.org/api/request/load_job?filter=page";}
if ($c=="2"){
$nhiemvu="https://like2like.org/api/request/load_job?filter=post";}
if ($c=="3"){
$nhiemvu="https://like2like.org/api/request/load_job?filter=group";}
if ($c=="X"){
	exit;}
echo "$res".$trang."[".$luc."●".$trang."]".$trang." -".$luc." Nhập Time Delay:";
$delay=trim(fgets(STDIN));
echo "".$trang."[".$luc."●".$trang."]".$trang." -".$luc." Đổi Nick Sau Bao Nhiêu Nhiệm Vụ:$vang";
$jobsck=trim(fgets(STDIN));
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";
while(true){
	foreach ($jsdec as $cookie){
		$chuyenacc=0;
		
		$url="https://m.facebook.com/v9.0/dialog/oauth?app_id=819999065506900&cbt=1611120192120&channel_url=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df3b794ab6540a38%26domain%3Dlike2like.org%26origin%3Dhttps%253A%252F%252Flike2like.org%252Ff1ef006f63d561%26relation%3Dopener&client_id=819999065506900&display=touch&domain=like2like.org&e2e=%7B%7D&fallback_redirect_uri=https%3A%2F%2Flike2like.org%2Flogin&locale=en_US&logger_id=f183ed5a8f5ff04&origin=2&redirect_uri=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df1bc693fd8bbb9%26domain%3Dlike2like.org%26origin%3Dhttps%253A%252F%252Flike2like.org%252Ff1ef006f63d561%26relation%3Dopener%26frame%3Df3179a51cb2c3e4&response_type=token%2Csigned_request%2Cgraph_domain&sdk=joey&version=v9.0";
		$ch = @curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "Accept-Language: en-us,en;q=0.5";
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Redmi Note 7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.92 Mobile Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
:'));
$page = curl_exec($ch);
$acc=explode('&graph_domain=facebook&access_token=', $page);
$access_token=explode('&', $acc[1])[0];
$exp=explode('&expires_in=', $page);
$expireIn=explode('"', $exp[1])[0];
$signed=explode('&signed_request=', $page);
$signedRequest=explode('&', $signed[1])[0];
$data_access=explode('&data_access_expiration_time=', $page);
$data_access_expiration_time=explode('&', $data_access[1])[0];
$data='{"accessToken":"'.$access_token.'","expiresIn":'.$expireIn.',"signedRequest":"'.$signedRequest.'","graphDomain":"facebook","data_access_expiration_time":'.$data_access_expiration_time.',"type":"facebook_login"}';
//Login
		$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_URL =>"https://like2like.org/api/login",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => array(
    'Host:like2like.org',
    'accept:application/json, text/plain, */*',
    'authorization:null',
    'user-agent:Mozilla/5.0 (Linux; Android 10; RMX1929) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Mobile Safari/537.36',
    'content-type:application/json;charset=UTF-8',
    'referer:https://like2like.org/login')));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
$author=$json["token"];
$head_l=array(
  'Host:like2like.org',
  'Connection:keep-alive',
  'Accept:application/json, text/plain, */*',
  'authorization:'.$author,
  'content-type:application/json;charset=UTF-8',
  'User-Agent:Mozilla/5.0 (Linux; Android 10; RMX1929) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Mobile Safari/537.36',);
		//Do
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_URL =>"https://like2like.org/api/user/me",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 60,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $head_l));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
$name = $json['facebook']['name'];
$idname = $json['facebook']['name'];
$vi = $json['wallet']['points'];
$vi2 = $json['wallet']['bonus'];
if (!empty($name)){
echo $res."~ ".$luc."User : $name\n";
echo $res."~ ".$luc."Số Dư : $vi OBB\n";
echo $res."~ ".$luc."Bonus : $vi2 OBB\n";
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $do."-";
}
echo "\n";
while (true){
	if ($chuyenacc==$jobsck){
		$chuyenacc=0;
	echo $res."~ ".$luc."Đã Làm $vang$jobsck ".$luc."Nhiệm Vụ\n";
	for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $do."-";
}
echo "\n";
break;
	}else{
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_URL => $nhiemvu,
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $head_l));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2);
if ($mr2=='[]'){
	echo $res."~ ".$luc."Hết Nhiệm Vụ\n";
	
	for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $do."-";
}
echo "\n";
	break;
}else{
foreach($json as $key){
	if ($chuyenacc==$jobsck){

break;
	}else{
$_id=$key -> {"_id"};
$type=$key -> {"type"};
$data='{"jobId":"'.$_id.'"}';
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_URL =>"https://like2like.org/api/request/job_detail",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $head_l));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
$url1=$json["url"];
$cost=$json ["cost"];
$url=explode("facebook.com/",$url1)[1];
$url_job='https://mbasic.facebook.com/'.$url;
$head_fb=array(
  "Host:mbasic.facebook.com",
  "cache-control:max-age=0",
  "upgrade-insecure-requests:1",
  "save-data:on",
  "user-agent:Mozilla/5.0 (Linux; Android 10; RMX1929) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Mobile Safari/537.36",
  "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
  "sec-fetch-site:cross-site",
  "sec-fetch-mode:navigate",
  "sec-fetch-user:?1",
  "sec-fetch-dest:document",
  "accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
  "cookie:".$cookie);
if ($type == "post"){
$linkid='https://mbasic.facebook.com/'.$url;
$ch = @curl_init();
curl_setopt($ch, CURLOPT_URL, $linkid);
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "Accept-Language: en-us,en;q=0.5";
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Redmi Note 7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.92 Mobile Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
:'));
$page = curl_exec($ch);
if (strpos($page, "xs=deleted") == true) {
        exit("".$vang."[".$do."BLOCK".$vang."]".$res." =>".$do." Die Cookie !!!\n");
}
preg_match('#href="/a/like.php?(.+?)"#is', $page, $_link);
$link= html_entity_decode('https://mbasic.facebook.com/a/like.php'.$_link[1]);
curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_exec($ch);
curl_close($ch);
}
elseif ($type=="page"){
$ch = curl_init();
curl_setopt_array ($ch, array (
CURLOPT_URL => $url_job,
CURLOPT_FOLLOWLOCATION => false,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_POST => 1,
CURLOPT_HTTPGET => true,
CURLOPT_COOKIE => $cookie,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HTTPHEADER => $head_fb,
CURLOPT_HEADER => true,
CURLOPT_ENCODING => TRUE));
$data = curl_exec($ch);
$tìm =explode("/a/profile.php?",$data);
sleep(2);
$tìm1=explode('"',$tìm[1]);
$url_like="https://mbasic.facebook.com/a/profile.php?".htmlspecialchars_decode($tìm1[0]);
$ch = curl_init();
curl_setopt_array ($ch, array (
CURLOPT_URL => $url_like,
CURLOPT_FOLLOWLOCATION => false,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_POST => 1,
CURLOPT_HTTPGET => true,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HTTPHEADER => $head_fb,
CURLOPT_COOKIE => $cookie,
CURLOPT_HEADER => true,
CURLOPT_ENCODING => TRUE));
$data = curl_exec($ch);  
if (strpos($data,"xs=deleted") == true){
exit( $do."Cookie die rồi\n");
}

}
else{$ch = curl_init();
curl_setopt_array ($ch, array (
CURLOPT_URL => $url_job,
CURLOPT_FOLLOWLOCATION => false,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_POST => 1,
CURLOPT_HTTPGET => true,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HTTPHEADER => $head_fb,
CURLOPT_COOKIE => $cookie,
CURLOPT_HEADER => true,
CURLOPT_ENCODING => TRUE));
$data = curl_exec($ch);
if (strpos($data,"xs=deleted") == true){
exit( $do."Cookie die rồi\n");
}
$tìm =explode("/a/group/join/?",$data);
$tìm1=explode('"',$tìm[1]);
$fb=explode('name="fb_dtsg" value="',$data);
$fb=explode('"',$fb[1]);
$fbdtsg=htmlspecialchars_decode($fb[0]);
$jaz=explode('name="jazoest" value="',$data);
$jaz=explode('"',$jaz[1]);
$url="https://mbasic.facebook.com/a/group/join/?".htmlspecialchars_decode($tìm1[0]);
$data="fb_dtsg=$fbdtsg&jazoest=".$jaz[0];
$ch = curl_init();
curl_setopt_array ($ch, array (
CURLOPT_URL => $url,
CURLOPT_FOLLOWLOCATION => false,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_POST => 1,
CURLOPT_HTTPGET => true,
CURLOPT_SSL_VERIFYPEER => 0,
CURLOPT_HTTPHEADER => $head_fb,
CURLOPT_POSTFIELDS => $data,
CURLOPT_COOKIE => $cookie,
CURLOPT_HEADER => true,
CURLOPT_ENCODING => TRUE));
$data = curl_exec($ch);  
if (strpos($data,"xs=deleted") == true){
exit( $do."Cookie die rồi\n");
}
}


//nhan tien
$data = '{"postId":"'.$_id.'"}';
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_URL =>"https://like2like.org/api/request/like_post",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $head_l));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
$success=$json["success"];
if ($success==true){
  $tien = $cost * 0.88;
  $chuyenacc++;
  $job++;
  if ($type=="post"){ $type = 'Like bài viết Facebook';}
  elseif ($type=="page"){ $type = 'Like Fanpage';}
  else{$type = 'Tham gia Group Facebook';}
  $dem++;
  for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";
echo $res."~".$do."[".$blue.date("h:i").$do."][".$luc."NHIỆM VỤ".$do."]".$res." =>".$luc." $type".$do."\n";
echo $res."~".$do."[".$blue.date("h:i").$do."][".$luc."LINK NHIỆM VỤ".$do."]".$res." =>".$luc." ".$url_job.$do."\n";
echo $res."~".$do."[".$blue.date("h:i").$do."][".$luc."TIỀN ĐƯỢC CỘNG".$do."]".$res." =>".$luc." +".$tien." OBB".$do."\n";
echo $res."~".$do."[".$blue.date("h:i").$do."][".$luc."TOOL".$do."]".$res." =>".$luc." Đã Gửi Thông Tin Lên Hệ Thống Xét Duyệt OBB , Đã Làm $dem Job Trong Hôm Nay".$do."\n";
echo $res."~".$do."[".$blue.date("h:i").$do."][".$luc."SỐ DƯ".$do."]".$res." =>".$luc." $vi OBB".$do."\n";
echo $res."~".$do."[".$blue.date("h:i").$do."][".$luc."BONUS".$do."]".$res." =>".$luc." $vi2 OBB".$do."\n";
 for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n"; }
    
 if ($chuyenacc==$jobsck){
break;
	}else{
for ($time=$delay;$time>-1;$time--)
{
echo "\r\033[1;32m┗(•ˇ_ˇ•)\033[1;32m~>      \033[1;32m   \033[1;32m|\033[1;32m $time\033[1;32m | ";
usleep(123333);
echo "\r"; 
echo "\r\033[1;31m┗(•ˇ_ˇ•)  \033[1;31m~>    \033[1;31m  \033[1;31m |\033[1;31m $time\033[1;31m | ";
usleep(123333);
echo "\r"; 
echo "\r\033[1;33m┗(•ˇ_ˇ•)    \033[1;33m~>  \033[1;33m  \033[1;33m |\033[1;33m $time\033[1;33m | ";
usleep(123333);
echo "\r"; 
echo "\r\033[1;34m┗(•ˇ_ˇ•)      \033[1;34m~>\033[1;34m  \033[1;34m |\033[1;34m $time\033[1;34m | ";
usleep(123333);
echo "\r"; 
echo "\r\033[1;35m┗(•ˇ_ˇ•)       \033[1;35m~>\033[1;35m \033[1;35m |\033[1;35m $time\033[1;35m | ";
usleep(123333);
echo "\r"; 
echo "\r\033[1;36m┗(•ˇ_ˇ•)        \033[1;36m~>\033[1;36m\033[1;36m |\033[1;36m $time\033[1;36m | ";
usleep(166666);
echo "\r\033[1;36m┗(•ˇ_ˇ•)        \033[1;36m ~>\033[1;36m\033[1;36m|\033[1;36m $time\033[1;36m | ";
echo "\r                                          \r";
  }}}}
  }}
  }}}}
?>