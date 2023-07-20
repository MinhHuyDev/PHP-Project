
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
$red = "\033[0;31m";
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
system("clear");
echo "\033[1;97m~ \033[1;92mTool Được Phát Triển Và Vận Hành Bởi Z-Tool\n";
echo "\033[1;97m~ \033[1;92mVào Box Để Được Hỗ Trợ Nhiệt Tình\n";
echo "\033[1;97m~ \033[1;92mTool BETA Nên Vẫn Lỗi Nên Có Lỗi Gì Anh Em Cứ Ib Trực Tiếp Mình Nhé\n";
echo "\033[1;97m~ \033[1;92mPc/Iphone Đã Có Thể Chạy Tool Bình Thường Rồi Nhé\n";
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
echo "\033[1;97m~ \033[1;92m ENTER To Continue : ";
sleep(1.5);
$continue = trim(fgets(STDIN));
system("clear");
echo "\033[1;91m             ███████╗  ████████╗ ██████╗  ██████╗ ██╗                \n";usleep(777777);
echo " \033[1;93m            ╚══███╔╝  ╚══██╔══╝██╔═══██╗██╔═══██╗██║                \n";usleep($xx);
echo "  \033[1;94m             ███╔╝█████╗██║   ██║   ██║██║   ██║██║                \n";usleep($xx);
echo "   \033[1;96m           ███╔╝ ╚════╝██║   ██║   ██║██║   ██║██║               \n ";usleep($xx);
echo "    \033[1;97m        ███████╗     ██║   ╚██████╔╝╚██████╔╝███████╗         \n  ";usleep($xx);
echo "           ╚══════╝     ╚═╝    ╚═════╝  ╚═════╝ ╚══════╝\n";usleep($xx);
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
print("\033[1;97m~\033[1;92m Copyright By MINH HUY OFFCIAL\n");usleep($xx);
print("\033[1;97m~\033[1;92m Copyright Z-TOOL\n");usleep($xx);
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
print("\033[1;97m~\033[1;92m Tool Reg Demo Account V1\n");
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
function POST($url_nhan,$data,$head_ac){
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_URL => $url_nhan,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $head_ac,));
$mr2 = curl_exec($mr); curl_close($mr);
$json = json_decode($mr2,true);
return $json;
}
function P($url_nhan,$data,$head_ac){
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_URL => $url_nhan,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $head_ac,));
$mr2 = curl_exec($mr); curl_close($mr);
return $mr2;
}
function GET($url,$head){
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => $head));
$mr2 = curl_exec($mr); ($mr);
$json = json_decode($mr2,true);
return $mr2;}
function G($url,$head){
$mr = curl_init();
curl_setopt_array($mr, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => $head,
  CURLOPT_HEADER=>true));
