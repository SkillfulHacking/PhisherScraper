<?php
//detect useragent and info
$ua = $_SERVER['HTTP_USER_AGENT'];
$browser = get_browser(null, true);
?>

/* PhisherScraper
 Administrative console for webpage generation 
 copyright (c) 2011 Mark Scrano mscrano@ieee.org
 version 0.3
*/
<form action="parseurl.php" method="post">
   <fieldset>
      <legend>Phisher Scraper</legend>
      URL: <input type="url" name="targetUrl">
      Filename: <input type="text" name="phpFile">
      User Agent: 
      <select id="uagent">
         <option value="<?php echo $ua; ?>">Current browser</option>
         <option value="Mozilla/5.0 (Windows NT 6.0; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0" >Firefox</option>
      </select>
      <input type="hidden" name="ua" value="<?php echo $ua; ?>">
      <input type="hidden" name="browser" value="<?php echo $browser; ?>">
      <input type="submit" />
   </fieldset>
</form>

<?php
// check for existing sites and display and allow edit functions

$timeStr = strftime('%T');
$dateStr = date('m-d-Y');
echo "The current time:".$timeStr." and date:".$dateStr."\n\n"; ?>
<div>
<?php
echo "User agent: ".$ua."\n\n";
?>
</div>
<div>
Browser Info:
<?php
print_r($browser);
?>
</div>
