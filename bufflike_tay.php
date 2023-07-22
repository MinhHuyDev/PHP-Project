<?
error_reporting(0);
date_default_timezone_set("Asia/Ho_Chi_Minh");
system("clear");
banner();
if(!file_exists('MCL_Cookie.json')){
echo "\033[1;97m\033[1;97m~ \033[1;92mCookie Manchine-liker : ";
$_CHOOSE['CookieMCL'] = trim(fgets(STDIN));
} else {
echo "\033[1;97m~ \033[1;92mSử Dụng Lại Cookie Manchine-liker Cũ ? (y/n) : ";
$_CHOOSE['Cofirm'] = trim(fgets(STDIN));
if ($_CHOOSE['Cofirm'] == 'y'){
$_CHOOSE['CookieMCL'] = file_get_contents('MCL_Cookie.json');
} else {
@system('rm MCL_Cookie.json');
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
echo "\033[1;97m~ \033[1;92mNhập Lại , Cookie Manchine-liker : ";
$_CHOOSE['CookieMCL'] = trim(fgets(STDIN));
file_put_contents('MCL_Cookie.json',$_CHOOSE['CookieMCL']);
}
}
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
$data = home($_CHOOSE['CookieMCL']);
$datastt = explode ('Status:</strong> <span class="badge bg-success">',$data);
$accesstoken = explode('access_token=',$data);
$in4 = getin4($accesstoken);
if ($in4["id"] !== null){
echo "\033[1;97m~ \033[1;92mTài Khoản : ".$in4["id"]."\n";
echo "\033[1;97m~ \033[1;92mTrạng Trái : ".explode('</span></h5></div><div',$datastt[1])[0]."\n";
if (!file_exists('MCL_Cookie.json')){ file_put_contents('MCL_Cookie.json',$_CHOOSE['CookieMCL']); }
} else {
echo "\033[1;97m~ \033[1;92mCookie Manchine-liker Không Hợp Lệ!!!\n";
die;
}
$reactions = array();
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
if (!file_exists('MCL_IDPost.json')){
echo "\033[1;97m~ \033[1;92mIDFB / Page : ";
$id = trim(fgets(STDIN));
echo "\033[1;97m~ \033[1;92mID Bài Viết : ";
$idpost = trim(fgets(STDIN));
$idregencode = "".$idpost."&story=".$id."_".$idpost."";
//echo $id_['^^'];
//https://www.machine-liker.com/send-reactions/?post_id=538460403903599&story=100032189318161_538460403903599
if ($id == null or $idpost == null){
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
echo "\033[1;97m~ \033[1;92mIDFB_IDPost Không Hợp Lệ!!\n";
die;
} else {
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
echo "\033[1;97m~ \033[1;92mIDFB / PAGE Post : ".$id."\n";
if (!file_exists('MCL_IDPost.json')){ file_put_contents('MCL_IDPost.json',"".$id."_".$idpost.""); }
}
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
} else {
$id = file_get_contents('MCL_IDPost.json');
echo "\033[1;97m~ \033[1;92mSử Dụng Lại IDPost ".$id." ? (y/n) : ";
$_CHOOSE['CofirmIDPost'] = trim(fgets(STDIN));
if ($_CHOOSE['CofirmIDPost'] == 'y' or $_CHOOSE['CofirmIDPost'] == ''){
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
$data   = fread(fopen("MCL_IDPost.json", "r"), filesize("MCL_IDPost.json"));
$id = explode('_',$data)[0];
$idpost = explode('_',$data)[1];
$idregencode = "".$idpost."&story=".$id."_".$idpost."";
} else {
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
@system('rm MCL_IDPost.json');
echo "\033[1;97m~ \033[1;92mNhập Lại IDPost (ĐD : IDFB_IDPost) : ";
$id_['^^'] = trim(fgets(STDIN));
$id = explode('_',$id_['^^'])[0];
$idpost = explode('_',$id_['^^'])[1];
$idregencode = "".$idpost."&story=".$id."_".$idpost."";
if ($id == null or $idpost == null){
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
echo "\033[1;97m~ \033[1;92mIDFB_IDPost Không Hợp Lệ!!\n";
die;
} else {
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
echo "\033[1;97m~ \033[1;92mIDFB Post : ".$id."\n";
if (!file_exists('MCL_IDPost.json')){ file_put_contents('MCL_IDPost.json',$id_['^^']); }
}
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
}
}
$id_en = idpost_encode($idregencode,$_CHOOSE['CookieMCL']);
$dumamaydaylamahoaidMCL = explode('value="',$id_en);
$id = explode('"',$dumamaydaylamahoaidMCL[1])[0];
//print($id."\n");
//echo "\n";
//echo "".$idregencode."\n";
echo "\033[1;92m[\033[1;95m1\033[1;92m] \033[1;97m➩\033[1;92m LIKE \n";
echo "\033[1;92m[\033[1;95m2\033[1;92m] \033[1;97m➩\033[1;92m LOVE \n";
echo "\033[1;92m[\033[1;95m3\033[1;92m] \033[1;97m➩\033[1;92m WOW \n";
echo "\033[1;92m[\033[1;95m4\033[1;92m] \033[1;97m➩\033[1;92m HAHA \n";
echo "\033[1;92m[\033[1;95m7\033[1;92m] \033[1;97m➩\033[1;92m SAD \n";
echo "\033[1;92m[\033[1;95m8\033[1;92m] \033[1;97m➩\033[1;92m ANGRY \n";
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
echo "\033[1;97m~ \033[1;92mChoose : \033[1;93m";
$type = trim(fgets(STDIN));
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
//1 = like
//2 = love
//4 = haha
//3 = wow
//7 = sad
//8 = angry
while (true){
$send = send_data($_CHOOSE['CookieMCL'],$type,$id);
$send_data = json_decode($send,true);
if ($send_data["status"] == "ok"){
$success++; 
echo "\033[1;97m~ \033[1;92m[\033[1;96m".date('H:i:s')."\033[1;92m][\033[1;95mMSG\033[1;92m] \033[1;97m➜\033[1;92m ".$send_data["info"]["message"]."\n";
echo "\033[1;97m~ \033[1;92m[\033[1;96m".date('H:i:s')."\033[1;92m][\033[1;95mType_Reactions\033[1;92m] \033[1;97m➜ \033[1;93m".$type."\n";
echo "\033[1;97m~ \033[1;92m[\033[1;96m".date('H:i:s')."\033[1;92m][\033[1;95mTotalReaction_Tool\033[1;92m] \033[1;97m➜\033[1;93m ".$success."\n";
echo "\033[1;97m~ \033[1;92m[\033[1;96m".date('H:i:s')."\033[1;92m][\033[1;95mTotalReaction_Post\033[1;92m] \033[1;97m➜\033[1;93m ".$send_data["info"]["total_reactions"]."\n";
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
} else {
echo "\033[1;97m~ \033[1;92mThất Bại Gửi Reactions!\n";
}
for ($x = 601;$x--;){
echo "\033[1;97m~ \033[1;92mChờ ".$x." Giây!\r";
sleep(1);}
}
function home($cookie){
$head = [
'Host: www.machine-liker.com',
'user-agent: Mozilla/5.0 (Linux; Android 10; SM-M205G Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/94.0.4606.50 Mobile Safari/537.36',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'sec-fetch-dest: document',
'referer: https://www.machine-liker.com/verify/',
'accept-encoding: gzip, deflate',
'accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7',
'cookie: '.$cookie
];
$curl=curl_init();
curl_setopt_array($curl, array(
CURLOPT_PORT => 443,
CURLOPT_URL => "https://www.machine-liker.com/dashboard/",
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_ENCODING => "",
CURLOPT_SSL_VERIFYPEER => 1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => $head
));
$data = curl_exec($curl);
return $data;
}
function send_data($cookie,$type,$id){
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.machine-liker.com/api/send-reactions/");
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, "object_id=".$id."&reactions=".$type."&limit=100");
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
#print($access);
curl_close($ch);
return $access;
}
function idpost_encode($id,$cookie){
$head = [
'Host: www.machine-liker.com',
'user-agent: Mozilla/5.0 (Linux; Android 10; SM-M205G Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/94.0.4606.61 Mobile Safari/537.36',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'sec-fetch-site: none',
'sec-fetch-mode: navigate',
'sec-fetch-user: ?1',
'sec-fetch-dest: document',
'accept-encoding: gzip, deflate',
'accept-language: vi-VN,vi;q=0.9,en-US;q=0.8,en;q=0.7',
'cookie: '.$cookie
];
$curl=curl_init();
curl_setopt_array($curl, array(
CURLOPT_PORT => 443,
CURLOPT_URL => "https://www.machine-liker.com/send-reactions/?post_id=".$id,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_ENCODING => "",
CURLOPT_SSL_VERIFYPEER => 1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => $head
));
$data = curl_exec($curl);
return $data;
}
function getin4($accesstoken){
$inf = json_decode(file_get_contents('https://graph.facebook.com/me?access_token='.explode('"',$accesstoken[1])[0]),true);
return $inf;
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
\033[1;97m~ \033[1;92mManchine-liker
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