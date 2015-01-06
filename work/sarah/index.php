<?php
$page_title = "SARAH";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section id="sarah" class="content project" data-pageid="project">

			<section class="hero">
				<div class="gradient"></div>
				<img src="/asset/dist/img/work/sarah/hero.jpg">
				<header class="page-header">
					<h1 class="title">SARAH</h1>
					<span class="icon-wrap">
						<span class="icon"><svg><use xlink:href="#spinner"></use></svg></span>	
					</span>
					<p>Polygonal Art.</p>
				</header>
				<span class="pointer"></span>
				<span class="arrow"></span>
			</section>

			<section class="block spaced">
				<p class="headline">Having seen some truly spectacular uses of polygon art, I wanted to experiment a bit with it. And what better way to experiment than with a source photo of my beautiful wife Sarah.</p>

				<p>I've seen people do this style of art in a few different ways. I chose to use Illustrator to overlay polygons onto the photo followed by adding black &amp; white gradients to each polygon, then switching into Photoshop to brush in some colour. Enjoy!</p>
			</section>
			<section class="block meta">
				<ul class="double">
					<li>
						<span class="header">COMPANY:</span><br>Personal Project
					</li>
					<li>
						<span class="header">ROLE:</span><br>Designer/Artist
					</li>
				</ul>
			</section>

			<section class="block img-wrap">
				<ul>
					<li class="full"><img src="/asset/dist/img/work/sarah/01.jpg"></li>
					<li><img src="/asset/dist/img/work/sarah/02.jpg"></li>
				</ul>				
			</section>

			<section class="block palette three-colors">
				<ul>
					<li class="color-1"></li>
					<li class="color-2"></li>
					<li class="color-3"></li>
				</ul>
			</section>

		</section>

		<section class="back-to-work">
			<a class="ajax-nav" href="../">SEE MORE WORK</a>
		</section>

<?php
if ($as_json) {
	echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/footer.php";

}
