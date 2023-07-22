<?php
$arr=[];
$loai=[];
$dem1=0;
$banner="
\033[1;33m█████╗░░░░███╗░░ ███╗░░███████╗
\033[1;34m██╔══██╗░░████╗░████║░░██╔════╝
\033[1;31m███████║░░██╔████╔██║░░█████╗  
\033[1;36m██╔══██║░░██║╚██╔╝██║░░██╔══╝  
\033[1;35m██║░░██║░░██  ╚═╝░██║░░██║░░     
\033[1;33m╚═╝░░ ╚═╝╚═╝     ╚═╝░░ ╚═╝     ";
@system('clear');
echo $res."~ ".$green."Nhập Dữ Liệu Vào Tool Qua File ".$yellow."cookienuoi.txt".$green." (Mỗi Cookie 1 Dòng) ? (y/n) : ";
	$nhap=trim(fgets(STDIN));
	if ($nhap=='y'){
echo $green."Vui Lòng Thêm Cookie Vào File cookienuoi.txt (Mỗi Nội Dung 1 Dòng)\n";
if (!file_exists('cookienuoi.txt')){
	echo $green."Vui Lòng Thêm Cookie Vào File cookienuoi.txt (Mỗi Nội Dung 1 Dòng)\n";
	exit();
	}else{
		$js = fread(fopen("cookienuoi.txt","r"),filesize("cookienuoi.txt"));
		if (empty($js)){
			echo $green."Vui Lòng Thêm Cookie Vào File cookienuoi.txt (Mỗi Nội Dung 1 Dòng)\n";
			exit();
			}
$jsdec1    = explode(PHP_EOL,$js);
$count=count($jsdec1);
		}
		}else{
			$i2=0;
			$jsdec=[];
	echo $res."~ ".$green."Bạn Muốn Nhập Bao Nhiêu Cookie : ";
$tk2=trim(fgets(STDIN));
while ($i2  < $tk2){
	$i2++;
	echo $res."~ ".$green."Nhập Cookie Thứ $i2 : ";
	$took=trim(fgets(STDIN));
		Array_push($token, $jsdec1);
		}
			$count=count($jsdec);
			}
@system('clear');
echo "$banner\n";
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Tool Auto Nuôi Facebook\n";usleep(100000);
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$bluelight." Bản Quyền : AT MOD FF\n";usleep(100000);
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$yellow." https://www.facebook.com/100048774468327\n";usleep(100000);
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Donate Lấy Động Lực Làm Tool\n";usleep(100000);
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$red." Ví Thẻ Siêu Rẻ  : ".$bluelight."gaudotv12@gmail.com\n";usleep(100000);
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Số Acc Chạy :$lightblue $count\n";
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Nhập [1] Chế Độ Auto Gửi Lời Mời Kết Bạn Từ Gợi Ý\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Nhập [2] Chế Độ Auto Chấp Nhận Lời Mời Kết Bạn\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Nhập [3] Chế Độ Auto Tương Tác NewsFeed\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Nhập Số : ";
$chedo=trim(fgets(STDIN));
if ($chedo=='3'){
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Like ? (y/n) : ";
$testlike=trim(fgets(STDIN));
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Love ? (y/n) : ";
$testlove=trim(fgets(STDIN));
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Wow ? (y/n) : ";
$testwow=trim(fgets(STDIN));
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Haha ? (y/n) : ";
$testhaha=trim(fgets(STDIN));
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Sad ? (y/n) : ";
$testsad=trim(fgets(STDIN));
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo $green."                   Thêm Nội Dung Vào noidung.txt\n";
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Comment ? (y/n) : ";
$testcmt=trim(fgets(STDIN));
if ($testcmt=='y'){
	echo $res."~ ".$green."Nhập Dữ Liệu Vào Tool Qua File ".$yellow."noidungnuoi.txt".$green." (Mỗi Cookie 1 Dòng) ? (y/n) : ";
	$nhap=trim(fgets(STDIN));
	if ($nhap=='y'){
	echo $green."Vui Lòng Thêm Cookie Vào File noidungnuoi.txt (Mỗi Nội Dung 1 Dòng)\n";
	if (!file_exists('noidungnuoi.txt')){
	echo $green."Vui Lòng Thêm Cookie Vào File noidungnuoi.txt (Mỗi Nội Dung 1 Dòng)\n";
	exit();
	}else{
		$js = fread(fopen("noidungnuoi.txt","r"),filesize("noidungnuoi.txt"));
		if (empty($js)){
			echo $green."Vui Lòng Thêm Cookie Vào File noidungnuoi.txt (Mỗi Nội Dung 1 Dòng)\n";
			exit();
			}
$jsdec    = explode(PHP_EOL,$js);
		}
		}else{
			$i2=0;
			$jsdec=[];
	echo $green."Bạn Muốn Nhập Bao Nhiêu Nội Dung : ";
$tk2=trim(fgets(STDIN));
while ($i2  < $tk2){
	$i2++;
	echo $green."Nhập Nội Dung Thứ $i2 : ";
	$took=trim(fgets(STDIN));
		Array_push($jsdec, $took);
		}
			$count=count($jsdec);
			}
	}
if ($testlike=='y'){
	array_push($loai, 'LIKE');
	}
	if ($testlove=='y'){
	array_push($loai, 'LOVE');
	}
	if ($testwow=='y'){
	array_push($loai, 'WOW');
	}
	if ($testhaha=='y'){
	array_push($loai, 'HAHA');
	}
	if ($testsad=='y'){
	array_push($loai, 'SAD');
	}
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
}
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Nhập Time Delay : ";
$delay=trim(fgets(STDIN));
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo "$res ~".$red."[".$green."✓".$red."]".$res." =>".$green." Sau Bao Nhiêu Nhiệm Vụ Thì Chuyển Acc : ";
$jobsck=trim(fgets(STDIN));
while ($chedo=='1'){
	foreach ($jsdec1 as $cookie){
	
		$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "authority: m.facebook.com";
$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
$head[] = "cache-control: max-age=0";
$head[] = "upgrade-insecure-requests: 1";
$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$head[] = "sec-fetch-site: none";
$head[] = "sec-fetch-mode: navigate";
$head[] = "sec-fetch-user: ?1";
$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0]){
$access_token = explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
}else{exit($red."Cookie Die !!");}
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'}){
	$ten = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'};	
}else{exit($red."Cookie Die !!");}
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
echo $res."~ ".$green."Tên FB :$bluelight $ten\n";
for ($makep=38;$makep > 0;$makep--){
echo $res."-";
usleep(2500);
echo $red."-";
}
echo "\n";
$chuyenacc=0;
$url = 'https://mbasic.facebook.com/friends/center/suggestions/?mff_nav=1&ref=wizard';
$head_fb=array(
  'Host:mbasic.facebook.com',
  'user-agent:Mozilla/5.0 (Linux; Android 10; RMX1929) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Mobile Safari/537.36',
  'accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5',
  'cookie:'.$cookie,
);
$ch = curl_init();
curl_setopt_array($ch, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $head_fb));
$data = curl_exec($ch);
curl_close($ch);
//print_r($data);
if(strpos($data, 'Không có gợi ý') == true){
  echo "\nKhông có gợi ý kết bạn!\n";
}
else{
$listid = explode('/a/mobile/friends/add_friend.php?id=',$data);
array_splice($listid,0,1);
foreach ($listid as $key){
$id = explode('&amp',$key)[0];
$linkid='https://mbasic.facebook.com/profile.php?id='.$id;
$ch = @curl_init();
curl_setopt($ch, CURLOPT_URL, $linkid);
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "Accept-Language: en-us,en;q=0.5";
curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
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
        echo "$res ~".$yellow."[".$red."×".$yellow."]".$res." =>".$red." Die Cookie Chuyển Nick!!!\n";
exit();
}
preg_match('#href="/a/mobile/friends/profile_add_friend.php?(.+?)"#is', $page, $_link);
$link= html_entity_decode('https://mbasic.facebook.com/a/mobile/friends/profile_add_friend.php'.$_link[1]);
curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$fl=curl_exec($ch);
curl_close($ch);
$dem1++;$chuyenacc++;echo $res."~".$red."[$green".$dem1."$red]$res => $green".$id."$red |".$green." Đã Gửi Lời Mời Kết Bạn\n";
if ($chuyenacc==$jobsck){
$chuyenacc=0;

	echo $res."~ ".$green."Đã Làm $yellow$jobsck ".$green."Nhiệm Vụ\n";
	break;
	}
for ($time=$delay;$time>-1;$time--)
{ 
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi  $time      \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time        \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
}
echo "$res                                  \r";
}}}
}
while ($chedo=='2'){
	foreach ($jsdec1 as $cookie){
	
		$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "authority: m.facebook.com";
$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
$head[] = "cache-control: max-age=0";
$head[] = "upgrade-insecure-requests: 1";
$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$head[] = "sec-fetch-site: none";
$head[] = "sec-fetch-mode: navigate";
$head[] = "sec-fetch-user: ?1";
$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0]){
$access_token = explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
}else{exit($red."Cookie Die !!");}
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'}){
	$ten = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'};	
}else{exit($red."Cookie Die !!");}
echo $res."~ ".$green."Tên FB :$bluelight $ten\n";
$chuyenacc=0;
	
	$url = 'https://mbasic.facebook.com/friends/center/requests/#friends_center_main';
