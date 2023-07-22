<?php
error_reporting(0);
session_start();
$vienden="\033[100m";
$viendo="\033[101m";
$vienluc="\033[102m";
$vienvang="\033[103m";
$vienxduong="\033[104m";
$vienhong="\033[105m";
$vienxnhac="\033[106m";
$vientrang="\033[107m";
$maufullxduong= "\e[1;47;34m";
$maufulldo= "\e[1;47;31m";
$maufullluc= "\e[1;47;32m";
$maufullxnhac= "\e[1;47;36m";
$maufullden= "\e[1;47;30m";
$maufullvang= "\e[1;47;33m";
$ress = "\033[0;32m";
$res = "\033[0;33m";
$trang = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[0;33m";
$banner = "\r";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
date_default_timezone_set("Asia/Ho_Chi_Minh");
$time = date('H:i:s');
$xx = "32121";
$sx = "32121";
$res="\033[0m"; 
$cookie ="__cfduid=da7c20351aae45e51079572c29d83c72b1619178194;machineliker_session=irbfs4kfrh6lpun9vlj7f16c3t;_ga=GA1.2.834028924.1619178199;_gid=GA1.2.1406937944.1619178199";
$useragent ="Mozilla/5.0 (Linux; Android 10; SM-M205G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.210 Mobile Safari/537.36";
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.machine-liker.com/login/");

curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);

