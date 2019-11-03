<section id="travel-live">
	<div class="min-vh-100 container d-flex flex-column align-content-center">
		<div class="row flex-grow-1 justify-content-center align-items-center">
			<div class="col-12 text-center">
				<h1 class="text-uppercase  maintitle">To travel is to live</h1>
				<h2 class=h2> You Don't Need Magic to Disappear. All you need is a destination.</h2>
				<button class="btn success">lorem</button>
				<button class="btn success">ipsum</button>
			</div>
		</div>
	</div>
</section>
<!-- <div class="find-place">
<img id="form-bar" src="img/image-2.png"> </img>
</div> -->
<section id="form-bar" class="p-2">
	<div class="d-flex justify-content-around">
		<div class="container-fluid">
			<div class="row find-holidays">
				<span class="text1">find your</span>
				<span class="text2">&nbsp;holydays</span>
			</div>
			<div class="row find-holidays">
				<form class="form-inline">
					<span class="mr-2">where</span>
					<input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
					<span class="mr-2">when</span>
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Search</button>
				</form>
			</div>
		</div>
	</div>
</div>
</section>
<div class="offers" id="offers">
	<div class="offers-head">
		<h3>Special Offers</h3>
		<p>Best 2014 packages where people love to stay!</p>
		<button type="button" name="button" onclick="location.href='single.php'">Créer un article</button>
	</div>
	<script defer="" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
	$(function(){
		SyntaxHighlighter.all();
	});
	$(window).load(function(){
		$('.flexslider').flexslider({
			animation: "slide",
			animationLoop: true,
			itemWidth:250,
			itemMargin: 5,
			start: function(slider){
				$('body').removeClass('loading');
			}
		});
	});
	</script>
	<section class='slider'>
		<div class="flexslider carousel">
			<div class="flex-viewport" style="overflow: hidden; position: relative;">
				<ul class="slides" style="width: 2400%; transition-duration: 1s; transform: translate3d(0px, 0px, 0px);">
					<?php include("../function/slidercard.php") ?>
				</ul>
			</div>
		</div>
	</section>
</div>
<div class="holiday-types">
	<div class="wrap">
		<div class="holiday-type-head p-5">
			<h3>Holidays Type</h3>
			<span>get explore your dream to travel the world!</span>
		</div>
		<div class="holiday-type-grids p-5">
			<div class="holiday-type-grid" onclick="location.href='#';">
				<span class="icon1"> </span>
				<a href="#">Cruise</a>
			</div>
			<div class="holiday-type-grid" onclick="location.href='#';">
				<span class="icon2"> </span>
				<a href="#">City Breaks</a>
			</div>
			<div class="holiday-type-grid" onclick="location.href='#';">
				<span class="icon3"> </span>
				<a href="#">Honeymoon</a>
			</div>
			<div class="holiday-type-grid" onclick="location.href='#';">
				<span class="icon4"> </span>
				<a href="#">Adventure</a>
			</div>
			<div class="holiday-type-grid" onclick="location.href='#';">
				<span class="icon5"> </span>
				<a href="#">Safari</a>
			</div>
			<div class="holiday-type-grid" onclick="location.href='#';">
				<span class="icon6"> </span>
				<a href="#">Beach</a>
			</div>
			<div class="clear"> </div>
		</div>
	</div>
</div>
