<table>
	<tr>
		<th>Image</th>
		<th>Título</th>
		<th>Autor</th>
		<th>Link</th>
		<th>Duração</th>
		<th>Views</th>
	</tr>

<?php
require 'simple_html_dom.php';

$subject = 'megaman';

$html = file_get_html('https://www.youtube.com/results?search_query='.$subject);

$results = $html->find('.yt-lockup');  

foreach ($results as $video) {
	// All variables are in the String format
	$image = $video->find('.yt-thumb-simple img',0)->attr['src'];// find the video's image source link
	$time = $video->find('.video-time',0)->plaintext; // find the duration of the video
	$link = $video->find('.yt-lockup-title a',0)->href;
	$completeLink = 'https://www.youtube.com'.$link;
	$title = $video->find('.yt-lockup-title a',0)->plaintext; // it gets the title of video 
	$author = $video->find('.yt-lockup-byline a',0)->plaintext; // it gets the person that uploaded the video
	$views = $video->find('.yt-lockup-meta-info li',1)->plaintext;

	?>

	<tr>
		<td> <img src="<?php echo $image; ?>" /> </td>
		<td><?php echo $title; ?>		</td>
		<td><?php echo $author; ?>		</td>
		<td><?php echo $completeLink; ?></td>
		<td><?php echo $time; ?>		</td>
		<td><?php echo $views; ?>		</td>
	</tr>
    <?php
	
}
?>
</table>




?>