<?php
error_reporting(0);
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
					$xxx = date("H:i");
					$fulltime = date("H:i:s");
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
$sx='22233';
$sh='2.5';
$sx2='55599';
$sourcecm='\033[1;93m[\033[1;91mCOMING SOON\033[1;93m] \033[1;92mChế Độ Hiện Đang Trong Quá Trình Tổng Hợp Các Source TraoDoiSub và TuongTacCheo !!!\n';
$youtube='https://youtube.com/channel/UCuzu1sQmluhuKXpg6a4yuwQ';
@system ('clear');
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";
 usleep(55777);
echo "     \033[1;91m   ███████╗       ████████╗ █████╗  █████╗ ██╗ \n";
usleep(55777);
echo " \033[1;93m       ╚════██║       ╚══██╔══╝██╔══██╗██╔══██╗██║\n";
usleep(55777);
echo "   \033[1;94m       ███╔═╝  █████╗  ██║   ██║  ██║██║  ██║██║\n";
usleep(55777);
echo "      \033[1;36m  ██╔══╝    ╚════╝  ██║   ██║  ██║██║  ██║██║\n";
usleep(55777);
echo "     \033[1;97m   ███████╗          ██║   ╚█████╔╝╚█████╔╝███████╗\n";
usleep(55777);
echo "        ╚══════╝          ╚═╝    ╚════╝  ╚════╝ ╚══════╝\n";
for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";
usleep(23456);
echo "\033[1;94mBản Quyền:";
usleep(23456);
echo "Nguyễn Minh Huy\n";
usleep(23456);
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";
usleep(23456);
echo "\033[1;92mToolZVip | Auto Chọc FB\n";
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
echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";
usleep(23456);
echo "\033[1;92mNhập Cookie Facebook:$vang";
    $cookie = trim(fgets(STDIN));
    $useragent = "Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36";
    echo "\033[1;37m[\033[1;31m●\033[1;37m] - ";
usleep(23456);
echo "\033[1;92mNhập Time Delay ( >5 ):$vang";
    $a = trim(fgets(STDIN));
    if ($a < 5){
              exit($do."\033[1;93m[\033[1;91mFALSE\033[1;93m] \033[1;92mSai Định Dạng (>5)\n");
    }


    for($v=0;$v<= 15;$v++){echo $trang."- ";usleep(2000);echo $trang."- ";usleep(15000);}echo "\n";
    while (true) {
        $url = "https://mbasic.facebook.com/";
        $head = array(
            "Host: mbasic.facebook.com",
            "upgrade-insecure-requests: 1",
            "save-data: on",
            "user-agent: Mozilla/5.0 (Linux; Android 5.1.1; SM-J320G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36",
            "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9",
            "sec-fetch-site: same-origin",
            "sec-fetch-mode: navigate",
            "sec-fetch-user: ?1",
            "sec-fetch-dest: document",
            "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
            "cookie: $cookie",
        );
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => true,
            CURLOPT_ENCODING => TRUE
        ));
        $c = curl_exec($ch);
        $one = explode('href="/friends/center/mbasic/?', $c);
        $two = explode('"', $one[1]);
        $url = "https://mbasic.facebook.com/friends/center/?" . htmlspecialchars_decode($two[0]);
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => true,
            CURLOPT_ENCODING => TRUE
        ));
        $c = curl_exec($ch);
        $one = explode('href="/a/mobile/friends/add_friend.php?', $c);
        $kb = explode('"', $one[1]);
        $url = "https://mbasic.facebook.com/a/mobile/friends/add_friend.php?" . htmlspecialchars_decode($kb[0]);
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => 1,
            CURLOPT_HTTPGET => true,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => $head,
            CURLOPT_HEADER => true,
            CURLOPT_ENCODING => TRUE
        ));
        $c = curl_exec($ch);
        $id = explode('id=', $kb[0])[1];
        $id = explode('&', $id)[0];
        echo $xl. "";
        $header = array(
            "Host: mbasic.facebook.com",
            "upgrade-insecure-requests: 1",
            "save-data: on",
            "user-agent:Mozilla/5.0 (Linux; Android 8.1.0; CPH1803) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36",
            "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*" . "/" . "*;q=0.8,application/signed-exchange;v=b3;q=0.9",
            "sec-fetch-site:same-origin",
            "sec-fetch-mode:navigate",
            "sec-fetch-user:?1",
            "sec-fetch-dest:document",
            "accept-language:vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
            "cookie:$cookie",
        );
        $url = "https://mbasic.facebook.com/pokes/?ref_component=mbasic_bookmark&ref_page=XMenuController";
  
        $mr = curl_init();
        curl_setopt_array($mr, array(
            CURLOPT_PORT => "443",
            CURLOPT_URL => "$url",
            CURLOPT_ENCODING => "",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => "GET",
            // CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => $header
        ));
        $mr2 = curl_exec($mr);
        curl_close($mr);
        $json = json_decode($mr2, true);
        $id = explode('/pokes/inline/?', $mr2)[1];
        $id = explode('"', $id)[0];
        $ok = explode('poke_target=', $mr2)[1];
        $ok = explode('&', $ok)[0];
        $url = 'https://mbasic.facebook.com/pokes/inline/?' . htmlspecialchars_decode($id) . '';
        $mr = curl_init();
        curl_setopt_array($mr, array(
            CURLOPT_PORT => "443",
            CURLOPT_URL => "$url",
            CURLOPT_ENCODING => "",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CUSTOMREQUEST => "GET",
            // CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => $header
        ));
        $mr2 = curl_exec($mr);
        curl_close($mr);
        $json = json_decode($mr2, true);
        $time = date('H:i:s');
         $maul=rand(91,97);

