<?php
require 'simple_html_dom.php';

$subject = 'snes';

$html = file_get_html('https://www.youtube.com/results?search_query='.$subject);

$results = $html->find('.yt-lockup');  

foreach ($results as $video) {
	$image = $video->find('.yt-thumb-simple img',0)->attr['src'];// find the video's image source link
	$time = $video->find('.video-time',0)->plaintext; // find the duration of the video

	echo "Image: ".$image."<br/>";
	echo "Time: ".$time."<br/>";
	echo "<hr/>";
}






?>