$head_fb=array(
  'Host:mbasic.facebook.com',
  'user-agent:Mozilla/5.0 (Linux; Android 10; RMX1929) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Mobile Safari/537.36',
  'accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5',
  'cookie:'.$cookie,
);
$ch = curl_init();
curl_setopt_array($ch, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $head_fb));
$data = curl_exec($ch);
curl_close($ch);
$listid = explode('/a/notifications.php?confirm=',$data);
	foreach ($listid as $key){
		$id = explode('&amp',$key)[0];
		if (is_numeric($id)){
		$linkid='https://mbasic.facebook.com/profile.php?id='.$id;
$ch = @curl_init();
curl_setopt($ch, CURLOPT_URL, $linkid);
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "Accept-Language: en-us,en;q=0.5";
curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
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
preg_match('#href="/a/mobile/friends/profile_add_friend.php?(.+?)"#is', $page, $_link);
$link= html_entity_decode('https://mbasic.facebook.com/a/mobile/friends/profile_add_friend.php'.$_link[1]);
curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$fl=curl_exec($ch);
curl_close($ch);
$dem1++;$chuyenacc++;echo $res."~".$red."[$green".$dem1."$red]$res => $green".$id."$red |".$green." Đã Chấp Nhận Lời Mời Kết Bạn\n";
if ($chuyenacc==$jobsck){
$chuyenacc=0;

	echo $res."~ ".$green."Đã Làm $yellow$jobsck ".$green."Nhiệm Vụ\n";
	break;
	}
for ($time=$delay;$time>-1;$time--)
{ 
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi  $time      \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time        \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
}
echo "$res                                  \r";
		}}
	}
}



