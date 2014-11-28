<?php
$page_title = "GHOST BYTES MEDIA";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>
		<section id="gbm" class="content project" data-pageid="project">

			<section class="hero">
				<div class="gradient"></div>
				<img src="/asset/dist/img/work/gbm/hero.svg">
				<header class="page-header">
					<h1 class="title">GHOST BYTES MEDIA</h1>
					<span class="icon-wrap">
						<span class="icon"><svg><use xlink:href="#spinner"></use></svg></span>	
					</span>
					<p>Branding. Design. Development.</p>
				</header>
				<span class="pointer"></span>
			</section>

			<section class="block spaced">
				<p class="headline">Please note, this is a work in progress. Ghost Bytes Media approached me to brand them and design/build a website to showcase their work.</p>

				<p>Ghost Bytes Media wanted a modern logo and mark with some specific tastes. Focussing on the idea of a playful mascot, using flat, simple shapes and colours I begun experimenting. I am very happy with the final logo and feel that it is very recognisable and simple, while retaining a playful ambience. This combined with the custom type and placement give a strong sense of professionalism, through an approachable style. Stay tuned... more to come!</p>
			</section>
			<section class="block meta">
				<ul class="double">
					<li>
						<span class="header">COMPANY:</span><br>Ghost Bytes Media
					</li>
					<li>
						<span class="header">ROLE:</span><br>Designer &amp; Developer.
					</li>
				</ul>
			</section>

			<section class="block img-wrap">
				<ul>
					
					<li class="double">
						<img src="/asset/dist/img/work/gbm/01.svg">
						<img src="/asset/dist/img/work/gbm/02.svg">
					</li>
					<li class="curved"><img src="/asset/dist/img/work/gbm/03.jpg"></li>
					<li class="curved"><img src="/asset/dist/img/work/gbm/04.jpg"></li>
				</ul>
				
				
				
			</section>

			<section class="block palette four-colors">
				<ul>
					<li class="color-1"></li>
					<li class="color-2"></li>
					<li class="color-3"></li>
					<li class="color-4"></li>
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
