<?php
	$play = false;
	$query = "";
	if (isset($_POST["query"])) {
		$play = true;
		$query = $_POST["query"];
	}
?>

<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/style.css">
        <title>ARFNET</title>
		<style>
			.title {
				font-size: 36px;
			}
			
			header *{
				display: inline-block;
			}
			
			*{
				vertical-align: middle;
				max-width: 100%;
			}
			
			video {
				width: 72%;
			}
			
			.form {
				margin: auto;
				text-align: center;
				margin-bottom: 50px;
				border-style: double;
				padding: 20px;
			}
			
			.searchbox {
				width: 50%;
			}
			
			.searchbar {
				//height: 25px;
				width: 80%;
			}
			
			.result {
				font-size: 20px;
				margin-bottom: 20px;
				margin-left: 15px;
			}
			
			.stats {
				font-size: 20px;
				margin-bottom: 20px;
				margin-left: 15px;
			}
		</style>
    </head>

    <body>
		<header>
			<img src="/arfnet_logo.png" width="64">
			<span class="title"><strong>ARFNET</strong></span>
		</header>
		<hr>
		<a class="home" href="/">Home</a><br>
		<h2>ARFNET Player</h2>
		<p>HTML5 supports MPEG-4 and MKV containers, with H.264 AVC video and AAC audio only, no AC3.<br>
		It is strongly encouraged to use VLC instead to stream media</p>
		<br>
		<?php
			if ($play) {
				echo '<video id="player" class="video-js vjs-default-skin" height="720" width="1280" controls preload="none" autoplay>'.
					'<source src="'.$query.'"/>'.
				'</video>'.
				'<script>'.
					'var player = videojs("#player");'.
				'</script>';
			} else {
				echo '<div class="searchbox form">'.
					'<form action="/player.php" method="POST">'.
						'<label>url</label>'.
						'<input class="searchbar" type="text" name="query">'.
						'<input class="" type="submit" value="Play">'.
					'</form>'.
				'</div>';
			}
		?>
	</body>
</html>
