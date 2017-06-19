<?php
// draft sample display for array returned from oAuth Twitter Feed for Developers WP plugin
// http://wordpress.org/extend/plugins/oauth-twitter-feed-for-developers/
$tweets = getTweets(1, 'northernmediaNM');//change number up to 20 for number of tweets
if(is_array($tweets)){
// to use with intents
echo '<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>';
foreach($tweets as $tweet){
if($tweet['text']){
$the_tweet = $tweet['text'];
/*
2.b. Tweet Entities within the Tweet text must be properly linked to their appropriate home on Twitter. For example:
i. User_mentions must link to the mentioned user's profile.
ii. Hashtags must link to a twitter.com search with the hashtag as the query.
iii. Links in Tweet text must be displayed using the display_url
field in the URL entities API response, and link to the original t.co url field.
*/
// i. User_mentions must link to the mentioned user's profile.
if(is_array($tweet['entities']['user_mentions'])){
foreach($tweet['entities']['user_mentions'] as $key => $user_mention){
$the_tweet = preg_replace(
'/@'.$user_mention['screen_name'].'/i',
'<a href="http://www.twitter.com/'.$user_mention['screen_name'].'" target="_blank">@'.$user_mention['screen_name'].'</a>',
$the_tweet);
}
}
// ii. Hashtags must link to a twitter.com search with the hashtag as the query.
if(is_array($tweet['entities']['hashtags'])){
foreach($tweet['entities']['hashtags'] as $key => $hashtag){
$the_tweet = preg_replace(
'/#'.$hashtag['text'].'/i',
'<a href="https://twitter.com/search?q=%23'.$hashtag['text'].'&src=hash" target="_blank">#'.$hashtag['text'].'</a>',
$the_tweet);
}
}
// iii. Links in Tweet text must be displayed using the display_url
//      field in the URL entities API response, and link to the original t.co url field.
if(is_array($tweet['entities']['urls'])){
foreach($tweet['entities']['urls'] as $key => $link){
$the_tweet = preg_replace(
'`'.$link['url'].'`',
'<a href="'.$link['url'].'" target="_blank">'.$link['url'].'</a>',
$the_tweet);
}
}
echo $the_tweet;
} else {
echo '
<br /><br />
<a href="http://twitter.com/YOURUSERNAME" target="_blank">Click here to read YOURUSERNAME\'S Twitter feed</a>';
}
}
}
?>