$exp = explode('https://www.facebook.com/device?user_code=',$access)[1];
$codelogin = explode('"',$exp)[0];
@system("clear");
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n"; usleep(55777);
echo "     \033[1;91m   ███████╗       ████████╗ █████╗  █████╗ ██╗ \n";usleep(55777);
echo " \033[1;93m       ╚════██║       ╚══██╔══╝██╔══██╗██╔══██╗██║\n";usleep(55777);
echo "   \033[1;94m       ███╔═╝  █████╗  ██║   ██║  ██║██║  ██║██║\n";usleep(55777);
echo "      \033[1;36m  ██╔══╝    ╚════╝  ██║   ██║  ██║██║  ██║██║\n";usleep(55777);
echo "     \033[1;97m   ███████╗          ██║   ╚█████╔╝╚█████╔╝███████╗\n";usleep(55777);
echo "        ╚══════╝          ╚═╝    ╚════╝  ╚════╝ ╚══════╝\n";
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";usleep($sx);echo "\033[1;94mBản Quyền:";usleep($sx);echo "Nguyễn Minh Huy\n";usleep($sx);
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";usleep($sx);echo "\033[1;92mToolZVip | Buff Like/Cảm Xúc Facebook\n";usleep($sx);
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";usleep($sx);echo "\033[1;36mYoutube:Minh Huy Offcial\n";usleep($sx);
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";usleep($sx);echo "\033[1;93mHãy Tìm Đến Tôi Nếu Khi Bạn Cần\n";
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";usleep($sx);echo "\033[1;97mFb.com/UserName.MinhHuyOffcial | Zalo:0867536995\n";
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";
$ip = file_get_contents('https://vuongg.xyz/ip.php');
echo "\033[1;97m~ \033[1;92mIP Của Bạn Là\033[1;93m $ip\n";
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";usleep($sx);
echo "\033[1;97m~ \033[1;92mMua Clone Tại \033[1;97mhttps://giakhanhdz.xyz\n";usleep($sx);
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";usleep($sx);
echo "\033[1;97m~ \033[1;92mCopy & Paste Code Go To Chrome And Cấp Quyền Cho Nó!\n";
echo "\033[1;97m~ \033[1;92mCode:\033[1;93mhttps://www.facebook.com/device?user_code=$codelogin\n";
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";
echo "\033[1;97m~ \033[1;92mENTER KHI ĐÃ CẤP QUYỀN : ";
$nhiemvu = trim(fgets(STDIN));
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.machine-liker.com/auth/verify-login/");

curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
sleep(2);
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";
echo "\033[1;97m~ \033[1;93m1\033[1;97m • \033[1;92mAuto Buff Like Post\n";usleep($xx);
echo "\033[1;97m~ \033[1;93m2\033[1;97m • \033[1;92mAuto Buff Yêu Thích Post\n";usleep($xx);
echo "\033[1;97m~ \033[1;93m3\033[1;97m • \033[1;92mAuto Buff Haha Post\n";usleep($xx);
echo "\033[1;97m~ \033[1;93m4\033[1;97m • \033[1;92mAuto Buff Wow Post\n";usleep($xx);
echo "\033[1;97m~ \033[1;93m5\033[1;97m • \033[1;92mAuto Buff Sad Post\n";usleep($xx);
echo "\033[1;97m~ \033[1;93m6\033[1;97m • \033[1;92mAuto Buff Angry Post\n";usleep($xx);
echo "\033[1;97m~ \033[1;93m7\033[1;97m • \033[1;92mAuto Buff ALL Reactions\n";usleep($xx);                          
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";        
echo "\033[1;97m~ \033[1;92mChoose : $vang";
$nhap = trim(fgets(STDIN));
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";
if ($nhap > 8) {
exit("\033[1;97m~\033[1;92m Ngu :)\n");
}
echo "\033[1;97m~ \033[1;92mUID Post (Get ID-Post:\033[1;93mvnlike.net/ids/get-post-id.php\033[1;92m) : $vang";
$id =trim(fgets(STDIN));
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";
if ($id == "") {
exit("\033[1;97m~\033[1;93m Sai UID POST :)\n");
}
if($nhap == '1'){
while(true){ 

$url = "https://www.machine-liker.com/ajax/send-reactions/";

$data = 'post_id='.$id.'&reactions=1&limit=100';

$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_PORT => "443",
CURLOPT_URL => "$url",
CURLOPT_ENCODING => "",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_TIMEOUT => 30,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => $data,
CURLOPT_HTTPHEADER => array(
"Host:www.machine-liker.com",
"x-requested-with:XMLHttpRequest",
"user-agent:$useragent",
"content-type:application/x-www-form-urlencoded; charset=UTF-8",
"origin:https://www.machine-liker.com",
"referer:https://www.machine-liker.com/auto-reactions/",
"cookie:$cookie",
)));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
$ok = $json['success'];
$info = $json['info']['message'];
$so++;$time = date('H:i:s');

echo $trang."[\033[1;91mN.M.HUY\033[1;97m]\033[1;91m[\033[1;96m$so\033[1;91m][\033[1;96m$time\033[1;91m]\033[1;91m | \033[1;92mLIKE POST\033[1;91m | \033[1;32m$id\033[1;31m |\033[1;92m DONE :)\n"; 
for ($time=890;$time>-1;$time--){
echo "\r".$res."~".$trang."[".$luc."|".$trang."]$luc Waiting For \033[1;92m$time      \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$do."/".$trang."]$luc Waiting For \033[1;91m$time        \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$vang."-".$trang."]$luc Waiting For \033[1;93m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$hong."\\".$trang."]$luc Waiting For \033[1;95m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$den."|".$trang."]$luc Waiting For \033[1;90m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$xnhac."/".$trang."]$luc Waiting For \033[1;96m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$xduong."-".$trang."]$luc Waiting For \033[1;94m$time          \r";
usleep(125000);
echo "\r".$res."~".$do."[".$trang."\\".$do."]$luc Waiting For \033[1;97m$time          \r";
usleep(125000);
}
echo "$res                                  \r";}}
if($nhap == '2'){
while(true){ 

$url = "https://www.machine-liker.com/api/send-reactions/";

$data = 'post_id='.$id.'&reactions=2&limit=100';

$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_PORT => "443",
CURLOPT_URL => "$url",
CURLOPT_ENCODING => "",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_TIMEOUT => 30,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => $data,
CURLOPT_HTTPHEADER => array(
"Host:www.machine-liker.com",
"x-requested-with:XMLHttpRequest",
"user-agent:$useragent",
"content-type:application/x-www-form-urlencoded; charset=UTF-8",
"origin:https://www.machine-liker.com",
"referer:https://www.machine-liker.com/auto-reactions/",
"cookie:$cookie",
)));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
$ok = $json['success'];
$info = $json['info']['message'];
$so++;$time = date('H:i:s');

echo $trang."[\033[1;91mN.M.HUY\033[1;97m]\033[1;91m[\033[1;96m$so\033[1;91m][\033[1;96m$time\033[1;91m]\033[1;91m | \033[1;92mYÊU THÍCH POST POST\033[1;91m | \033[1;32m$id\033[1;31m |\033[1;92m DONE :)\n"; 
for ($time=890;$time>-1;$time--){
echo "\r".$res."~".$trang."[".$luc."|".$trang."]$luc Waiting For \033[1;92m$time      \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$do."/".$trang."]$luc Waiting For \033[1;91m$time        \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$vang."-".$trang."]$luc Waiting For \033[1;93m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$hong."\\".$trang."]$luc Waiting For \033[1;95m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$den."|".$trang."]$luc Waiting For \033[1;90m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$xnhac."/".$trang."]$luc Waiting For \033[1;96m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$xduong."-".$trang."]$luc Waiting For \033[1;94m$time          \r";
usleep(125000);
echo "\r".$res."~".$do."[".$trang."\\".$do."]$luc Waiting For \033[1;97m$time          \r";
usleep(125000);
}
echo "$res                                  \r";}}
if($nhap == '3'){
while(true){ 
$url = "https://www.machine-liker.com/ajax/send-reactions/";

$data = 'post_id='.$id.'&reactions=4&limit=100';

$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_PORT => "443",
CURLOPT_URL => "$url",
CURLOPT_ENCODING => "",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_TIMEOUT => 30,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => $data,
CURLOPT_HTTPHEADER => array(
"Host:www.machine-liker.com",
"x-requested-with:XMLHttpRequest",
"user-agent:$useragent",
"content-type:application/x-www-form-urlencoded; charset=UTF-8",
"origin:https://www.machine-liker.com",
"referer:https://www.machine-liker.com/auto-reactions/",
"cookie:$cookie",
)));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
$ok = $json['success'];
$info = $json['info']['message'];
$so++;$time = date('H:i:s');
echo $trang."[\033[1;91mN.M.HUY\033[1;97m]\033[1;91m[\033[1;96m$so\033[1;91m][\033[1;96m$time\033[1;91m]\033[1;91m | \033[1;92mHAHA POST\033[1;91m | \033[1;32m$id\033[1;31m |\033[1;92m DONE :)\n"; 
for ($time=890;$time>-1;$time--){
echo "\r".$res."~".$trang."[".$luc."|".$trang."]$luc Waiting For \033[1;92m$time      \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$do."/".$trang."]$luc Waiting For \033[1;91m$time        \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$vang."-".$trang."]$luc Waiting For \033[1;93m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$hong."\\".$trang."]$luc Waiting For \033[1;95m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$den."|".$trang."]$luc Waiting For \033[1;90m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$xnhac."/".$trang."]$luc Waiting For \033[1;96m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$xduong."-".$trang."]$luc Waiting For \033[1;94m$time          \r";
usleep(125000);
echo "\r".$res."~".$do."[".$trang."\\".$do."]$luc Waiting For \033[1;97m$time          \r";
usleep(125000);
}
echo "$res                                  \r";}}
if($nhap == '4'){
while(true){ 

$url = "https://www.machine-liker.com/ajax/send-reactions/";

$data = 'post_id='.$id.'&reactions=3&limit=100';

$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_PORT => "443",
CURLOPT_URL => "$url",
CURLOPT_ENCODING => "",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_TIMEOUT => 30,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => $data,
CURLOPT_HTTPHEADER => array(
"Host:www.machine-liker.com",
"x-requested-with:XMLHttpRequest",
"user-agent:$useragent",
"content-type:application/x-www-form-urlencoded; charset=UTF-8",
"origin:https://www.machine-liker.com",
"referer:https://www.machine-liker.com/auto-reactions/",
"cookie:$cookie",
)));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
$ok = $json['success'];
$info = $json['info']['message'];
$so++;$time = date('H:i:s');

