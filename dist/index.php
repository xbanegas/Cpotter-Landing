<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="row">
				
				<div class="col-sm-6 col-xs-12 planet-wrapper" >
					<img src="<?php echo get_template_directory_uri(); ?>/img/planet.png" alt="Planet">
				</div>
				<div class="col-sm-6 col-xs-12 video-wrapper">
					<div id="ytplayer"></div>
				</div>
				<!-- <h1><?php // _e( 'Latest Posts', 'html5blank' ); ?></h1> -->
				<?php // get_template_part('loop'); ?>
				<?php // get_template_part('pagination'); ?>
			</div>
		</section>
		<!-- /section -->
	</main>

<?php // get_sidebar(); ?>

<script>
// Replace the 'ytplayer' element with an <iframe> and
// YouTube player after the API code downloads.
var player;
function onYouTubePlayerAPIReady() {
player = new YT.Player('ytplayer', {
  videoId: 'ylJh9DusVIA',
  playerVars: { 'controls': 0, 'autoplay': 1 },
});
}  

$('.planet-wrapper img').load(function(){
		$(".video-wrapper").height( $(".planet-wrapper").height() );
		// Load the IFrame Player API code asynchronously.
		var tag = document.createElement('script');
		tag.src = "https://www.youtube.com/player_api";
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
});
</script>

<?php get_footer(); ?>


