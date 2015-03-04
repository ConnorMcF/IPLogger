<?php
require('header.php');
require('config.php');
echo("Please wait...");


// Specify the target directory and add forward slash
$path = "../ip/";
$path2 = "../ip/index.php";
// Loop over all of the files in the folder
foreach(glob($path ."*.*") as $file) {
    unlink($file); // Delete each file through the loop
}
rmdir($path);

if (file_exists($path)) {
    header('Location: index.php/?d=2');
}

$myfile = fopen($path2, "r") or die("Unable to open file!");
$ips = fread($myfile,filesize("$path2"));
fclose($myfile);

if ($ips == "") {
    header('Location: index.php/?d=3');
}
echo("Creating directory for further logging.");
mkdir($path);
echo("Complete!");
header('Location: #/?d=1');
?>