echo $trang."[\033[1;91mN.M.HUY\033[1;97m]\033[1;91m[\033[1;96m$so\033[1;91m][\033[1;96m$time\033[1;91m]\033[1;91m | \033[1;92mWOW POST\033[1;91m | \033[1;32m$id\033[1;31m |\033[1;92m DONE :)\n"; 
for ($time=890;$time>-1;$time--){
echo "\r".$res."~".$trang."[".$luc."|".$trang."]$luc Waiting For \033[1;92m$time      \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$do."/".$trang."]$luc Waiting For \033[1;91m$time        \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$vang."-".$trang."]$luc Waiting For \033[1;93m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$hong."\\".$trang."]$luc Waiting For \033[1;95m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$den."|".$trang."]$luc Waiting For \033[1;90m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$xnhac."/".$trang."]$luc Waiting For \033[1;96m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$xduong."-".$trang."]$luc Waiting For \033[1;94m$time          \r";
usleep(125000);
echo "\r".$res."~".$do."[".$trang."\\".$do."]$luc Waiting For \033[1;97m$time          \r";
usleep(125000);
}
echo "$res                                  \r";}}
if($nhap == '5'){
while(true){ 
$url = "https://www.machine-liker.com/ajax/send-reactions/";
$data = 'post_id='.$id.'&reactions=7&limit=100';
$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_PORT => "443",
CURLOPT_URL => "$url",
CURLOPT_ENCODING => "",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_TIMEOUT => 30,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => $data,
CURLOPT_HTTPHEADER => array(
"Host:www.machine-liker.com",
"x-requested-with:XMLHttpRequest",
"user-agent:$useragent",
"content-type:application/x-www-form-urlencoded; charset=UTF-8",
"origin:https://www.machine-liker.com",
"referer:https://www.machine-liker.com/auto-reactions/",
"cookie:$cookie",
)));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
$ok = $json['success'];
$info = $json['info']['message'];
$so++;$time = date('H:i:s');

