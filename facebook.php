<?php  
$feedURL = "https://graph.facebook.com/northernmedia/feed?access_token=1814486512200789|Xqyh3bonCEgw3TZCDZrP9Mdya38";
$feed = file_get_contents($feedURL);
$feed = json_decode($feed, true);
?>