<?php
$page_title = "ANNIVERSARY";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section id="anniversary" class="content project" data-pageid="project">

			<section class="hero">
				<div class="gradient"></div>
				<img src="/asset/dist/img/work/anniversary/02.jpg">
				<header class="page-header">
					<h1 class="title">ANNIVERSARY</h1>
					<span class="icon-wrap">
						<span class="icon"><svg><use xlink:href="#spinner"></use></svg></span>	
					</span>
					<p>A Paper Anniversary Poster Special.</p>
				</header>
				<span class="pointer"></span>
				<span class="arrow"></span>
			</section>

			<section class="block spaced">
				<p class="headline">Having been married for over a year now, I decided to make a special poster for my wife on our paper anniversary (because a poster is made from paper... right? right?). Using a photo from our wedding and the power of Illustrator (and a bit of colour enhancing in Photoshop) I created the below and had it printed. Enjoy!</p>
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
					<li class="full"><img src="/asset/dist/img/work/anniversary/01.jpg"></li>
					<li><img src="/asset/dist/img/work/anniversary/02.jpg"></li>
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