$mr2 = curl_exec($mr); curl_close($mr);
return $mr2;
}
echo "\033[1;91mNOTE \033[1;92m: Nếu Reg Tktn Với ID App & Cookie Không Chạy Thì Bạn Vui Lòng Exit Tool Và Chạy Lại Với ID App & Cookie Của Mình Nhé! . Thanks:)\n";
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
echo "\033[1;97m~ \033[1;93m1\033[1;97m • \033[1;92mReg TKTN Với ID App & Cookie Có Sẵn\n";
echo "\033[1;97m~ \033[1;93m2\033[1;97m • \033[1;92mReg TKTN Với ID App & Cookie Của Bạn\n";
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
echo "\033[1;97m~ \033[1;92mChoose : $vang";
$kieu=trim(fgets(STDIN));
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
if ($kieu == '1'){
$cookie="datr=fDdfYNPmVi3Q53AxfNFL0csK;sb=fDdfYIBxGUTNaEnbKGe3FTLN;locale=vi_VN;dpr=1.15625;_fbp=fb.1.1622382772618.148354134;fr=1rUdfh5HjsQwPfLXZ.AWX2kMtArBV_wAwBG8UoJ7yCQq8.Bgd9Zy.8W.AAA.0.0.BguIT2.AWVpilUWsec;c_user=100043511183390;xs=37%3AkmiWYilsH_MTLw%3A2%3A1622705398%3A-1%3A427;m_pixel_ratio=1.15625;wd=623x1350";
$head_dev=["Host:developers.facebook.com","sec-ch-ua-mobile:?0","user-agent:Mozilla/5.0 (Linux; Android 10; RMX1929) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.105 Mobile Safari/537.36","viewport-width:1030","content-type:application/x-www-form-urlencoded","accept:*/*","cookie:$cookie"];
$head_fb1=["Host:mbasic.facebook.com","user-agent:Mozilla/5.0 (Linux; Android 10; RMX1929) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.105 Mobile Safari/537.36","content-type:application/x-www-form-urlencoded","accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9","cookie:$cookie"];
$app_id="1134766077034894";
}else if($kieu == '2'){
	$cookie=readline("\033[1;97m~\033[1;92m Cookie Facebook : $vang");
	echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
$head_dev=["Host:developers.facebook.com","sec-ch-ua-mobile:?0","user-agent:Mozilla/5.0 (Linux; Android 10; RMX1929) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.105 Mobile Safari/537.36","viewport-width:1030","content-type:application/x-www-form-urlencoded","accept:*/*","cookie:$cookie"];
$head_fb1=["Host:mbasic.facebook.com","user-agent:Mozilla/5.0 (Linux; Android 10; RMX1929) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.105 Mobile Safari/537.36","content-type:application/x-www-form-urlencoded","accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9","cookie:$cookie"];
echo "\033[1;97m~ \033[1;92mLấy ID APP Tại :".$vang." developers.facebook.com/apps/ \n";
$app_id=readline("\033[1;97m~\033[1;92m ID APP : $vang");
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";}
echo "\033[1;97m~ \033[1;92mXuất Tktn Ra File Nào (namefile.txt) : $vang";
$luu=trim(fgets(STDIN));
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
while (true){
$listname=array("Nguyen Quoc Hai","Nguyen Minh Giang","Nguyen Tuong Nguyen","Nguyen Gia Phuoc","Nguyen Minh Nhat","Nguyen An Nguyen","Nguyen Xuan Minh","Nguyen Tien Vo","Nguyen Phi Cuong","Nguyen Ðinh Luan","Nguyen Hung Ðao","Nguyen Minh Khanh","Nguyen Chi Bao","Nguyen Thien Tam","Nguyen Thach Tung","Nguyen Minh An","Nguyen Dung Viet","Nguyen Trong Nghia","Nguyen Minh Hao","Nguyen Quoc Hoai","Nguyen Anh Tai","Nguyen Nhat Quoc","Nguyen Tuong Nguyen","Nguyen Hoai Phong","Nguyen Vinh Hung","Nguyen Phuoc An","Nguyen Gia Uy","Nguyen Thai An","Nguyen Thanh Phong","Nguyen Huu Bao","Nguyen Minh Tuan","Tran Thuc Anh","Tran Phuong Linh","Tran Nhu Ngoc","Tran Thu Hong","Tran Ngoc Suong","Tran Ban Mai","Tran Doan Trang","Tran Bich Hai","Tran Ngoc Phung","Tran Viet Nhi","Tran Thien Mai","Tran Ngoc Ðan","Tran Ngan Anh","Tran Hien Nhi","Tran Ha Bang","Tran Bach Kim","Tran Ngoc","Tran Ngoc Tho","Tran Tram Oanh","Tran Thuy Nga","Tran Boi Linh","TranGia Linh","Tran Yen Loan","Tran Thu Nga","Tran Truc Mai","Tran Cam Tu","Do Khac Minh","Do Phuong Nam","Do Quang Thang","Do Minh Hung","Do Kien Cuong","Do Ðai Thong","Do Hai Bang","Do Hiep Hoa","Do Manh Ha","Do Thanh Chau","Do Quang Nhat","Do Hoang Long","Do Khanh Hoi","Do Nhat Quang","Do Thien Nhan","Do Ðuc Khiem","Do Minh An","Do Hao Nhien","Do Thanh Phuong","Do Phuong Nam","Do Ðuc Thang","Do Lien Kiet","Do Huy Ha","Do Ðuc Toan","Do Thanh Quang","Do Vinh Luan","Do Bach Du","Do Hoang Hai","Do Hieu Nghia");
$taivip = array_rand($listname);
$name = $listname[$taivip];
$ran = $sv[$taivip];
$listpass=array("WOWVWO02YS","OWGWOJ20","WJWHOEH2O9S","OWVSOWK002","WOSB020USHNS","OQHSOQ0S8J","HWOAHJ01KA98","HWOWBOWWJO","PWHWO20SYAJWI0","WLSPWBSSN9");
$taivip = array_rand($listpass);
$pass = $listpass[$taivip];
$ran = $sv[$taivip];
$mbasic=G("https://mbasic.facebook.com",$head_fb1);
$jaz=explode('"',explode('name="jazoest" value="',$mbasic)[1])[0];
$fb=explode('"',explode('name="fb_dtsg" value="',$mbasic)[1])[0];
$role0=GET("https://developers.facebook.com/apps/$app_id/roles/test-users/",$head_dev);
if ($role0==""){echo "Check Web Đi. Có Thể FB Die Hoặc ID App Bị Mất Kết Nối\r";}
else{
$data="jazoest=$jaz&fb_dtsg=$fb&count=1&platform_version=v10.0&age=18&language=vi_VN&__a=1&__csr=&__req=a&__beoa=0&dpr=1";
$reg=P("https://developers.facebook.com/apps/async/test-users/create/?app_id=$app_id",$data,$head_dev);
$role=G("https://developers.facebook.com/apps/$app_id/roles/test-users/",$head_dev);
$test_user=explode('"',explode('type="checkbox" value="',$role)[1])[0];
$data="jazoest=$jaz&fb_dtsg=$fb&name=$name&password=$pass&confirm_password=$pass&__a=1&__csr=&__req=b&__beoa=0&dpr=2";
$doi=P("https://developers.facebook.com/apps/async/test-users/edit/?app_id=$app_id&test_user_id=$test_user",$data,$head_dev);
$daubuoi++;
echo "\033[1;97m~ \033[1;93m".$daubuoi."\033[1;97m • \033[1;92mReg Successfully\033[1;97m => \033[1;92m$test_user|$pass|\n";
echo "\033[1;97m~ \033[1;92mWaiting...\r";
$file=fopen($luu,"a+");
fwrite($file,"$test_user|$pass|\n");
}}