echo $trang."[\033[1;91mN.M.HUY\033[1;97m]\033[1;91m[\033[1;96m$so\033[1;91m][\033[1;96m$time\033[1;91m]\033[1;91m | \033[1;92mSAD POST\033[1;91m | \033[1;32m$id\033[1;31m |\033[1;92m DONE :)\n"; 
for ($time=890;$time>-1;$time--){
echo "\r".$res."~".$trang."[".$luc."|".$trang."]$luc Waiting For \033[1;92m$time      \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$do."/".$trang."]$luc Waiting For \033[1;91m$time        \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$vang."-".$trang."]$luc Waiting For \033[1;93m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$hong."\\".$trang."]$luc Waiting For \033[1;95m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$den."|".$trang."]$luc Waiting For \033[1;90m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$xnhac."/".$trang."]$luc Waiting For \033[1;96m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$xduong."-".$trang."]$luc Waiting For \033[1;94m$time          \r";
usleep(125000);
echo "\r".$res."~".$do."[".$trang."\\".$do."]$luc Waiting For \033[1;97m$time          \r";
usleep(125000);
}
echo "$res                                  \r";}}
if($nhap == '6'){
while(true){ 

$url = "https://www.machine-liker.com/ajax/send-reactions/";

$data = 'post_id='.$id.'&reactions=8&limit=100';

$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_PORT => "443",
CURLOPT_URL => "$url",
CURLOPT_ENCODING => "",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_TIMEOUT => 30,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => $data,
CURLOPT_HTTPHEADER => array(
"Host:www.machine-liker.com",
"x-requested-with:XMLHttpRequest",
"user-agent:$useragent",
"content-type:application/x-www-form-urlencoded; charset=UTF-8",
"origin:https://www.machine-liker.com",
"referer:https://www.machine-liker.com/auto-reactions/",
"cookie:$cookie",
)));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
$ok = $json['success'];
$info = $json['info']['message'];
$so++;$time = date('H:i:s');

