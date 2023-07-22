<?
error_reporting(0);
@system('clear');
banner();
echo "\033[1;97m→ \033[1;92mNhập Tên File Chứa LinkFB : \033[1;93m";
$checking_file = trim(fgets(STDIN));
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
if (!file_exists($checking_file)){ echo "\033[1;97m→ \033[1;92mFile Không Tồn Tại!!\n";die; }
else {
echo "\033[1;97m→ \033[1;92mFile Hiện Đang Chứa \033[1;95m".count(file($checking_file))."\033[1;92m UID (Tính Theo Line)\n";
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
}
echo "\033[1;97m→ \033[1;92mNhập Tên File Sẽ Chứa Link/UID Live-Die : \033[1;93m";
$_CHOOSE['Checking_LIVE'] = trim(fgets(STDIN));
if (!file_exists($_CHOOSE['Checking_LIVE'])){ 
echo "\033[1;97m→ \033[1;92mFile Không Tồn Tại . !\n";
die;
}
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
$data = fread(fopen($checking_file , "r"), filesize($checking_file));   
$jsdc = explode(PHP_EOL,$data);
foreach ($jsdc as $link){
$url = "https://automxh.vn/api/tool/get-uid-fb?link=".$link."";
$docjson = json_decode(file_get_contents($url),true);
if ($docjson["status"]== 'true'){
$dem++;
echo "\033[1;97m→ \033[1;9".rand(2,7)."m".$dem."\033[1;97m → \033[1;92mLIVE : ".$docjson["data"]."\n";usleep(10000);
$setup = fopen($_CHOOSE['Checking_LIVE'] , 'a+');
$id = $docjson["data"];
$setup_live = "LIVE|$id|$link\n";
fwrite($setup , $setup_live);
fclose($setup);
} else {
$dem++;
echo "\033[1;97m→ \033[1;9".rand(2,7)."m".$dem."\033[1;97m → \033[1;92mDIE : ".$link."\n";
$setup = fopen($_CHOOSE['Checking_LIVE'] , 'a+');
$setup_die = "DIE|Null|$link|\n";
fwrite($setup , $setup_die);
fclose($setup);
}
}
function banner() {
        $a ="\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
            \033[1;91m███████╗  ████████╗ ██████╗  ██████╗ ██╗\033[1;97m                 
            \033[1;93m╚══███╔╝  ╚══██╔══╝██╔═══██╗██╔═══██╗██║\033[1;97m                 
              \033[1;94m███╔╝█████╗██║   ██║   ██║██║   ██║██║\033[1;97m                 
             \033[1;96m███╔╝ ╚════╝██║   ██║   ██║██║   ██║██║\033[1;97m                 
            ███████╗     ██║   ╚██████╔╝╚██████╔╝███████╗            
            ╚══════╝     ╚═╝    ╚═════╝  ╚═════╝ ╚══════╝            \n
\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
\033[1;97m~ \033[1;92mCheck Live/Die Max Speex
\033[1;97m~ \033[1;94mBản Quyền : Nguyen Minh Huy
\033[1;97m~ \033[1;92mWritten → Nguyen Minh Huy
\033[1;97m~ \033[1;92mHệ Thống Dịch Vụ Facebook | Clone Số 1 Việt Nam | \033[1;97mShopqvinh.com
\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
  $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        usleep(150);
    
    }
    }