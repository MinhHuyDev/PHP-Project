<?
/*
THỰC THI LÀM (PHẦN HEADER)
$head = [
"x-csrftoken: $cookie",
"x-ig-app-id: 1217981644879628",
"x-instagram-ajax: $xinta"
];
*/
error_reporting(0);
date_default_timezone_set("Asia/Ho_Chi_Minh");
@system('clear');
banner();
if (!file_exists('VipIG_Account.json')){
echo "\033[1;97m~ \033[1;92mUsername : \033[1;93m";
$_CHOOSE['user'] = trim(fgets(STDIN));
echo "\033[1;97m~ \033[1;92mPassword : \033[1;93m";
$_CHOOSE['pass'] = trim(fgets(STDIN));
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
checkhosting($_CHOOSE['user'],$_CHOOSE['pass']);
$log = login($_CHOOSE['user'],$_CHOOSE['pass']);
$checking_['method=GET[FALSE]'] = explode("<script>alert('",$log);
$checking_['method=GET[X]'] = explode("');",$checking_['method=GET[FALSE]'][1])[0];
if ($checking_['method=GET[X]'] == 'Sai tài khoản/mật khẩu, hãy đăng ký tài khoản, KHÔNG phải đăng nhập bằng Insta đâu!' or $checking_['method=GET[X]'] == 'Sai thông tin đăng nhập, bấm liên hệ/góp ý'){
echo "\033[1;97m~ \033[1;92mHệ Thống Không Tìm Thấy Username Hoặc Password Không Hợp Lệ!!\n";
die;
} else {
$setup = json_encode([
'username' => $_CHOOSE['user'],
'password' => $_CHOOSE['pass']
]);
file_put_contents('VipIG_Account.json',$setup);
} 
} else {
$json = json_decode(file_get_contents('VipIG_Account.json'),true);
$user = $json["username"];
echo "\033[1;97m~ \033[1;92mTiếp Tục Với ".$user." ? (y/n) : ";
$xyz = trim(fgets(STDIN));
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
if ($xyz == 'y' or $xyz == ''){
$pass = $json['password'];
checkhosting($user,$pass);
$log = login($user,$pass);
$checking_['method=GET[FALSE]'] = explode("<script>alert('",$log);
$checking_['method=GET[X]'] = explode("');",$checking_['method=GET[FALSE]'][1])[0];
if ($checking_['method=GET[X]'] == 'Sai tài khoản/mật khẩu, hãy đăng ký tài khoản, KHÔNG phải đăng nhập bằng Insta đâu!' or $checking_['method=GET[X]'] == 'Sai thông tin đăng nhập, bấm liên hệ/góp ý'){
echo "\033[1;97m~ \033[1;92mHệ Thống Không Tìm Thấy Username Hoặc Password Không Hợp Lệ!!\n";
die;
} 
} else {
@system('rm VipIG_Account.json');
echo "\033[1;97m~ \033[1;92mNhập Lại , Username VipIG : \033[1;93m";
$_CHOOSE['User[Try]'] = trim(fgets(STDIN));
echo "\033[1;97m~ \033[1;92mNhập Lại , Password VipIG : \033[1;93m";
$_CHOOSE['Pass[Try]'] = trim(fgets(STDIN));
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
checkhosting($_CHOOSE['User[Try]'],$_CHOOSE['Pass[Try]']);
$log = login($_CHOOSE['User[Try]'],$_CHOOSE['Pass[Try]']);
$checking_['method=GET[FALSE]'] = explode("<script>alert('",$log);
$checking_['method=GET[X]'] = explode("');",$checking_['method=GET[FALSE]'][1])[0];
if ($checking_['method=GET[X]'] == 'Sai tài khoản/mật khẩu, hãy đăng ký tài khoản, KHÔNG phải đăng nhập bằng Insta đâu!' or $checking_['method=GET[X]'] == 'Sai thông tin đăng nhập, bấm liên hệ/góp ý'){
echo "\033[1;97m~ \033[1;92mHệ Thống Không Tìm Thấy Username Hoặc Password Không Hợp Lệ!!\n";
die;
} else {
$setup = json_encode([
'username' => $_CHOOSE['User[Try]'],
'password' => $_CHOOSE['Pass[Try]']
]);
file_put_contents('VipIG_Account.json',$setup);
}
}
}
$x = getutilities('https://vipig.net/index.php');
//echo $x;
//file_put_contents('cookie_vipig.json',$x);
$get_sodu = explode('id="soduchinh">',$x);
$get_user = explode("class='text-center'>Chào mừng <i>",$x);
echo "\033[1;97m~ \033[1;92mUsername VipIG : \033[1;93m".explode('</i> đến với hệ thống tăng like, sub instagram',$get_user[1])[0]."\n";
echo "\033[1;97m~ \033[1;92mSố Dư Hiện Có : \033[1;93m".explode('</strong> VNĐ</a></li>',$get_sodu[1])[0]."\n";
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
echo "\033[1;97m~ \033[1;92mCookie IG : \033[1;93m";
$_CHOOSE['Cúc Ki In Ta Gan'] = trim(fgets(STDIN));
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
$ch = curl_init();
$head = [
"Host: www.instagram.com",
"referer: https://www.instagram.com",
"accept: */*",
"content-type: application/x-www-form-urlencoded",
"accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5"
];
curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/');
curl_setopt($ch, CURLOPT_USERAGENT, 'Auto Get Infomation By Nguyen Minh Huy');
curl_setopt($ch, CURLOPT_COOKIE, $_CHOOSE['Cúc Ki In Ta Gan']);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HEADER, TRUE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_ENCODING, '');
$data = curl_exec($ch);
//echo $data;
//$x = json_decode($data,true);
$xinta = explode('","',explode('"rollout_hash":"',$data)[1])[0];
$csrf_token = explode(';',explode('csrftoken=',$data)[1])[0];
$uid = explode('","is_joined_recently',explode('"id":"',$data)[1])[0];
//echo $uid;
if ($uid == NULL){
echo "\033[1;97m~ \033[1;92mCookie IG Không Hợp Lệ!!\n";
die;
}
echo "\033[1;97m~ \033[1;92mThực Thi Đặt Nick!!\r";
$ch = curl_init();
$head = [
'Host: vipig.net', 
'accept: application/json, text/javascript, */*; q=0.01', 
'x-requested-with: XMLHttpRequest', 
'user-agent: Auto Get Coins By Nguyen Minh Huy', 
'referer: https://vipig.net/cauhinh/',
];
curl_setopt($ch, CURLOPT_URL, "https://vipig.net/cauhinh/datnick.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, "VipIG_Cookie.txt");
curl_setopt($ch, CURLOPT_POSTFIELDS, "iddat[]=".$uid);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_ENCODING, "");
$data = curl_exec($ch);
//echo $data;
curl_close($ch);
$xyz = json_decode($data,true);
if ($xyz == 1){
echo "\033[1;97m~ \033[1;92mĐã Đặt IDIG \033[1;93m".$uid."\033[1;92m Làm Nick Chạy!!\n";
} else {
echo "\033[1;97m~ \033[1;92mVui Lòng Cấu Hình UID_IG \033[1;93m".$uid."\033[1;92m Tại VipIG Và Quay Lại!!\n";
die;
}
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
if (!file_exists('Z_Setting_VipIG.json')){
file_put_contents('Z_Setting_VipIG.json',json_encode([
'delaylike' => '5',
'blockjob' => '120',
'timeblock' => '120'
]));
}
if (file_exists('Z_Setting_VipIG.json')){
$json = json_decode(file_get_contents('Z_Setting_VipIG.json'), true);
$a = "\033[1;97m~ \033[1;92mDelay LikePost ( \033[1;93mConfirmation Delay\033[1;92m ) Hiện Tại Là \033[1;93m".$json["delaylike"]."\033[1;92m Giây
\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
\033[1;97m~ \033[1;92mKích Hoạt Chống Block Sau \033[1;93m".$json["blockjob"]."\033[1;92m Nhiệm Vụ
\033[1;97m~ \033[1;92mDelay Chống Block Hiện Tại Là \033[1;93m".$json["timeblock"]."\033[1;92m Giây
\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
\033[1;97m~ \033[1;93m1\033[1;97m ➜ \033[1;92mTiếp Tục Sử Dụng Settings_Delay Này!
\033[1;97m~ \033[1;93m2\033[1;97m ➜ \033[1;92mSử Dụng Delay Được Đề Xuất Bởi Tool!
\033[1;97m~ \033[1;93m3\033[1;97m ➜ \033[1;92mXoá Delay Này Và Tạo Delay Mới!
\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
\033[1;97m~ \033[1;92mChoose : \033[1;93m";  $len = strlen($a);for ($x = 0; $x < $len; $x++) {echo $a[$x];usleep(800);}
$_CHOOSE['settingdelay'] = trim(fgets(STDIN));
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
if ($_CHOOSE['settingdelay'] == 1){
echo "\033[1;97m~ \033[1;92mĐã Tiếp Tục Sử Dụng Settings_Delay Này!!\n";
$delaylike = $json["delaylike"];
$blockjob = $json["blockjob"];
$timeblock = $json["timeblock"];
sleep(3);
system('clear');
//end choose 1
}
if ($_CHOOSE['settingdelay'] == 2){
$delaylike = rand(3,7);
$blockjob = rand(100,200);
$timeblock = rand(100,180);
echo "\033[1;95mHệ Thống\033[1;97m → \033[1;92mDelay LikePost : \033[1;93m".$delaylike."\033[1;92m Giây\n";usleep(100000);
echo "\033[1;95mHệ Thống\033[1;97m → \033[1;92mChống Block Sau : \033[1;93m".$blockjob."\033[1;92m Nhiệm Vụ\n";usleep(100000);
echo "\033[1;95mHệ Thống\033[1;97m → \033[1;92mDelay Chống Block : \033[1;93m".$timeblock."\033[1;92m Giây\n";usleep(100000);
//end choose 2
}
if ($_CHOOSE['settingdelay'] == 3){
if (file_exists('Z_Setting_VipIG.json')){ system('rm Z_Setting_VipIG.json'); }
echo "\033[1;97m~ \033[1;92mDelay Like : \033[1;93m";
$delaylike = trim(fgets(STDIN));
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
echo "\033[1;97m~ \033[1;92mKích Hoạt Chống Block Sau Bao Nhiêu Nhiệm Vụ ? : \033[1;93m";
$blockjob = trim(fgets(STDIN));
echo "\033[1;97m~ \033[1;92mTime Delay Chống Block (Sẽ Kích Hoạt Sau \033[1;93m".$blockjob."\033[1;92m Job) : \033[1;93m";
$timeblock = trim(fgets(STDIN));
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
echo "\033[1;97m→ \033[1;95mSuccessfully\033[1;92m : Đã Lưu Setting_Delay Này!!\n";
$setting_delay = json_encode([
'delaylike' => $delaylike,
'blockjob' => $blockjob,
'timeblock' => $timeblock,
]);
file_put_contents('Z_Setting_VipIG.json', $setting_delay);
sleep(2.5);
@system('clear');
//end choose 3
}
}
$listvipig = array();
$listvipig_job = array('sub','like','cmt');
sleep(2.5);
@system('clear');
banner_in4($get_user,$uid,$get_sodu);
echo "\033[1;92mAUTO NHIỆM VỤ : LIKEPOST IG\n";
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
while (true){
$x = getjob("getpost.php");
if(is_array($x)){
foreach ($x as $GET){
$id_post = $GET["idpost"];
$url_post = $GET["link"];
echo "\033[1;97m~ \033[1;92mID : ".$id_post."\r";
$cailonmemay++;
$ccc = getpost($_CHOOSE['Cúc Ki In Ta Gan'],$csrf_token,$xinta,"like",$url_post);
$like = xyz($ccc,$_CHOOSE['Cúc Ki In Ta Gan'],$csrf_token,$xinta);
$curl = curl_init();
$head = [
'Host: vipig.net', 
'accept: application/json, text/javascript, */*; q=0.01', 
'x-requested-with: XMLHttpRequest', 
'user-agent: Auto Get Coins By Nguyen Minh Huy', 
'referer: https://vipig.net/kiemtien/',
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://vipig.net/kiemtien/nhantien.php');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, "VipIG_Cookie.txt");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('id' => $id_post)));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_ENCODING, TRUE);
//echo curl_exec($ch)."\n";
$cặc = curl_exec($ch);
$data = json_decode($cặc, true);
$x = getutilities('https://vipig.net/index.php');
$get_sodu = explode('id="soduchinh">',$x);
$xuhienco = explode('</strong> VNĐ</a></li>',$get_sodu[1])[0];
echo "\033[1;97m~ \033[1;92m[\033[1;9".rand(2,7)."m".$cailonmemay."\033[1;92m][\033[1;96m".date('H:i:s')."\033[1;92m] \033[1;97m➜\033[1;9".rand(2,7)."m LikePost \033[1;97m➜\033[1;92m ".$id_post." \033[1;97m➜\033[1;92m 200 \033[1;97m➜\033[1;92m ".$xuhienco."\n";
}
}
//kết thúc vòng lặp
}
// _________________________________ //
function xyz($url,$cookie,$csrf_token,$xinta){
$head = [
"x-csrftoken: $csrf_token",
"x-ig-app-id: 1217981644879628",
"x-instagram-ajax: $xinta"
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, "Auto LikePost By Nguyen Minh Huy");
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$resut = json_decode(curl_exec($ch),true);
if (is_null($resut)){
return '0';
}else if(strstr($resut['feedback_message'],'Chúng tôi hạn chế một số hoạt động để bảo vệ cộng đồng.')){
return '1';
}else if($resut['status'] == 'ok'){
return '2';
}
curl_close($ch);
}
function getpost($cookie,$csrf_token,$xinta,$type,$url){
$head = [
"x-csrftoken: $csrf_token",
"x-ig-app-id: 1217981644879628",
"x-instagram-ajax: $xinta"
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT, "Auto GetPostLink By Nguyen Minh Huy");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_HEADER, TRUE);
$data = curl_exec($ch);
$PULIC = explode('" />',explode('content="instagram://media?id=',$data)[1])[0];
if($type == 'like'){
 return 'https://www.instagram.com/web/likes/'.$PULIC.'/like/';
}else{
 return 'https://www.instagram.com/web/comments/'.$PULIC.'/add/';
}
}
function login($tk,$mk){
$ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://vipig.net/login.php');
curl_setopt($ch, CURLOPT_COOKIEJAR, 'VipIG_Cookie.txt');
curl_setopt($ch, CURLOPT_USERAGENT, 'Support Login By Z-Tool');
curl_setopt($ch, CURLOPT_POST, 3);
curl_setopt($ch, CURLOPT_POSTFIELDS,'username='.$tk.'&password='.$mk.'&submit=ĐĂNG NHẬP');
$data = curl_exec($ch);
return $data;
}
function checkhosting($tk,$mk){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://vipig.net/login.php');
curl_setopt($ch, CURLOPT_POSTFIELDS,'username='.urlencode($tk).'&password='.urlencode($mk).'&submit=ĐĂNG NHẬP');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, "VipIG_Cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "VipIG_Cookie.txt");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36");
$page = curl_exec($ch) or die(curl_error($ch));
$json = json_decode($page,true);
return true;
}
function getutilities($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, "VipIG_Cookie.txt");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36");
$json_home = curl_exec($ch);
curl_close($ch);
return $json_home;
}
function getjob($jobnv){
$url  = "https://vipig.net/kiemtien/".$jobnv;
$curl = curl_init();
$head = [
'Host: vipig.net', 
'accept: application/json, text/javascript, */*; q=0.01', 
'x-requested-with: XMLHttpRequest', 
'user-agent: Auto Get Jobs By Nguyen Minh Huy', 
'referer: https://tuongtaccheo.com/kiemtien/'.$jobnv.'cheo/',
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, "VipIG_Cookie.txt");
curl_setopt($ch, CURLOPT_HTTPGET, TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_ENCODING, "");
return json_decode(curl_exec($ch), true);
}
function nhanxu($url,$data,$xyz){
$curl = curl_init();
$head = [
'Host: vipig.net', 
'accept: application/json, text/javascript, */*; q=0.01', 
'x-requested-with: XMLHttpRequest', 
'user-agent: Auto Get Coins By Nguyen Minh Huy', 
'referer: https://vipig.net/kiemtien/',
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_COOKIEFILE, "VipIG_Cookie.txt");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_ENCODING, TRUE);
//echo curl_exec($ch)."\n";
$data = json_decode(curl_exec($ch), true);
return $data;
}
function banner(){
$a ="\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
           \033[1;91m███████╗  ████████╗ ██████╗  ██████╗ ██╗
           \033[1;93m╚══███╔╝  ╚══██╔══╝██╔═══██╗██╔═══██╗██║
             \033[1;94m███╔╝█████╗██║   ██║   ██║██║   ██║██║
            \033[1;96m███╔╝ ╚════╝██║   ██║   ██║██║   ██║██║
           \033[1;97m███████╗     ██║   ╚██████╔╝╚██████╔╝███████╗
           ╚══════╝     ╚═╝    ╚═════╝  ╚═════╝ ╚══════╝
\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
\033[1;97m~ \033[1;92mVipIG ┋ Vipig.net
\033[1;97m~ \033[1;94mBản Quyền : Nguyen Minh Huy
\033[1;97m~ \033[1;92mWritten : Nguyen Minh Huy
\033[1;97m~ \033[1;92mHệ Thống Dịch Vụ Facebook | Clone Số 1 Việt Nam | \033[1;97mShopqvinh.com
\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
$len = strlen($a);
for ($x = 0; $x < $len; $x++) {
echo $a[$x];
usleep(150);
}
}
function banner_in4($get_user,$uid,$get_sodu){
$a ="\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
           \033[1;91m███████╗  ████████╗ ██████╗  ██████╗ ██╗
           \033[1;93m╚══███╔╝  ╚══██╔══╝██╔═══██╗██╔═══██╗██║
             \033[1;94m███╔╝█████╗██║   ██║   ██║██║   ██║██║
            \033[1;96m███╔╝ ╚════╝██║   ██║   ██║██║   ██║██║
           \033[1;97m███████╗     ██║   ╚██████╔╝╚██████╔╝███████╗
           ╚══════╝     ╚═╝    ╚═════╝  ╚═════╝ ╚══════╝
\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
\033[1;97m~ \033[1;92mVipIG ┋ Vipig.net
\033[1;97m~ \033[1;94mBản Quyền : Nguyen Minh Huy
\033[1;97m~ \033[1;92mWritten : Nguyen Minh Huy
\033[1;97m~ \033[1;92mHệ Thống Dịch Vụ Facebook | Clone Số 1 Việt Nam | \033[1;97mShopqvinh.com
\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
\033[1;97m~ \033[1;92mUsername VipIG : \033[1;93m".explode('</i> đến với hệ thống tăng like, sub instagram',$get_user[1])[0]."
\033[1;97m~ \033[1;92mSố Dư Hiện Có : \033[1;93m".explode('</strong> VNĐ</a></li>',$get_sodu[1])[0]."
\033[1;97m~ \033[1;92mCấu Hình Hiện Tại : \033[1;93m".$uid."
\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
$len = strlen($a);
for ($x = 0; $x < $len; $x++) {
echo $a[$x];
usleep(150);
}
}