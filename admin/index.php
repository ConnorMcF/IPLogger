
<?php
require('header.php');
include('welcomeadmin.php');
if (htmlspecialchars($_GET["d"] == 1)) {
    echo('<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <span class="glyphicon glyphicon-ok"></span> Logs purged successfully!
</div>');
}
if (htmlspecialchars($_GET["d"] == 2)) {
    echo('<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <span class="glyphicon glyphicon-warning-sign"></span> Failed to purge logs!
</div>');
}
if (htmlspecialchars($_GET["d"] == 3)) {
    echo('<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <span class="glyphicon glyphicon-info-sign"></span> Nothing to purge!
</div>');
}
$file = '../ip/index.php';
$date = date('d/m/y');
$time = date('H:i:s');
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

file_put_contents($file, $log, FILE_APPEND);
if (!file_exists('ip/' . $ip)) {
    mkdir('ip/'. $ip, 0777, true) or die("ERROR: Unable to create info directory in /ip/!<br>");
}

echo('<div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>  ' . $ip . '</div>');
echo('<div class="alert alert-info" role="alert"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>  Logging is disabled in admin mode.</div>');
?>

<br>
</div>
</nav>