$maui="\033[1;".$maul."m";
$dem = $dem +1;
        echo "\033[1;93m[\033[1;92mN.M.HUY\033[1;93m]\033[1;91m[\033[1;93m$dem\033[1;91m] \033[1;91m";
usleep(55555);
echo "| \033[1;36m$time\033[1;91m |$maui CHỌC\033[1;91m ";
usleep(55555);
echo "| \033[1;92m$ok \033[1;91m| \033[1;92m DONE !\n";
usleep(55555);
        for ($time=$a;$time>-1;$time--){
                  echo "   \033[1;32m┗(•ˇ_ˇ•)\033[1;32m~>      \033[1;32m              \033[1;32m|\033[1;92m $time\033[1;32m | \r";
usleep(34563);
echo "   \033[1;31m┗(•ˇ_ˇ•)  \033[1;31m~>    \033[1;31m             \033[1;31m |\033[1;92m $time\033[1;31m | \r";
usleep(44444);
echo "   \033[1;33m┗(•ˇ_ˇ•)    \033[1;33m~>  \033[1;33m             \033[1;33m |\033[1;92m $time\033[1;33m | \r";
usleep(55555);
echo "   \033[1;34m┗(•ˇ_ˇ•)      \033[1;34m~>\033[1;34m             \033[1;34m |\033[1;92m $time\033[1;34m | \r";
usleep(54321);
echo "   \033[1;35m┗(•ˇ_ˇ•)       \033[1;35m~>\033[1;35m            \033[1;35m |\033[1;92m $time\033[1;35m | \r";
usleep(34531);
echo "   \033[1;36m┗(•ˇ_ˇ•)        \033[1;36m~>\033[1;36m           \033[1;36m |\033[1;92m $time\033[1;36m | \r";
usleep(86511);
echo "   \033[1;97m┗(•ˇ_ˇ•)        \033[1;97m ~>\033[1;97m           \033[1;97m|\033[1;92m $time\033[1;97m | \r";
usleep(65511);
echo "   \033[1;95m┗(•ˇ_ˇ•)        \033[1;95m  ~>\033[1;95m          \033[1;95m|\033[1;92m $time\033[1;95m | \r";
usleep(32221);
echo "   \033[1;33m┗(•ˇ_ˇ•)        \033[1;33m   ~>\033[1;33m         \033[1;33m|\033[1;92m $time\033[1;33m | \r";
usleep(44554);
echo "   \033[1;31m┗(•ˇ_ˇ•)        \033[1;31m    ~>\033[1;31m        \033[1;31m|\033[1;92m $time\033[1;31m | \r";
usleep(35544);
echo "   \033[1;93m┗(•ˇ_ˇ•)        \033[1;93m     ~>\033[1;93m       \033[1;93m|\033[1;92m $time\033[1;93m | \r";
usleep(45665);
echo "   \033[1;91m┗(•ˇ_ˇ•)         \033[1;91m     ~>\033[1;91m      \033[1;91m|\033[1;91m $time\033[1;91m | \r";
usleep(45665);
echo "   \033[1;97m┗(•ˇ_ˇ•)         \033[1;97m      ~>\033[1;97m     \033[1;97m|\033[1;92m $time\033[1;97m | \r";
usleep(45665);
echo "   \033[1;94m┗(•ˇ_ˇ•)         \033[1;94m       ~>\033[1;94m    \033[1;94m|\033[1;92m $time\033[1;94m | \r";
usleep(32555);
echo "   \033[1;95m┗(•ˇ_ˇ•)         \033[1;95m        ~>\033[1;95m   \033[1;95m|\033[1;92m $time\033[1;95m | \r";
usleep(32555);
echo "   \033[1;96m┗(•ˇ_ˇ•)         \033[1;96m         ~>\033[1;96m  \033[1;96m|\033[1;92m $time\033[1;96m | \r";
usleep(32555);
echo "   \033[1;36m┗(•ˇ_ˇ•)         \033[1;36m          ~>\033[1;36m \033[1;36m|\033[1;92m $time\033[1;36m | \r";
usleep(32555);
echo "   \033[1;92m┗(•ˇ_ˇ•)         \033[1;92m           ~>\033[1;92m\033[1;92m|\033[1;92m $time\033[1;92m | \r";
                  
        }
       
    }