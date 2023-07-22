<?php
// Khai báo biến:
error_reporting(0);
/***
 * TAO  Y
 * LÀ     Ê
 * HÒA      U
 * ĐẸP        E
 * TRAI         L
 * VÀ             A
 * HÃY              I
 * Đ*                 N
 * MÀU                  A
 * ĐI      PHONG    ÓC      HEO 🐷
 *         PHONG    ÓC      BÒ 🐮
 *   PHONG      NGU    NHƯ   CHÓ 🐶
 *       HÒA     QUÁ      ĐẸP     TRAI
 *    |    <TRỌNG>        <HÒA>     |
 *    |     ====          ====      |
 *    [            <HEX>            ] 
 *    |    ℅phong  %ngu %qué %ahihi |
 *     |         /=========\       |
 *      \        \=========/      /
 *       ﹝   %phong %gà %quá    ﹞
 *       ﹝   %phong %gà %quá    ﹞
 *         \____________________/
 *      PHONG NGUUUUUUUUUUUUUUU!
 *  
 * Chuyển t 30k vào tsr: 0909398911
 * Không chuyển t cắt cu ddoosoooooooo!
 * Kí tên: Trần Trọng Hòa
 *             Gửi - Hà Phong ( Phong Ngu )
***/
$a = 0;
$b = 0;
$hzd = 0;
$array_cookie = array();
// $title 
$react_choose = "
[1] Like
[2] Tim
[3] Wow
[4] Haha
[7] Sad 
[8] Angry
Định dạng: 1,2,3,4 
Mời nhập:
";
$title = array(
  '
  [1] Very đa tài khoản
  [2] Nhập cookie đa tài khoản
  ',
  'Nhập sự lựa chọn: ',
  '
  Nhập số luồng:
  ',
  '
  Có muốn lưu cookie lại không?:
  ',
  '
$des_link = "
 [CODE] => $new_bb
  [LINK] => https://www.facebook.com/device?user_code=$new_bb
  Open link (y/n): ";
  ',
  '$z_pro = "Enter nếu đã xác nhận thủ công";
print($z_pro);
$loli_vuto_dit_nho = trim(fgets(STDIN));
  ',
  '
Tuy có file, nhưng không có dữ liệu cần setup từ trước, vui lòng thêm!
  ',
  '
  print("Nhập token facebook: ");
  $token_acc = trim(fgets(STDIN));
  print("Url profile: ");
  $url_profile = trim(fgets(STDIN));
  ',
  '
  NHẬP SỐ POST (Enter là thành viplike) ( VD: 1&2&3):
  ',
  '
  print(" NHẬP FILE CHỨA ID: ");
  $file_chua_id = trim(fgets(STDIN));
  $red_id =file($file_chua_id,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
  
  ',
  );
// trim
$trim = array(
  '$choose = trim(fgets(STDIN));',
  '$soluong = trim(fgets(STDIN));',
  '$acc_ss = trim(fgets(STDIN));',
  '$input_ch = trim(fgets(STDIN));',
  '$save = "Lưu thành công cookie số: $a\n";',
  '$total_save = "Đã lưu thành công $a cookie vào file cookies_loli.txt\n";',
  );
$dut_deet = array(
  '$lolime = "Số acc đã được thiết lập từ trước là ".count($read_count)." bạn có muốn sử dụng lại không: ";',
  );
$url = array("http://www.machine-liker.com/login/","http://www.machine-liker.com/auth/verify-login/","http://www.machine-liker.com/api/find-post-id/");





if(file_exists("cookies_loli.txt")){
$read_count =file("cookies_loli.txt",FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
if(count($read_count) == 95){
$z_lolime = "Giới hạn 95 acc thôi, đừng ham=)))\n";
print($z_lolime);
}
if(count($read_count) == 0){
print($title[6]);
$z_lolime = "Không có gì U w U";
}else{
eval($dut_deet[0]);
print($lolime);
$z_lolime = trim(fgets(STDIN));
}


if($z_lolime == 'có'){
if(strpos($read_count[0],".txt") == true){
$type = "acc";
}else{
$type = "cookie";
}
$a_p = -1;

print("
[1] INPUT FILE ID TXT
ĐỊNH DẠNG :
13874848494848383849
83382929282838474775
[2] GET ID TRONG WALL
NHẬP LỰA CHỌN: 
");

$c_c = trim(fgets(STDIN));
if($c_c == 2){
eval($title[7]);
$api = "https://waifupic.ml/top/?profile=".$url_profile;
$connect = file_get_contents($api);
$json = json_decode($connect,true)["idfb"];
$listbv = json_decode(file_get_contents("https://graph.facebook.com/$json/posts?limit=1000&fields=id,name&access_token=$token_acc"),true)["data"];
$cf_g = count($listbv);
for($v=0;$v<=$cf_g;$v++){
if($v == $cf_g){
  break;
}
$id_get = explode("_",$listbv[$v]["id"]);
$url = "https://m.facebook.com/story.php?story_fbid=$id_get[1]&id=$id_get[0]";
print("[$v] => $url\n");

}
print($title[8]);
$limit_id = trim(fgets(STDIN));
$ar = array();
if($limit_id == false){
$fopen_1 = fopen("loliid.txt","w+");
$b_a = 0;
for($v=0;$v<=$cf_g;$v++){
if($v == $cf_g){
  break;
}
$b_a++;
$id_get = explode("_",$listbv[$v]["id"]);
$ar[] = $id_get[1];
fwrite($fopen_1,$id_get[1]."\n");
}
$e = $ar;
print("Đã lưu $b_a id vào file loliid.txt có thể tái sử dụng\n");
}else{
$u = explode('&',$limit_id);
print(" Số post đã chọn \n");
for($v=0;$v<=count($u);$v++){
$u_e = $listbv[$u[$v]]["id"];
$elif = explode("_",$u_e)[1];
if($elif == false){
break;
}
print("[$v] => id post: $elif\n");
$e[] = $elif;

}
}
}else{
eval($title[9]);
$e = $red_id;
}
$z_time = 600 / count($read_count);
print(" Bot => Auto phân tích thời gian $z_time\n");
print($react_choose);
$react = trim(fgets(STDIN));
for_x(25);
$trọng = -1; 
$hòa = -1;
$_zzssstt = 0;
while(true){
$trọng++;
$hòa++;
if($read_count[$trọng] == false or $e[$hòa] == false){
print("Kho dữ liệu không có, đã skip\n");
}else{
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.machine-liker.com/api/send-reactions/");

curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
if($type == "acc"){
curl_setopt($ch, CURLOPT_COOKIEFILE, $read_count[$trọng]);

}else{
curl_setopt($ch, CURLOPT_COOKIE, $read_count[$trọng]);
}
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$data = array(
  "post_id" => "https://m.facebook.com/story.php?story_fbid=538460403903599&id=100032189318161",
  "reactions" => "2",
  "limit" => 150,
  );
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
$tach_json = json_decode($access,true);
if($tach_json["status"] == "ok"){
$_zzssstt++;
print("[$_zzssstt] [SUCCESS] [$type] => ".$tach_json["info"]["message"]." | id_post: $e[$hòa]\n");
print("\r Đợi $z_time giây!\r");
sleep($z_time);
}else{
print("[FAILED] => LỖI SEND REACT\n");
}
}
if($trọng == count($read_count)){
$trọng = -1;
}
if($hòa == count($e)){
$hòa = -1;
}
}
/***
 * MÀY CHƯA GHI GÌ
 * HÃY VIẾT vào
***/

}else{
head($title,$trim,$a);
print("\n Setup xong! , hãy chạy lại!");
}}else{
head($title,$trim,$a);
print("\n Setup xong! , hãy chạy lại!");
}







function head($title,$trim,$a){
print($title[0].$title[1]);
eval($trim[0]);
for_x(25);
print($title[2]);
eval($trim[1]);
if($choose == 2){
$sayu = soluong1($soluong,$trim[2]);
for_x(25);
print($title[3]);
eval($trim[3]);
if($input_ch == 'có'){
$loli_con = fopen("cookies_loli.txt","w+");
foreach ($sayu as $loli){
  $a++;
  fwrite($loli_con,$loli."\n");
  eval($trim[4]);
  print($save);
}
eval($trim[5]);
print($total_save."\n");
for_x(25);
}

}else{
$s_zz = soluong2($soluong,$title);
}}




// THÊM COOKIE!
function soluong1($luong,$ct){
$ara_ara = array();

for($v=1;$v<=$luong;$v++){
$ran_cookie = mt_rand(10000,99999);
print(" Luồng cookie $v: ");
eval($ct);
$ara_ara[] = $acc_ss;
}
return $ara_ara;
}


function soluong2($luong,$title){
$h20 = fopen("cookies_loli.txt","w+");
$aru_aru = array();
for($v=1;$v<=$luong;$v++){
$new_bb = getxcode_machine($v);
for_a(10); print("Count:$v"); for_x(12);
eval($title[4]);
print($des_link);
  $open_link = trim(fgets(STDIN));

  if($open_link == "y"){
  system("termux-open https://www.facebook.com/device?user_code=".$new_bb);
  sleep(20);
  $very = very($v);
  for_x(25);
  if($very["status"] == "ok"){
  print($very["user"]["id"]."/".$very["user"]["name"]."\n");
  fwrite($h20,"loli$v.txt\n");
  }else{
  print("Very failed\n");
  }
  }else{
  eval($title[5]);
  $very = very($v);
  for_x(25);
  if($very["status"] == "ok"){
  print($very["user"]["id"]."/".$very["user"]["name"]."\n");
  fwrite($h20,"loli$v.txt\n");
  }else{
  print("Very failed\n");
  }
}}
return $new_bb;
}




// VÒNG LẬP LÀM MÀU
function for_x($so){
for($v=0;$v<=$so;$v++){
print("- "); usleep(25000);
}print("\n");
}
function for_a($so){
for($v=0;$v<=$so;$v++){
print("- "); usleep(25000);
}
}



function getxcode_machine($cookie_new){
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.machine-liker.com/login/");

curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_COOKIEJAR, "loli$cookie_new.txt");
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);

$exp = explode('https://www.facebook.com/device?user_code=',$access)[1];
$uz_i_vc = explode('"',$exp)[0];

return $uz_i_vc;
}
function very($cookie_new){
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.machine-liker.com/auth/verify-login/");

curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_COOKIEFILE, "loli$cookie_new.txt");
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
return(json_decode($access,true));
}