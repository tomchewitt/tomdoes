<?php
$page_title = "KOOZAC";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section id="koozac" class="content project" data-pageid="project">

			<section class="hero">
				<div class="gradient"></div>
				<img src="/asset/dist/img/work/koozac/03.jpg">
				<header class="page-header">
					<h1 class="title">KOOZAC</h1>
					<span class="icon-wrap">
						<span class="icon"><svg><use xlink:href="#spinner"></use></svg></span>	
					</span>
					<p>Mobile game UI design &amp; asset creation. Web design and build.</p>
				</header>
				<span class="pointer"></span>
			</section>

			<section class="block spaced">
				<p class="headline">What started as a request to change a few backgrounds in-game turned into one of my staple projects while working with Square Enix; the mobile game Koozac.</p>

				<p>Working on Koozac was a very enjoyable experience as it really allowed me to show my versatility across multiple disciplines. While originally I was only tasked with amending some in-game backgrounds to be less cluttered and overpowering, I ended up working on everything from logos and iTunes icons, in-game UI design, artworking new in-game assets, to web design and development.</p>

				<p>The game owner Ben Cusack was so impressed that he asked me to rebrand his company <a href="http://www.viker.co.uk" target="_blank">Viker</a> and create the website.</p>
			</section>
			<section class="block meta">
				<ul class="triple">
					<li>
						<span class="header">COMPANY:</span><br>Suqare Enix
					</li>
					<li>
						<span class="header">ROLE:</span><br>Mobile game UI/Web Designer &amp; Front-end Developer.
					</li>
					<li>
						<span class="header">LINK:</span><br><a href="http://koozac.com" target="_blank">http://koozac.com</a>
					</li>
				</ul>
			</section>

			<section class="block img-wrap">
				<ul>
					<li class="curved"><img src="/asset/dist/img/work/koozac/02.jpg"></li>
					<li class="double">
						<img src="/asset/dist/img/work/koozac/03.jpg">
						<img src="/asset/dist/img/work/koozac/04.jpg">
					</li>
					<li class="curved"><img src="/asset/dist/img/work/koozac/01.jpg"></li>
				</ul>
				
				
				
			</section>

			<section class="block palette five-colors">
				<ul>
					<li class="color-1"></li>
					<li class="color-2"></li>
					<li class="color-3"></li>
					<li class="color-4"></li>
					<li class="color-5"></li>
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
