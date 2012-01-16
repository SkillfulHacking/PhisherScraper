/* PhisherScraper
 Administrative console for webpage generation 
 copyright (c) 2011 Mark Scrano mscrano@ieee.org
 version 0.1
*/
<form action="parseurl.php" method="post">
URL: <input type="text" name="targetUrl">
Filename: <input type="text" name="phpFile">
<input type="submit" />
</form>

<?php
// validate input before passing to parsing script 
// check for existing sites and display and allow edit functions

$timeStr = strftime('%T');
$dateStr = date('m-d-Y');
echo "The current time:".$timeStr." and date:".$dateStr."\n";
?>
