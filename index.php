<?php
require 'simple_html_dom.php';

$subject = 'nes';

$html = file_get_html('https://www.youtube.com/results?search_query='.$subject);

$results = $html->find('.yt-lockup');  

foreach ($results as $video) {
	$image = $video->find('.yt-thumb-simple img',0)->attr['src'];// find the video's image source link
	$time = $video->find('.video-time',0)->plaintext; // find the duration of the video
	$link = $video->find('.yt-lockup-title a',0)->href;
	$linkCompleto = 'https://www.youtube.com'.$link;
	$title = $video->find('.yt-lockup-title a',0)->plaintext; // it gets the title of video 
	$author = $video->find('.yt-lockup-byline a',0)->plaintext; // it gets the person that uploaded the video
	$views = $video->find('.yt-lockup-meta-info li',1)->plaintext;

	// All variables are in the String format

	echo "Image: ".$image."<br/>";
	echo "Time: ".$time."<br/>";
	echo "Link :".$linkCompleto.'<br/>';
	echo "Title :".$title.'<br/>';
	echo "Author :".$author.'<br/>';
	echo "Views :".$views."<br/>";

	echo "<hr/>";
}






?>