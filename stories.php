<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Our Journal</title>
  <link href="styles/demo.css" type="text/css" rel="stylesheet" />
  <link href="styles/normalize.css" type="text/css" rel="stylesheet" />
  <script>document.documentElement.className = 'js';</script>
  <script src="scripts/jquery-3.4.1.js"></script>
</head>

<body>
<?php include('includes/header.php'); ?>
<main>

<div class="grid grid--effect-vega">
	<a href="#" class="grid__item grid__item--c1">
		<div class="stack">
			<div class="stack__deco"></div>
			<div class="stack__deco"></div>
			<div class="stack__deco"></div>
			<div class="stack__deco"></div>
			<div class="stack__figure">
				<img class="stack__img" src="images/fountain.png" alt="Image"/>
			</div>
		</div>
		<div class="grid__item-caption">
			<h3 class="grid__item-title">anaerobic</h3>
			<div class="column column--left">
				<span class="column__text">Period</span>
				<span class="column__text">Subjects</span>
				<span class="column__text">Result</span>
			</div>
			<div class="column column--right">
				<span class="column__text">2045</span>
				<span class="column__text">133456</span>
				<span class="column__text">Positive</span>
			</div>
		</div>
	</a>
	<a href="#" class="grid__item grid__item--c2">
        <div class="stack">
			<div class="stack__deco"></div>
			<div class="stack__deco"></div>
			<div class="stack__deco"></div>
			<div class="stack__deco"></div>
			<div class="stack__figure">
                <img class="stack__img" src="images/fountain.png" alt="Image"/>
                <div id="videosList"> 
                <div class="video">
                <div> <p> 01. Dreams </p> </div>
                    <video height="600" width="330" class="thevideo" loop preload="none">
                    <source src="videos/Fountain.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                    </video>
                </div>
                </div>
			</div>
		</div>
		<div class="grid__item-caption">
			<h3 class="grid__item-title">anaerobic</h3>
			<div class="column column--left">
				<span class="column__text">Period</span>
				<span class="column__text">Subjects</span>
				<span class="column__text">Result</span>
			</div>
			<div class="column column--right">
				<span class="column__text">2045</span>
				<span class="column__text">133456</span>
				<span class="column__text">Positive</span>
			</div>
		</div>
    </a>
	<a href="#" class="grid__item grid__item--c2"><!-- ... --></a>
</div><!-- /grid -->
</section>

</main>

<script type="text/javascript">
var figure = $(".video").hover( hoverVideo, hideVideo );

function hoverVideo(e) {  
    $('video', this).get(0).play(); 
}

function hideVideo(e) {
    $('video', this).get(0).pause(); 
}
</script>
<script src="scripts/anime.min.js"></script>
		<script src="scripts/main.js"></script>
		<script>
		(function() {
			[].slice.call(document.querySelectorAll('.grid--effect-vega > .grid__item')).forEach(function(stackEl) {
				new VegaFx(stackEl);
			});
			[].slice.call(document.querySelectorAll('.grid--effect-castor > .grid__item')).forEach(function(stackEl) {
				new CastorFx(stackEl);
			});
			[].slice.call(document.querySelectorAll('.grid--effect-hamal > .grid__item')).forEach(function(stackEl) {
				new HamalFx(stackEl);
			});
			[].slice.call(document.querySelectorAll('.grid--effect-polaris > .grid__item')).forEach(function(stackEl) {
				new PolarisFx(stackEl);
			});
			[].slice.call(document.querySelectorAll('.grid--effect-alphard > .grid__item')).forEach(function(stackEl) {
				new AlphardFx(stackEl);
			});
			[].slice.call(document.querySelectorAll('.grid--effect-altair > .grid__item')).forEach(function(stackEl) {
				new AltairFx(stackEl);
			});
			[].slice.call(document.querySelectorAll('.grid--effect-rigel > .grid__item')).forEach(function(stackEl) {
				new RigelFx(stackEl);
			});
			[].slice.call(document.querySelectorAll('.grid--effect-canopus > .grid__item')).forEach(function(stackEl) {
				new CanopusFx(stackEl);
			});
			[].slice.call(document.querySelectorAll('.grid--effect-pollux > .grid__item')).forEach(function(stackEl) {
				new PolluxFx(stackEl);
			});
			[].slice.call(document.querySelectorAll('.grid--effect-deneb > .grid__item')).forEach(function(stackEl) {
				new DenebFx(stackEl);
			});
		})();
		</script>

</body>
</html>
