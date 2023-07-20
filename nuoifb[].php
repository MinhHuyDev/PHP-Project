<?php
error_reporting(0); 
date_default_timezone_set("Asia/Ho_Chi_Minh");
$xx = "15000";
@system('clear');
banner();
echo "\033[1;97m~ \033[1;92mCookie Facebook : \033[1;93m";
$_CHOOSE['CK'] = trim(fgets(STDIN));
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
$head = ["Connection: keep-alive","Keep-Alive: 300","authority: m.facebook.com","ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7","accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5","cache-control: max-age=0","upgrade-insecure-requests: 1","accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9","sec-fetch-site: none","sec-fetch-mode: navigate","sec-fetch-user: ?1","sec-fetch-dest: document"];
curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Linux; Android 10; SM-M205G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.210 Mobile Safari/537.36' );
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $_CHOOSE['CK']);
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
$access_token=explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};	
$name = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'name'};
}
$cookie = $_CHOOSE['CK'];
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
$json = json_decode(file_get_contents('https://graph.facebook.com/me?access_token='.$access_token),true);
if ($json["id"] == null){ echo "\033[1;97m~ \033[1;92mCó Vẻ Cookie Không Hợp Lệ!!\n"; die; 
} else {
echo "\033[1;97m~ \033[1;92mIDFB : \033[1;93m".$json["id"]."\033[1;97m ➜ \033[1;92mStatus : LIVE!!\n";
$idfb = $json["id"];
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
}
$listreaction = [];
echo "\033[1;92m[\033[1;95m1\033[1;92m]\033[1;97m ➜ \033[1;92mTương Tác Với Bạn Bè\n";usleep($xx);
echo "\033[1;92m[\033[1;95m2\033[1;92m]\033[1;97m ➜ \033[1;92mTương Tác Xuyên OneWall\n";usleep($xx);
echo "\033[1;92m[\033[1;95m3\033[1;92m]\033[1;97m ➜ \033[1;92mGet Danh Sách Bạn Bè\n";usleep($xx);
echo "\033[1;92m[\033[1;95m4\033[1;92m]\033[1;97m ➜ \033[1;92mChọc Bạn Bè \n";usleep($xx);
echo "\033[1;92m[\033[1;95m5\033[1;92m]\033[1;97m ➜ \033[1;92mTương Tác Group & Cmt Group\n";usleep($xx);
echo "\033[1;92m[\033[1;95m6\033[1;92m]\033[1;97m ➜ \033[1;92mGỡ Follow Profile\n";usleep($xx);
echo "\033[1;92m[\033[1;95m7\033[1;92m]\033[1;97m ➜ \033[1;92mXóa Bạn Bè Hàng Loạt\n";usleep($xx);
echo "\033[1;92m[\033[1;95m8\033[1;92m]\033[1;97m ➜ \033[1;92mUnReactions ( Gỡ Cảm Xúc )\n";usleep($xx);
echo "\033[1;92m[\033[1;95m9\033[1;92m]\033[1;97m ➜ \033[1;92mSpam Tin Nhắn Hàng Loạt\n";usleep($xx);
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
echo "\033[1;97m~ \033[1;92mChoose : ";
$_CHOOSE['choose'] = trim(fgets(STDIN));
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
if ($_CHOOSE['choose'] == 1){
 echo "\033[1;97m~ \033[1;92mLIKE (y/n) : ";
 if (trim(fgets(STDIN)) == 'y'){
  array_push($listreaction,'LIKE');
 }
 echo "\033[1;97m~ \033[1;92mLOVE (y/n) : ";
 if (trim(fgets(STDIN)) == 'y'){
  array_push($listreaction,'LOVE');
 }
 echo "\033[1;97m~ \033[1;92mWOW (y/n) : ";
 if (trim(fgets(STDIN)) == 'y'){
  array_push($listreaction,'WOW');
 }
 echo "\033[1;97m~ \033[1;92mHAHA (y/n) : ";
 if (trim(fgets(STDIN)) == 'y'){
  array_push($listreaction,'HAHA');
 }
 echo "\033[1;97m~ \033[1;92mSAD (y/n) : ";
 if (trim(fgets(STDIN)) == 'y'){
  array_push($listreaction,'SAD');
 }
 echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
 echo "\033[1;97m~ \033[1;92mTime Delay : ";
 $hdelay = trim(fgets(STDIN));
 echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
 echo "\033[1;97m~ \033[1;92mComment Khi Tương Tác ? (y/n) : ";
 $_CHOOSE['CMT_Reactions'] = trim(fgets(STDIN));
 echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
 if ($_CHOOSE['CMT_Reactions'] == 'y' or $_CHOOSE['CMT_Reactions'] == ''){
  echo "\033[1;97m~ \033[1;92mThêm Nội Vào [\033[1;95mReactions_CMT.json\033[1;92m][\033[1;95mMỗi Comment Một Dòng\033[1;92m]\n";
  echo "\033[1;97m~ \033[1;92mBạn Đã Thêm Chưa :D ? (y/n) : ";
  $_CHOOSE['Checking[CMT_Reactions]'] = trim(fgets(STDIN));
  echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
  if ($_CHOOSE['Checking[CMT_Reactions]'] == 'y'){
   if (!file_exists('Reactions_CMT.json')){ echo "\033[1;97m~ \033[1;92mChưa Có Nội Dung Nào!\n";die; }
   else {
  echo "\033[1;97m~ \033[1;92mHiện Có \033[1;93m".count(file('Reactions_CMT.json'))."\033[1;92m Nội Dung!\n";
  echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
   }
  }
 } elseif($_CHOOSE['CMT_Reactions'] == 'n'){
  echo "       \r";
 }
 while(true){
  $list = getposthome($cookie);
  $link2 = explode('">Bày tỏ cảm xúc',explode('/reactions/picker/?',$list)[1])[0];
  $url = 'https://mbasic.facebook.com/reactions/picker/?'.str_replace('&amp;','&',$link2);
  $type = $listreaction[array_rand($listreaction,1)];
  $mess = camxuc($id,$type,$cookie);
  $id = explode('&origin_uri',explode('?ft_id=',$url)[1])[0];
  if(empty($id)){ }
  $dem++;
  echo "\033[1;97m~ \033[1;9".rand(2,7)."m".$dem."\033[1;97m ➜ \033[1;92mĐã Tương Tác [\033[1;95m".$type."\033[1;92m] Với IDPost : \033[1;93m".$id."\n";$getp++;
  if ($_CHOOSE['CMT_Reactions'] == 'y'){
   $data   = fread(fopen("Reactions_CMT.json", "r"), filesize("Reactions_CMT.json"));   
   $jsdc   = explode(PHP_EOL,$data);
   foreach ($jsdc as $jsnd){
   $msg = "[".$idfb."][".date('H:i:s')."] ➜ $jsnd";
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
    curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/comments');
   	$head = ["Connection: keep-alive", "Keep-Alive: 300", "authority: m.facebook.com", "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cache-control: max-age=0", "upgrade-insecure-requests: 1", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document"];
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
    echo "\033[1;97m~ \033[1;9".rand(2,7)."mĐã Comment Với ID : \033[1;93m".$id."\033[1;97m | \033[1;9".rand(2,7)."mNội Dung : \033[1;92m$jsnd\n";
   }
  }
  delay($hdelay); 
  if($getp == 1){
   $linktap = explode('" class="',explode('/stories.php?',$list)[1])[0];
   $chuyentap = 'https://mbasic.facebook.com/stories.php?'.str_replace('&amp;','&',$linktap);
   $list = chuyenlinkbai($cookie,$linktiep);
   $getp = 0;
  }
 }
}
if ($_CHOOSE['choose'] == 2){
echo "\033[1;97m~ \033[1;92mTime Delay : \033[1;93m";
$hdelay = trim(fgets(STDIN));
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
while (true){
echo "\033[1;97m~ \033[1;92mLIKE (y/n) : ";
if (trim(fgets(STDIN)) == 'y'){
array_push($listreaction,'LIKE');
}
echo "\033[1;97m~ \033[1;92mLOVE (y/n) : ";
if (trim(fgets(STDIN)) == 'y'){
array_push($listreaction,'LOVE');
}
echo "\033[1;97m~ \033[1;92mWOW (y/n) : ";
if (trim(fgets(STDIN)) == 'y'){
array_push($listreaction,'WOW');
}
echo "\033[1;97m~ \033[1;92mHAHA (y/n) : ";
if (trim(fgets(STDIN)) == 'y'){
array_push($listreaction,'HAHA');
}
echo "\033[1;97m~ \033[1;92mSAD (y/n) : ";
if (trim(fgets(STDIN)) == 'y'){
array_push($listreaction,'SAD');
}
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
$getreac = $listreaction[array_rand($listreaction,1)];
if ($getreac == 'LIKE'){
echo "\033[1;92mĐang Get Friend_List!\r";
$getbb = json_decode(file_get_contents('https://graph.facebook.com/me/friends?access_token='.$access_token),true);
$bb = $getbb["data"];
$dembb = count($bb);
for ($x=0;$x<=$dembb;$x++){
 $id = $getbb["data"][$x]["id"];
 if ($x == $dembb){ echo "\033[1;97m~ \033[1;92mĐã Bão Full Friend!!\n"; die; }
 $url = json_decode(file_get_contents('https://graph.facebook.com/'.$id.'/posts?limit=1000&fields=id,name&access_token='.$access_token),true);
 $dembv = count($url["data"]);
  for ($y=0;$y<=$dembv;$y++){
  $idpost = $url["data"][$y]["id"];
  $idtach = explode('_' , $idpost);
       $type = "LIKE";
       camxuc($id,$type,$cookie);
                    $dem++;
                    echo "\033[1;97m~ \033[1;9".rand(2,7)."m".$dem."\033[1;97m ➜ \033[1;92mĐã Tương Tác [\033[1;95mLIKE\033[1;92m] Với IDPost : \033[1;93m".$idtach[1]."\n";
  delay($hdelay);
    if ($y == $idpost){
   echo "\033[1;97m~ \033[1;92mReloading IDPost!!\r";
   
}

}
}

}
   if ($getreac == 'LOVE'){
    $getbb = json_decode(file_get_contents('https://graph.facebook.com/me/friends?access_token='.$access_token),true);
    $bb = $getbb["data"];
    $dembb = count($bb);
    for ($x=0;$x<=$dembb;$x++){
     $id = $getbb["data"][$x]["id"];
     if ($x == $dembb){ echo "\033[1;97m~ \033[1;92mĐã Bão Full Friend!!\n"; die; }
      $url = json_decode(file_get_contents('https://graph.facebook.com/'.$id.'/posts?limit=1000&fields=id,name&access_token='.$access_token),true);
      $dembv = count($url["data"]);
      for ($y=0;$y<=$dembv;$y++){
       $idpost = $url["data"][$y]["id"];
       $idtach = explode('_' , $idpost);
       $id = $idtach[1];
       $type = "LOVE";
       camxuc($id,$type,$cookie);
       $dem++;
       echo "\033[1;97m~ \033[1;9".rand(2,7)."m".$dem."\033[1;97m ➜ \033[1;92mĐã Tương Tác [\033[1;95mWOW\033[1;92m] Với IDPost : \033[1;93m".$idtach[1]."\n";
  delay($hdelay);
    if ($y == $idpost){
   echo "\033[1;97m~ \033[1;92mReloading IDPost!!\r";
   }
    
   }
   
}

}
   if ($getreac == 'WOW'){
    $getbb = json_decode(file_get_contents('https://graph.facebook.com/me/friends?access_token='.$access_token),true);
    $bb = $getbb["data"];
    $dembb = count($bb);
    for ($x=0;$x<=$dembb;$x++){
     $id = $getbb["data"][$x]["id"];
     if ($x == $dembb){ echo "\033[1;97m~ \033[1;92mĐã Bão Full Friend!!\n"; die; }
      $url = json_decode(file_get_contents('https://graph.facebook.com/'.$id.'/posts?limit=1000&fields=id,name&access_token='.$access_token),true);
      $dembv = count($url["data"]);
      for ($y=0;$y<=$dembv;$y++){
       $idpost = $url["data"][$y]["id"];
       $idtach = explode('_' , $idpost);
       $id = $idtach[1];
       $type = "WOW";
       camxuc($id,$type,$cookie);
       $dem++;
       echo "\033[1;97m~ \033[1;9".rand(2,7)."m".$dem."\033[1;97m ➜ \033[1;92mĐã Tương Tác [\033[1;95mLOVE\033[1;92m] Với IDPost : \033[1;93m".$idtach[1]."\n";
       delay($hdelay);
   if ($y == $idpost){
   echo "\033[1;97m~ \033[1;92mReloading IDPost!!\r";
   }
    
   }
   
}

}
   if ($getreac == 'HAHA'){
    $getbb = json_decode(file_get_contents('https://graph.facebook.com/me/friends?access_token='.$access_token),true);
    $bb = $getbb["data"];
    $dembb = count($bb);
    for ($x=0;$x<=$dembb;$x++){
     $id = $getbb["data"][$x]["id"];
     if ($x == $dembb){ echo "\033[1;97m~ \033[1;92mĐã Bão Full Friend!!\n"; die; }
      $url = json_decode(file_get_contents('https://graph.facebook.com/'.$id.'/posts?limit=1000&fields=id,name&access_token='.$access_token),true);
      $dembv = count($url["data"]);
      for ($y=0;$y<=$dembv;$y++){
       $idpost = $url["data"][$y]["id"];
       $idtach = explode('_' , $idpost);
       $id = $idtach[1];
       $type = "HAHA";
       camxuc($id,$type,$cookie);
       $dem++;
       echo "\033[1;97m~ \033[1;9".rand(2,7)."m".$dem."\033[1;97m ➜ \033[1;92mĐã Tương Tác [\033[1;95mHAHA\033[1;92m] Với IDPost : \033[1;93m".$idtach[1]."\n";
       delay($hdelay);
   if ($y == $idpost){
   echo "\033[1;97m~ \033[1;92mReloading IDPost!!\r";
   }
    
   }
   
}

}
   if ($getreac == 'SAD'){
    $getbb = json_decode(file_get_contents('https://graph.facebook.com/me/friends?access_token='.$access_token),true);
    $bb = $getbb["data"];
    $dembb = count($bb);
    for ($x=0;$x<=$dembb;$x++){
     $id = $getbb["data"][$x]["id"];
     if ($x == $dembb){ echo "\033[1;97m~ \033[1;92mĐã Bão Full Friend!!\n"; die; }
      $url = json_decode(file_get_contents('https://graph.facebook.com/'.$id.'/posts?limit=1000&fields=id,name&access_token='.$access_token),true);
      $dembv = count($url["data"]);
      for ($y=0;$y<=$dembv;$y++){
       $idpost = $url["data"][$y]["id"];
       $idtach = explode('_' , $idpost);
       $id = $idtach[1];
       $type = "SAD";
       camxuc($id,$type,$cookie);
       $dem++;
       echo "\033[1;97m~ \033[1;9".rand(2,7)."m".$dem."\033[1;97m ➜ \033[1;92mĐã Tương Tác [\033[1;95mWOW\033[1;92m] Với IDPost : \033[1;93m".$idtach[1]."\n";
       delay($hdelay);
   if ($y == $idpost){
   echo "\033[1;97m~ \033[1;92mReloading IDPost!!\r";
   }
    
   }
   
}

}

}
//end 1
}
if ($_CHOOSE['choose'] == 3){
$page = json_decode(file_get_contents('https://graph.facebook.com/me/friends?access_token='.$access_token), true);
$dembb = count($page["data"]);
for ($x=0;$x<=$dembb;$x++){
$dem++;
$id = $page["data"][$x]["id"];
$name = $page["data"][$x]["name"];
echo "\033[1;97m~ \033[1;9".rand(2,7)."m".$dem."\033[1;97m ➜ \033[1;92mFriend : \033[1;93m".$page["data"][$x]["id"]."\033[1;97m | \033[1;92m".$page["data"][$x]["name"]."\n";usleep(40000);
$setup = fopen('Friend_List.json' , "a+");
$setupjson = "$idfb|$id|$name\n";
fwrite($setup, $setupjson);
fclose($setup);
if ($x == $dembb){ 
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
echo "\033[1;97m~ \033[1;92mĐÃ CHECKING–GET TẤT CẢ BẠN BÈ HIỆN CÓ!\n";
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
echo "\033[1;92mSET-UP FILE | Đã Lưu Vào \033[1;93mFriend_List.json\n";
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
}
//end for
}
//end 2
}
if ($_CHOOSE['choose'] == 4){
echo "\033[1;97m~ \033[1;92mTime Delay Chọc : ";
$hdelay = trim(fgets(STDIN));
echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
while (true){
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
        $idchoc = explode('&', $ok)[0];
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

$dem++;
 $getn = json_decode(file_get_contents('https://graph.facebook.com/?ids='.$idchoc.'&fields=id,name&access_token='.$access_token),true);
 $namechoc = $getn[$idchoc]["name"];
 echo "\033[1;97m~ \033[1;9".rand(2,7)."m".$dem."\033[1;97m ➜ \033[1;92mĐã Chọc\033[1;97m ➜ \033[1;93m".$idchoc."\033[1;97m | \033[1;93m".$namechoc."\n";
delay($hdelay);
}
//end 3
}
if ($_CHOOSE['choose'] == 5){
 echo "\033[1;97m→ \033[1;95m1\033[1;97m → \033[1;92mTuongTac + Cmt Đa Group\n";
 echo "\033[1;97m→ \033[1;95m2\033[1;97m → \033[1;92mTuongTac + Cmt Một Group\n";
 echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
 echo "\033[1;97m~ \033[1;92mChoose : ";
 $_CHOOSE['TT_Cmt[Group]'] = trim(fgets(STDIN));
 echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
  if ($_CHOOSE['TT_Cmt[Group]'] == 1){
  echo "\033[1;97m~ \033[1;92mHÃY KIỂM TRA FILE \033[1;93mGroupIDPost_List.json\033[1;92m ĐỂ CHECK VÀ XOÁ TẤT CẢ ID CÓ TRONG ĐÓ NHÉ!\n";
  echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
  echo "\033[1;97m~ \033[1;92mHãy Thêm IDGr/Bí Danh Group Vào File [\033[1;95mGroup_List.json\033[1;92m] . Bạn Đã Thêm Chưa (y/n) : ";
  $_CHOOSE['CheckingGR'] = trim(fgets(STDIN));
  echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
  if ($_CHOOSE['CheckingGR'] == 'y' or $_CHOOSE['CheckingGR'] == ''){
   echo "Checking File\r";
   if (!file_exists('Group_List.json')){ echo "\033[1;97m~ \033[1;92mBạn Chưa Thêm ID Nào Vào File!\n";die; } 
   else {
    echo "\033[1;92mGet List       \r";
    $data   = fread(fopen("Group_List.json", "r"), filesize("Group_List.json"));   
    $jsdc   = explode(PHP_EOL,$data);
    foreach ($jsdc as $_CHOOSE['Group_ID']){
     $url="https://mbasic.facebook.com/groups/".$_CHOOSE['Group_ID']."";
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
    $tach1 = explode('><head><title>' , $data);
    $tach2 = explode('</title><meta' , $tach1[1])[0];
    $cut1 = explode('class="bd">' , $data);
    $cut2 = explode('</div><div' , $cut1[1])[0];
    if ($tach2 == 'Bạn tạm thời bị chặn'){ echo "\033[1;97m~ \033[1;92mBạn Tạm Thời Bị Chặn!!\n"; die; }
    if ($tach2 == 'Không tìm thấy nội dung'){ echo "\033[1;97m~ \033[1;92mKhông Tìm Thấy Group!!\n"; }
    if ($cut2 == 'Không thể xử lý yêu cầu của bạn</span><br />Đã xảy ra lỗi với yêu cầu này. Chúng tôi đang cố gắng sửa lỗi sớm nhất có thể.'){ echo "\033[1;97m~ \033[1;92mLỗi Xử Lý!\n"; die; }
    curl_close($ch);
    $listid = explode('/permalink',$data);
    $getngr = explode('<head><title>' , $data);
    $namegr = explode('</title><meta' , $getngr[1]);
    $dem++;
    echo "\033[1;97m~ \033[1;9".rand(2,7)."m".$dem."\033[1;97m ➜ \033[1;92mGroup : \033[1;93m".$namegr[0]."     \n";
	foreach ($listid as $key){
		$ids= explode('/', $key);
		$id = explode('/',$ids[1])[0];
		  echo "Đang Đọc Và Ghi IDPost Lần 1\r";usleep(3000);
		  $setup = fopen('GroupIDPost_List.json','a+');
		  $setuptxt = "$namegr[0]|$id\n";
		  fwrite($setup,$setuptxt);
		  fclose($setup);
		 }
		 foreach ($listid as $key){
		$ids= explode('/', $key);
		$id = explode('/',$ids[1])[0];
		  echo "Đang Đọc Và Ghi IDPost Lần 2\r";usleep(3000);
		  $setup = fopen('GroupIDPost_List.json','a+');
		  $setuptxt = "$namegr[0]|$id\n";
		  fwrite($setup,$setuptxt);
		  fclose($setup);
		 }
         foreach ($listid as $key){
		$ids= explode('/', $key);
		$id = explode('/',$ids[1])[0];
		  echo "Đang Đọc Và Ghi IDPost Lần 3\r";usleep(3000);
		  $setup = fopen('GroupIDPost_List.json','a+');
		  $setuptxt = "$namegr[0]|$id\n";
		  fwrite($setup,$setuptxt);
		  fclose($setup);
		 }
         foreach ($listid as $key){
		$ids= explode('/', $key);
		$id = explode('/',$ids[1])[0];
		  echo "Đang Đọc Và Ghi IDPost Lần 4\r";usleep(3000);
		  $setup = fopen('GroupIDPost_List.json','a+');
		  $setuptxt = "$namegr[0]|$id\n";
		  fwrite($setup,$setuptxt);
		  fclose($setup);
		 }
         foreach ($listid as $key){
		$ids= explode('/', $key);
		$id = explode('/',$ids[1])[0];
		  echo "Đang Đọc Và Ghi IDPost Lần 5\r";usleep(3000);
		  $setup = fopen('GroupIDPost_List.json','a+');
		  $setuptxt = "$namegr[0]|$id\n";
		  fwrite($setup,$setuptxt);
		  fclose($setup);
		 }
		 		$ids= explode('/', $key);
		$id = explode('/',$ids[1])[0];
		  echo "Đang Đọc Và Ghi IDPost Lần 6\r";usleep(3000);
		  $setup = fopen('GroupIDPost_List.json','a+');
		  $setuptxt = "$namegr[0]|$id\n";
		  fwrite($setup,$setuptxt);
		  fclose($setup);
		 }
		 foreach ($listid as $key){
		$ids= explode('/', $key);
		$id = explode('/',$ids[1])[0];
		  echo "Đang Đọc Và Ghi IDPost Lần 7\r";usleep(3000);
		  $setup = fopen('GroupIDPost_List.json','a+');
		  $setuptxt = "$namegr[0]|$id\n";
		  fwrite($setup,$setuptxt);
		  fclose($setup);
		 }
         foreach ($listid as $key){
		$ids= explode('/', $key);
		$id = explode('/',$ids[1])[0];
		  echo "Đang Đọc Và Ghi IDPost Lần 8\r";usleep(3000);
		  $setup = fopen('GroupIDPost_List.json','a+');
		  $setuptxt = "$namegr[0]|$id\n";
		  fwrite($setup,$setuptxt);
		  fclose($setup);
		 }
         foreach ($listid as $key){
		$ids= explode('/', $key);
		$id = explode('/',$ids[1])[0];
		  echo "Đang Đọc Và Ghi IDPost Lần 9\r";usleep(3000);
		  $setup = fopen('GroupIDPost_List.json','a+');
		  $setuptxt = "$namegr[0]|$id\n";
		  fwrite($setup,$setuptxt);
		  fclose($setup);
		 }
         foreach ($listid as $key){
		$ids= explode('/', $key);
		$id = explode('/',$ids[1])[0];
		  echo "Đang Đọc Và Ghi IDPost Lần 10\r";usleep(3000);
		  $setup = fopen('GroupIDPost_List.json','a+');
		  $setuptxt = "$namegr[0]|$id\n";
		  fwrite($setup,$setuptxt);
		  fclose($setup);
		 }
		$ids= explode('/', $key);
		$id = explode('/',$ids[1])[0];
		  echo "Đang Đọc Và Ghi IDPost Lần 11\r";usleep(3000);
		  $setup = fopen('GroupIDPost_List.json','a+');
		  $setuptxt = "$namegr[0]|$id\n";
		  fwrite($setup,$setuptxt);
		  fclose($setup);
		 }
		 foreach ($listid as $key){
		$ids= explode('/', $key);
		$id = explode('/',$ids[1])[0];
		  echo "Đang Đọc Và Ghi IDPost Lần 12\r";usleep(3000);
		  $setup = fopen('GroupIDPost_List.json','a+');
		  $setuptxt = "$namegr[0]|$id\n";
		  fwrite($setup,$setuptxt);
		  fclose($setup);
		 }
         foreach ($listid as $key){
		$ids= explode('/', $key);
		$id = explode('/',$ids[1])[0];
		  echo "Đang Đọc Và Ghi IDPost Lần 13\r";usleep(3000);
		  $setup = fopen('GroupIDPost_List.json','a+');
		  $setuptxt = "$namegr[0]|$id\n";
		  fwrite($setup,$setuptxt);
		  fclose($setup);
		 }
         foreach ($listid as $key){
		$ids= explode('/', $key);
		$id = explode('/',$ids[1])[0];
		  echo "Đang Đọc Và Ghi IDPost Lần 14\r";usleep(3000);
		  $setup = fopen('GroupIDPost_List.json','a+');
		  $setuptxt = "$namegr[0]|$id\n";
		  fwrite($setup,$setuptxt);
		  fclose($setup);
		 }
         foreach ($listid as $key){
		$ids= explode('/', $key);
		$id = explode('/',$ids[1])[0];
		  echo "Đang Đọc Và Ghi IDPost Lần 15\r";usleep(5);
		  $setup = fopen('GroupIDPost_List.json','a+');
		  $setuptxt = "$namegr[0]|$id\n";
		  fwrite($setup,$setuptxt);
		  fclose($setup);
		 }
  	echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
    echo "\033[1;97m~ \033[1;92mIDPost Sẽ Tự Lặp Lại 2-5 Lần Nha :3 \n";
    echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
	echo "\033[1;97m~ \033[1;92mLIKE (y/n) : ";
    if (trim(fgets(STDIN)) == 'y'){
     array_push($listreaction,'LIKE');
    }
    echo "\033[1;97m~ \033[1;92mLOVE (y/n) : ";
    if (trim(fgets(STDIN)) == 'y'){
     array_push($listreaction,'LOVE');
    }
    echo "\033[1;97m~ \033[1;92mWOW (y/n) : ";
    if (trim(fgets(STDIN)) == 'y'){
     array_push($listreaction,'WOW');
    }
    echo "\033[1;97m~ \033[1;92mHAHA (y/n) : ";
    if (trim(fgets(STDIN)) == 'y'){
     array_push($listreaction,'HAHA');
    }
    echo "\033[1;97m~ \033[1;92mSAD (y/n) : ";
    if (trim(fgets(STDIN)) == 'y'){
     array_push($listreaction,'SAD');
    }
   echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
   echo "\033[1;97m~ \033[1;92mTime Delay : ";
   $hdelay = trim(fgets(STDIN));
   echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
   echo "\033[1;97m~ \033[1;92mComment ? (y/n) : ";
   $_CHOOSE['SetUp_CMT'] = trim(fgets(STDIN));
   echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
   if ($_CHOOSE['SetUp_CMT'] == 'y' or $_CHOOSE['SetUp_CMT'] == ''){
    echo "\033[1;97m~ \033[1;92mVui Lòng Thêm Nội Dung Vào [\033[1;95mNoidung_CMT.json\033[1;92m] . Enter Khi Đã Thêm : ";
    $_CHOOSE['CheckingCMT'] = trim(fgets(STDIN));
    echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
    if ($_CHOOSE['CheckingCMT'] == ''){
     if (!file_exists('Noidung_CMT.json')){ echo "\033[1;92mBạn Chưa Thêm Nội Dung Nào!\n"; }
     else {
     }
     }
     } elseif ($_CHOOSE['SetUp_CMT'] == 'n'){ echo "    \r"; }
  while (true){
     $data   = fread(fopen("GroupIDPost_List.json", "r"), filesize("GroupIDPost_List.json"));   
    $jsdc   = explode(PHP_EOL,$data);
	foreach ($jsdc as $list){
	 echo "\033[1;97m→ \033[1;9".rand(2,7)."mĐang Đọc ID            \r";
	 $id = explode('|' , $list)[1];
	 $namegr = explode('|' , $list)[0];
   $type = $listreaction[array_rand($listreaction,1)];
   $cx = camxuc($id,$type,$cookie);
   if ($id == null){ echo "\033[1;97m→ \033[1;9".rand(2,7)."mID Không Tồn Tại!\r"; $id = "Không Tồn Tại"; }
   $xnxx++;
    echo "\033[1;97m~ \033[1;9".rand(2,7)."m".$xnxx."\033[1;97m ➜ \033[1;92mĐã Tương Tác [\033[1;95m".$type."\033[1;92m] Với IDPost : \033[1;93m".$id."\n";
   if ($_CHOOSE['SetUp_CMT'] == 'y'){
    $data   = fread(fopen("Noidung_CMT.json", "r"), filesize("Noidung_CMT.json"));   
    $jsdc   = explode(PHP_EOL,$data);
	foreach ($jsdc as $jsdddddd){
	$msg = "[Z-Tool] > $jsdddddd";
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
    curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/comments');
   	$head = ["Connection: keep-alive", "Keep-Alive: 300", "authority: m.facebook.com", "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cache-control: max-age=0", "upgrade-insecure-requests: 1", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document"];
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
    echo "\033[1;97m~ \033[1;9".rand(2,7)."mZ-Tool\033[1;97m ➜ \033[1;92mĐã Comment Với IDPost : \033[1;93m".$id."\n";
   }
   }
  delay($hdelay); 
   	 }
    }
   }
//end 1
}
if ($_CHOOSE['TT_Cmt[Group]'] == 2){
 echo "\033[1;97m~ \033[1;92mIDGr Hoặc Bí Danh Gr : \033[1;93m";
 $_CHOOSE['Group_ID'] = trim(fgets(STDIN));
 echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
	$url="https://mbasic.facebook.com/groups/".$_CHOOSE['Group_ID']."";
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
 $tach1 = explode('><head><title>' , $data);
 $tach2 = explode('</title><meta' , $tach1[1])[0];
 $cut1 = explode('class="bd">' , $data);
 $cut2 = explode('</div><div' , $cut1[1])[0];
 if ($tach2 == 'Bạn tạm thời bị chặn'){ echo "\033[1;97m~ \033[1;92mBạn Tạm Thời Bị Chặn!!\n"; die; }
 if ($tach2 == 'Không tìm thấy nội dung'){ echo "\033[1;97m~ \033[1;92mKhông Tìm Thấy Group!!\n"; die; }
 if ($cut2 == 'Không thể xử lý yêu cầu của bạn</span><br />Đã xảy ra lỗi với yêu cầu này. Chúng tôi đang cố gắng sửa lỗi sớm nhất có thể.'){ echo "\033[1;97m~ \033[1;92mLỗi Xử Lý!\n"; die; }
 curl_close($ch);
 $listid = explode('/permalink',$data);
 $getngr = explode('<head><title>' , $data);
 $namegr = explode('</title><meta' , $getngr[1]);
 echo "\033[1;92mTên Group : \033[1;93m".$namegr[0]."\n";
 echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
    	echo "\033[1;97m~ \033[1;92mLIKE (y/n) : ";
    if (trim(fgets(STDIN)) == 'y'){
     array_push($listreaction,'LIKE');
    }
    echo "\033[1;97m~ \033[1;92mLOVE (y/n) : ";
    if (trim(fgets(STDIN)) == 'y'){
     array_push($listreaction,'LOVE');
    }
    echo "\033[1;97m~ \033[1;92mWOW (y/n) : ";
    if (trim(fgets(STDIN)) == 'y'){
     array_push($listreaction,'WOW');
    }
    echo "\033[1;97m~ \033[1;92mHAHA (y/n) : ";
    if (trim(fgets(STDIN)) == 'y'){
     array_push($listreaction,'HAHA');
    }
    echo "\033[1;97m~ \033[1;92mSAD (y/n) : ";
    if (trim(fgets(STDIN)) == 'y'){
     array_push($listreaction,'SAD');
    }
   echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
   echo "\033[1;97m~ \033[1;92mTime Delay : ";
   $hdelay = trim(fgets(STDIN));
   echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
   echo "\033[1;97m~ \033[1;92mComment ? (y/n) : ";
   $_CHOOSE['SetUp_CMT'] = trim(fgets(STDIN));
   echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
   if ($_CHOOSE['SetUp_CMT'] == 'y' or $_CHOOSE['SetUp_CMT'] == ''){
    echo "\033[1;97m~ \033[1;92mVui Lòng Thêm Nội Dung Vào [\033[1;95mNoidung_CMT.json\033[1;92m] . Enter Khi Đã Thêm : ";
    $_CHOOSE['CheckingCMT'] = trim(fgets(STDIN));
    echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
    if ($_CHOOSE['CheckingCMT'] == ''){
     if (!file_exists('Noidung_CMT.json')){ echo "\033[1;92mBạn Chưa Thêm Nội Dung Nào!\n"; }
     else {
      $msg = file_get_contents('Noidung_CMT.json');
       }
      }
     } elseif ($_CHOOSE['SetUp_CMT'] == 'n'){ echo "    \r"; }
   $type = $listreaction[array_rand($listreaction,1)];
	foreach ($listid as $key){
		$ids= explode('/', $key);
		$id = explode('/',$ids[1])[0];
   $cx = camxuc($id,$type,$cookie);
   if ($id == null){ echo "\033[1;97m→ \033[1;9".rand(2,7)."mID Không Tồn Tại!\r"; $id = "Không Tồn Tại"; }
   $xnxx++;
    echo "\033[1;97m~ \033[1;9".rand(2,7)."m".$xnxx."\033[1;97m ➜ \033[1;92mĐã Tương Tác [\033[1;95m".$type."\033[1;92m] Với IDPost : \033[1;93m".$id."\n";
   if ($_CHOOSE['SetUp_CMT'] == 'y'){
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
    curl_setopt($ch, CURLOPT_TCP_FASTOPEN, true);
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/comments');
   	$head = ["Connection: keep-alive", "Keep-Alive: 300", "authority: m.facebook.com", "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cache-control: max-age=0", "upgrade-insecure-requests: 1", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document"];
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
    echo "\033[1;97m~ \033[1;9".rand(2,7)."m".$dem."\033[1;97m ➜ \033[1;92mĐã Comment Với IDPost : \033[1;93m".$id."\n";
   }
  delay($hdelay); 
   	 }
    }
   }
if ($_CHOOSE['choose'] == 6){
 echo "\033[1;97m→ \033[1;92mTime Delay : ";
 $hdelay = trim(fgets(STDIN));
 echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
 while (true){
  $mr = curl_init();
  curl_setopt($mr, CURLOPT_URL, "https://mbasic.facebook.com/subscribe/lists/?id=$idfb&f=10&t=out&refid=61");
  $head = ["Connection: keep-alive","Keep-Alive: 300","Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7","Accept-Language: en-us,en;q=0.5"];
  curl_setopt($mr, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
  curl_setopt($mr, CURLOPT_COOKIE, $cookie);
  curl_setopt($mr, CURLOPT_HTTPHEADER, $head);
  curl_setopt($mr, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($mr, CURLOPT_SSL_VERIFYHOST, FALSE);
  curl_setopt($mr, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($mr, CURLOPT_FOLLOWLOCATION, TRUE);
  $mr2 = curl_exec($mr);
  $tach = explode('href="/profile.php?id=' , $mr2);
  $id = explode('&amp;' , $tach[1])[0];
  if ($id == null){
  $tach1 = explode('profile picture" /><div class="br"><a href="/' , $mr2);
  $id = explode('?' , $tach1[1])[0];
  }
  echo "\033[1;97m→ \033[1;92mSeed User/UID : ".$id."\r";
  $abcd = removed_follow($cookie,$id);
  $vlxx++;
  echo "\033[1;97m~ \033[1;9".rand(2,7)."m".$vlxx."\033[1;97m ➜ \033[1;92mĐã Unfollow User/ID : \033[1;93m".$id."\033[1;97m|\033[1;93m".$abcd."\n";
  delay($hdelay);
 }
}
if ($_CHOOSE['choose'] == 7){
 echo "\033[1;97m~ \033[1;92mGet UID_Friend Từ ? ('\033[1;93mfile\033[1;92m','\033[1;93mfb\033[1;92m') : ";
 $_CHOOSE['FILEBB'] = trim(fgets(STDIN));
 echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
 if ($_CHOOSE['FILEBB'] == 'file'){
  if (file_exists('Friend_List.json')){
   echo "\033[1;97m~ \033[1;92mSử Dụng Lại File Đã Xuất Friend (\033[1;95mFriend_List.json\033[1;92m) (y/n) : ";
   $_CHOOSE['cofirm'] = trim(fgets(STDIN));
   echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
   if ($_CHOOSE['cofirm'] == 'y'){
    echo "\033[1;97m~ \033[1;92mĐã Sử Lại Lại File!\r"; sleep(1);
    $data   = fread(fopen("Friend_List.json", "r"), filesize("Friend_List.json"));
    $jsdc    = explode(PHP_EOL,$data);
    echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
    foreach ($jsdc as $id){
     $idfb_id_name = explode('|',$id);
     if ($idfb_id_name[0] !== $idfb){ echo "\033[1;97m→ \033[1;92mIDFB Không Trùng Với IDFB Có Trong File!! , Đã Xoá File!\n";die; }
     removed_friend($cookie,$uid);
     $dem++;
     echo "\033[1;97m~ \033[1;9".rand(2,7)."m".$dem."\033[1;97m ➜ \033[1;92mĐã Xoá \033[1;95m ".$idfb_id_name[1]."\033[1;97m | \033[1;95m".$idfb_id_name[2]." \033[1;92mRa Khỏi DD Bạn Bè!\n";
   }
  }
 }
} elseif ($_CHOOSE['FILEBB'] == 'fb'){
 $getbb = json_decode(file_get_contents('https://graph.facebook.com/me/friends?access_token='.$access_token),true);
 $bb = $getbb["data"];
 $dembb = count($bb);
 for ($x=0;$x<=$dembb;$x++){
  $id = $getbb["data"][$x]["id"];
  $name = $getbb["data"][$x]["name"];
  removed_friend($cookie,$id);
  $dem++;
  echo "\033[1;97m~ \033[1;9".rand(2,7)."m".$dem."\033[1;97m ➜ \033[1;92mĐã Xoá \033[1;95m ".$id."\033[1;97m | \033[1;95m".$name." \033[1;92mRa Khỏi DD Bạn Bè!\n";
  if ($dem == $dembb){ echo "\033[1;97m~ \033[1;92mĐã Xoá Full!!\n";die; }
  }
 }
}
if ($_CHOOSE['choose'] == 8){
 echo "\033[1:97m→ \033[1;92mComing Soon...!\n"; die;
}
if ($_CHOOSE['choose'] == 9){
 echo "\033[1;97m~ \033[1;92mUID Wall : \033[1;93m";
 $id = trim(fgets(STDIN));
 echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
 echo "\033[1;97m~ \033[1;92mNội Dung : \033[1;93m";
 $get1 = trim(fgets(STDIN));
 echo "\033[1;97m~ \033[1;92mTime Delay : ";
  $hdelay = trim(fgets(STDIN));
 echo "\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
 while (true){
  $link = "https://m.facebook.com/messages/read/?tid=cid.c.".$id.":".$idfb;
  $dem++;
  $time = date('H:i:s');
  $msg = "[$dem][$time] $get1";
  $getn = json_decode(file_get_contents('https://graph.facebook.com/?ids='.$id.'&fields=id,name&access_token='.$access_token),true);
  $name = $getn[$id]["name"];
  $g = send_message($cookie,$link,$msg); 
  $tach1 = explode('lass="mfsm">' , $g);
  $tach2 = explode('</span><br' , $tach1[1])[0];
  if ($tach2 == 'Không có người nhận'){ echo "\033[1;97m~ \033[1;92mLỗi Gửi ID!\n";die; }
   $tach3 = explode('<head><title>' , $g);
   $tach4 = explode('</title>' , $tach4[1])[0];
   if ($tach4 == 'Lỗi'){ echo "\033[1;97m~ \033[1;92mLỗi Gửi Tin Nhắn!!\n"; die; } else {
     echo "\033[1;97m~ \033[1;9".rand(2,7)."m".$dem."\033[1;97m >>> \033[1;92mSeeding\033[1;97m >>> \033[1;92m".$id."\033[1;97m|\033[1;92m".$name."\033[1;97m >>> \033[1;92mSuccessfully!\n";
     delay($hdelay);
   }
  }
 }
function getposthome($cookie){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://mbasic.facebook.com/home.php');
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
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,"Mozilla/5.0 (Linux; Android 10; SM-M205G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.210 Mobile Safari/537.36");
curl_setopt($ch, CURLOPT_COOKIE,$cookie);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
return  curl_exec($ch);
curl_close($ch);
}
function chuyenlinkbai($cookie,$linktiep){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$linktiep);
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
curl_setopt($ch, CURLOPT_TIMEOUT,60);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
curl_setopt($ch, CURLOPT_USERAGENT,"Mozilla/5.0 (Linux; Android 10; SM-M205G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.210 Mobile Safari/537.36");
curl_setopt($ch, CURLOPT_COOKIE,$cookie);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
curl_setopt($ch, CURLOPT_ENCODING,'');
return  curl_exec($ch);
curl_close($ch);
}
function camxuc($id,$type,$cookie){
	$ch = curl_init();
	if(strpos($id,'_')){
		$uid = explode('_',$id, 2);
		$id2 = 'story.php?story_fbid='.$uid[1].'&id='.$uid[0];
	}else{
		$id2 = $id;
	}
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id2);
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
	if (strpos($page, "xs=deleted") == true) { echo "\033[1;97m~ \033[1;92mDie Cookie!!\n"; die; }
	if ($id2 != $id && explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0]){
		$get = explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0];
	}else{
		$get = $id2;
	}
	$link = 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id='.$get;
	curl_setopt($ch, CURLOPT_URL, $link);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$cx = curl_exec($ch);
	$haha = explode('<a href="',$cx);
	if ($type == 'LIKE'){
		$haha2 = explode('" style="display:block"',$haha[1])[0];
	}else if ($type == 'LOVE'){
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
function removed_friend($cookie,$idfb_id_name){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,'https://mbasic.facebook.com/profile.php?id='.$idfb_id_name[0]);
    $head = ["Connection: keep-alive","Keep-Alive: 300","authority: m.facebook.com","ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7","accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5","cache-control: max-age=0","upgrade-insecure-requests: 1","accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9","sec-fetch-site: none","sec-fetch-mode: navigate","sec-fetch-user: ?1","sec-fetch-dest: document"];
    curl_setopt($ch, CURLOPT_TIMEOUT,60);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,60);
    curl_setopt($ch, CURLOPT_USERAGENT,"Mozilla/5.0 (Linux; Android 10; SM-M205G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.210 Mobile Safari/537.36");
    curl_setopt($ch, CURLOPT_COOKIE,$cookie);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,TRUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$head);
    curl_setopt($ch, CURLOPT_ENCODING,'');
    $list = curl_exec($ch);
    $data1 = explode('" autocomplete=',explode('name="fb_dtsg" value="',$list)[1])[0];
    $data2= explode('" autocomplete=',explode('name="jazoest" value="',$list)[1])[0];
    $data = http_build_query(array('fb_dtsg'=>$data1,'jazoest'=>$data2,'friend_id'=>$uid[0] ,'unref'=>'profile_gear','confirm'=>'Xác nhận'));
    $head[] = 'content-length: '.strlen($data);
    $head[] = 'refer: https://mbasic.facebook.com/removefriend.php?friend_id='.$uid[0].'&unref=profile_gear&refid=17';
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/a/removefriend.php');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $h = curl_exec($ch);
    curl_close($ch);
}
function removed_follow($cookie,$id){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id);
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
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; Android 10; SM-M205G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.210 Mobile Safari/537.36");
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$n = curl_exec($ch);
$lin = explode('">Bỏ theo dõi',explode('/a/subscriptions/remove?', $n)[1])[0];
$link = str_replace('&amp;', '&', $lin);
curl_setopt($ch, CURLOPT_URL, "https://mbasic.facebook.com/a/subscriptions/remove?".$link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$n = curl_exec($ch);
curl_close($ch);
return explode('</title><meta',explode('head><title>',$n)[1])[0];
}
function action_send($cookie,$link,$tids,$wwwupp,$body,$waterfall_source,$fb_dtsg,$jazoest){
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://m.facebook.com$link");
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
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.106 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    $data = $tids."&".$wwwupp."&".$body."&".$waterfall_source."&".$fb_dtsg."&".$jazoest;
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $access = curl_exec($ch);
    curl_close($ch); 
    return $access;
}
function send_message($cookie,$link,$send){
$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $link);
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
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.106 Safari/537.36');
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
    $ex_1 = explode('<form method="post" action="/messages/send/?icm=1&amp;refid=12"',$access)[1]; 
    $link_send = htmlspecialchars_decode(explode('"',explode('<form method="post" action="',$access)[1])[0]);
    $fb_dtsg = "fb_dtsg=".explode('"',explode('name="fb_dtsg" value="',$ex_1)[1])[0];
    $jazoest = "jazoest=".explode('"',explode('name="jazoest" value="',$ex_1)[1])[0];
    $tids = "tids=".explode('"',explode('name="tids" value="',$ex_1)[1])[0];
    $wwwupp = "wwwupp=".explode('"',explode('name="wwwupp" value="',$ex_1)[1])[0];
    $waterfall_source = "waterfall_source=message";
    $result = action_send($cookie,$link_send,$tids,$wwwupp,"body=$send",$waterfall_source,$fb_dtsg,$jazoest);
    return $result;
}
function delay($hdelay){
for ($h = $hdelay; $h >-1; $h--){  
echo "\033[1;97m~ \033[1;97mWai\033[1;92mting For \033[1;93m".$h."\033[1;92m Seconds \r";usleep(40000);
echo "\033[1;97m~ \033[1;92mWai\033[1;97mting For \033[1;93m".$h."\033[1;92m Seconds \r";usleep(40000);
echo "\033[1;97m~ \033[1;92mWaiting \033[1;97mFor\033[1;92m \033[1;93m".$h."\033[1;92m Seconds \r";usleep(40000);
echo "\033[1;97m~ \033[1;92mWaiting For \033[1;93m".$h."\033[1;97m Sec\033[1;92monds \r";usleep(40000);
echo "\033[1;97m~ \033[1;92mWaiting For \033[1;93m".$h."\033[1;92m Sec\033[1;97monds \r";usleep(40000);
echo "\033[1;97m~ \033[1;91mWai\033[1;92mting For \033[1;93m".$h."\033[1;92m Seconds \r";usleep(40000);
echo "\033[1;97m~ \033[1;92mWai\033[1;91mting For \033[1;93m".$h."\033[1;92m Seconds \r";usleep(40000);
echo "\033[1;97m~ \033[1;92mWaiting \033[1;91mFor\033[1;92m \033[1;93m".$h."\033[1;92m Seconds \r";usleep(40000);
echo "\033[1;97m~ \033[1;92mWaiting For \033[1;93m".$h."\033[1;91m Sec\033[1;92monds \r";usleep(40000);
echo "\033[1;97m~ \033[1;92mWaiting For \033[1;93m".$h."\033[1;92m Sec\033[1;91monds \r";usleep(40000);
echo "\033[1;97m~ \033[1;93mWai\033[1;92mting For \033[1;93m".$h."\033[1;92m Seconds \r";usleep(40000);
echo "\033[1;97m~ \033[1;92mWai\033[1;93mting For \033[1;93m".$h."\033[1;92m Seconds \r";usleep(40000);
echo "\033[1;97m~ \033[1;92mWaiting \033[1;93mFor\033[1;92m \033[1;93m".$h."\033[1;92m Seconds \r";usleep(40000);
echo "\033[1;97m~ \033[1;92mWaiting For \033[1;93m".$h."\033[1;93m Sec\033[1;92monds \r";usleep(40000);
echo "\033[1;97m~ \033[1;92mWaiting For \033[1;93m".$h."\033[1;92m Sec\033[1;93monds \r";usleep(40000);
echo "\033[1;97m~ \033[1;94mWai\033[1;92mting For \033[1;93m".$h."\033[1;92m Seconds \r";usleep(40000);
echo "\033[1;97m~ \033[1;92mWai\033[1;94mting For \033[1;93m".$h."\033[1;92m Seconds \r";usleep(40000);
echo "\033[1;97m~ \033[1;92mWaiting \033[1;94mFor\033[1;92m \033[1;93m".$h."\033[1;92m Seconds \r";usleep(40000);
echo "\033[1;97m~ \033[1;92mWaiting For \033[1;93m".$h."\033[1;94m Sec\033[1;92monds \r";usleep(40000);
echo "\033[1;97m~ \033[1;92mWaiting For \033[1;93m".$h."\033[1;92m Sec\033[1;94monds \r";usleep(40000);
echo "\033[1;97m~ \033[1;95mWai\033[1;92mting For \033[1;93m".$h."\033[1;92m Seconds \r";usleep(40000);
echo "\033[1;97m~ \033[1;92mWai\033[1;95mting For \033[1;93m".$h."\033[1;92m Seconds \r";usleep(40000);
echo "\033[1;97m~ \033[1;92mWaiting \033[1;95mFor\033[1;92m \033[1;93m".$h."\033[1;92m Seconds \r";usleep(40000);
echo "\033[1;97m~ \033[1;92mWaiting For \033[1;93m".$h."\033[1;95m Sec\033[1;92monds \r";usleep(40000);
echo "\033[1;97m~ \033[1;92mWaiting For \033[1;93m".$h."\033[1;92m Sec\033[1;95monds \r";usleep(40000);
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
\033[1;97m~ \033[1;92mNuôi Facebook | Beta
\033[1;97m~ \033[1;92mWritten → Nguyen Minh Huy
\033[1;97m~ \033[1;92mHệ Thống Dịch Vụ Facebook | Clone Số 1 Việt Nam | \033[1;97mShopqvinh.com
\033[1;97m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n";
  $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        usleep(150);
    
    }
    }