echo $trang."[\033[1;91mN.M.HUY\033[1;97m]\033[1;91m[\033[1;96m$so\033[1;91m][\033[1;96m$time\033[1;91m]\033[1;91m | \033[1;92mANGRY POST\033[1;91m | \033[1;32m$id\033[1;31m |\033[1;92m DONE :)\n"; 
for ($time=890;$time>-1;$time--){
echo "\r".$res."~".$trang."[".$luc."|".$trang."]$luc Waiting For \033[1;92m$time      \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$do."/".$trang."]$luc Waiting For \033[1;91m$time        \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$vang."-".$trang."]$luc Waiting For \033[1;93m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$hong."\\".$trang."]$luc Waiting For \033[1;95m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$den."|".$trang."]$luc Waiting For \033[1;90m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$xnhac."/".$trang."]$luc Waiting For \033[1;96m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$xduong."-".$trang."]$luc Waiting For \033[1;94m$time          \r";
usleep(125000);
echo "\r".$res."~".$do."[".$trang."\\".$do."]$luc Waiting For \033[1;97m$time          \r";
usleep(125000);
}
echo "$res                                  \r";}}
if($nhap == '7'){
while(true){ 
if(!$sock = @fsockopen('www.google.com', 80))
{
    echo '\033[1;97m~ \033[1;92mKiểm Tra Wifi Đeeee!';
    exit();
}
$url = "https://www.machine-liker.com/ajax/send-reactions/";

$data = 'post_id='.$id.'&reactions=1%2C2%2C4%2C3%2C7%2C8&limit=100';

$mr = curl_init();
curl_setopt_array($mr, array(
CURLOPT_PORT => "443",
CURLOPT_URL => "$url",
CURLOPT_ENCODING => "",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_SSL_VERIFYPEER => false,
CURLOPT_TIMEOUT => 30,
CURLOPT_CUSTOMREQUEST => "POST",
CURLOPT_POSTFIELDS => $data,
CURLOPT_HTTPHEADER => array(
"Host:www.machine-liker.com",
"x-requested-with:XMLHttpRequest",
"user-agent:$useragent",
"content-type:application/x-www-form-urlencoded; charset=UTF-8",
"origin:https://www.machine-liker.com",
"referer:https://www.machine-liker.com/auto-reactions/",
"cookie:$cookie",
)));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
$ok = $json['success'];
$info = $json['info']['message'];
$so++;$time = date('H:i:s');
echo $trang."[\033[1;91mN.M.HUY\033[1;97m]\033[1;91m[\033[1;96m$so\033[1;91m][\033[1;96m$time\033[1;91m]\033[1;91m | \033[1;92mALL REACTIONS POST\033[1;91m | \033[1;32m$id\033[1;31m |\033[1;92m DONE :)\n"; 
for ($time=890;$time>-1;$time--){
echo "\r".$res."~".$trang."[".$luc."|".$trang."]$luc Waiting For \033[1;92m$time      \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$do."/".$trang."]$luc Waiting For \033[1;91m$time        \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$vang."-".$trang."]$luc Waiting For \033[1;93m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$hong."\\".$trang."]$luc Waiting For \033[1;95m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$den."|".$trang."]$luc Waiting For \033[1;90m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$xnhac."/".$trang."]$luc Waiting For \033[1;96m$time          \r";
usleep(125000);
echo "\r".$res."~".$trang."[".$xduong."-".$trang."]$luc Waiting For \033[1;94m$time          \r";
usleep(125000);
echo "\r".$res."~".$do."[".$trang."\\".$do."]$luc Waiting For \033[1;97m$time          \r";
usleep(125000);
}
echo "$res                                  \r";}}