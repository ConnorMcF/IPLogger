<?php
require('header.php');
include('welcome.php');
$file = 'ip/index.php';
$date = date('d/m/y');
$time = date('H:i:s');



$myfile = fopen("ip/count.data", "r");
$count1 =  fread($myfile,filesize("ip/count.data"));
fclose($myfile);

$myfile = fopen("counttotal.data", "r");
$count2 =  fread($myfile,filesize("counttotal.data"));
fclose($myfile);

echo('<div class="well">Did you know? There are currently ' . ($count1 + 1) . ' logs in storage, in total we have stored ' . ($count2 + 1) . ' total logs!</div>');


if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
if (!htmlspecialchars($_GET["m"] = ""))
    $log = '<a href="'. $ip . '">'. $ip . ' - ' . $time .' - ' . htmlspecialchars($_GET["m"]) . '</a><br>';
if (htmlspecialchars($_GET["m"] = ""))
    $log = '<a href="'. $ip . '">'. $ip . ' - ' . $time .'</a><br>';
$infofileloc = '../ip/' . $ip . '/index.php';

$details = json_decode(file_get_contents("http://ipinfo.io/' . $ip . '/json"));
$city = $details->city;
$hostname = $details->hostname;
$region = $details->region;
$country = $details->country;
$loc = $details->loc;
$org = $details->org;

$information = "<php? require('../header.php') or die ('CRITICAL: Missing ../header.php') ?> <h1>". $ip . "</h1><br>Message: ". htmlspecialchars($_GET["m"]) . "<br>Date: " . $date . "<br>Time: " . $time . "<br>Hostname: " . $hostname . "<br>City: " . $city . "<br>Country: " . $country . "<br>Region: " . $region . "<br>Location: " . $loc . "<br>ISP Org: " . $org . "<br>";

file_put_contents($file, $log, FILE_APPEND);

$theCounterFile = "ip/count.data";
file_put_contents($theCounterFile, file_get_contents($theCounterFile)+1);

$theCounterFile = "counttotal.data";
file_put_contents($theCounterFile, file_get_contents($theCounterFile)+1);

file_put_contents($infofileloc, $information);
echo('<div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>  ' . $ip . '</div>');
?>


<br>
</div>
</nav>
