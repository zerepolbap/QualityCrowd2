
<div class="video-box" style="width:<?= $width ?>px; min-height:<?= ($height + 28) ?>px;">
	<video id="player-<?= $uid ?>" width="<?= $width ?>" height="<?= $height ?>" style="display:none" preload="auto" controls>
		<source id="mysource-<?= $uid ?>" src="" type='video/mp4;' />
	</video>

</div>


<script type="text/javascript">

	player<?= $uid ?> = document.getElementById('player-<?= $uid ?>');
	var t;

	$('#player-<?= $uid ?>').show();
	$('#mysource-<?= $uid ?>').attr('src', '<?= $file; ?>');
	player<?= $uid ?>.load();
	player<?= $uid ?>.volume = 0;
	player<?= $uid ?>.onended = function() {
		console.log("The video has ended");
		if (typeof(onVideoComplete) == 'function') {
			console.log("Video complete");
                	 onVideoComplete('<?= $filename ?>');
                }
	};
	player<?= $uid ?>.play();

</script>