while ($chedo=='3'){
	foreach ($jsdec1 as $cookie){
	
		$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "authority: m.facebook.com";
$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
$head[] = "cache-control: max-age=0";
$head[] = "upgrade-insecure-requests: 1";
$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$head[] = "sec-fetch-site: none";
$head[] = "sec-fetch-mode: navigate";
$head[] = "sec-fetch-user: ?1";
$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
if (explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0]){
$access_token = explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
}else{exit($red."Cookie Die !!");}
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'}){
	$ten = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'};	
}else{exit($red."Cookie Die !!");}
echo $res."~ ".$green."Tên FB :$bluelight $ten\n";
$chuyenacc=0;
	$url="https://mbasic.facebook.com/";
	$head_fb=array(
  'Host:mbasic.facebook.com',
  'user-agent:Mozilla/5.0 (Linux; Android 10; RMX1929) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.105 Mobile Safari/537.36',
  'accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
  'accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5',
  'cookie:'.$cookie,
);
$ch = curl_init();
curl_setopt_array($ch, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_ENCODING => "",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => $head_fb));
$data = curl_exec($ch);
curl_close($ch);
$listid = explode('/story.php?',$data);
	foreach ($listid as $key){
		$ids= explode('story_fbid=', $key);
		$id = explode('&amp',$ids[1])[0];
		
		if (is_numeric($id)){
			if (!in_array($id, $arr)){
				if ($testcmt=='y'){
 $msg = $jsdec[rand(0, count($jsdec)-1)];
 }
$type = $loai[rand(0, count($loai)-1)];
if ($type=='LIKE'){
			$linkid='https://mbasic.facebook.com/'.$id;
$ch = @curl_init();
curl_setopt($ch, CURLOPT_URL, $linkid);
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "Accept-Language: en-us,en;q=0.5";
curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
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
        exit("$res ~".$yellow."[".$red."×".$yellow."]".$res." =>".$red." Die Cookie !!!\n");
}
$te = explode('<head><title>',$page);
$ten = explode(' | Facebook',$te[1])[0];
preg_match('#href="/a/like.php?(.+?)"#is', $page, $_link);
$link= html_entity_decode('https://mbasic.facebook.com/a/like.php'.$_link[1]);
curl_setopt($ch, CURLOPT_URL, $link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_exec($ch);
curl_close($ch);
}else{
	$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "Accept-Language: en-us,en;q=0.5";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
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
	$te = explode('<head><title>',$page);
$ten = explode(' | Facebook',$te[1])[0];
	if ($id2 != $id && explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0]){
		$get = explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0];
	}else{
		$get = $id;
	}
	$link = 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id='.$get;
	curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$cx = curl_exec($ch);
	$haha = explode('<a href="',$cx);
	if ($type == 'LOVE'){
		$haha2 = explode('" style="display:block"',$haha[2])[0];
	}else if ($type == 'WOW'){
		$haha2 = explode('" style="display:block"',$haha[5])[0];
	}else if ($type == 'HAHA'){
		$haha2 = explode('" style="display:block"',$haha[4])[0];
	}else if ($type == 'SAD'){
		$haha2 = explode('" style="display:block"',$haha[6])[0];
	}else{
		$haha2 = explode('" style="display:block"',$haha[7])[0];
	}
	$link2 = html_entity_decode($haha2);	

	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com'.$link2);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_exec($ch);
	curl_close($ch);
	}
array_push($arr, $id);
if ($testcmt=='y'){
$ch=curl_init();
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/comments');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$data = array('message' => $msg,'access_token' => $access_token);
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	}
$dem1++;$chuyenacc++;echo $res."~".$red."[$green".$dem1."$red]$res => $green".$id."$red |".$green." Đã $type Bài Viết Của $ten\n";
if ($testcmt=='y'){
echo "Đã Comment : $msg\n";
}
			if ($chuyenacc==$jobsck){
$chuyenacc=0;

	echo $res."~ ".$green."Đã Làm $yellow$jobsck ".$green."Nhiệm Vụ\n";
	break;
	}
for ($time=$delay;$time>-1;$time--)
{ 
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi  $time      \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time        \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."|".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."/".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."-".$red."]$blue Vui Lòng Đợi $time          \r";
usleep(125000);
echo "\r".$res."~".$red."[".$yellow."\\".$red."]".$red."$blue Vui Lòng Đợi $time          \r";
usleep(125000);
}
echo "$res                                  \r";
}}
	}
}}
   
?>