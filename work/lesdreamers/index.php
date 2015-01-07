<?php
$page_title = "LESDREAMERS";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section id="lesdreamers" class="content project" data-pageid="project">

			<section class="hero">
				<div class="gradient"></div>
				<img src="/asset/dist/img/work/lesdreamers/hero.jpg">
				<header class="page-header">
					<h1 class="title">LESDREAMERS</h1>
					<span class="icon-wrap">
						<span class="icon"><svg><use xlink:href="#spinner"></use></svg></span>	
					</span>
					<p>Wordpress Development</p>
				</header>
				<span class="pointer"></span>
				<span class="arrow"></span>
			</section>

			<section class="block spaced">
				<p class="headline">Lesdreamers is an online style and fashion home created by actress/model Monét Mazur. Called in on the day the site initially went live, I've been helping Monét and her producer get the website up to scratch. Please note, this is a work-in-progress.</p>

				<p>The site needed rebuilding. The previous developers had pushed the site live... broken. The wordpress based backend was almost unusable for Monét and her team, meaning that new content couldn't be added. The site also still needed a lot of work getting it to look like the approved designs.</p>

				<p>After creating a couple of quick fixes, I proposed a quick but radical re-development, building the wordpress theme from scratch, that would allow the content to be controlled by Monét, rather than developers, and would add in some extra functionality in the backend that was missing. I would also tidy up some pages that needed polishing. The site has been relaunched and is gaining some good traction, being picked up by NET-A-PORTER among others. The backend will be evolved and tidied up to better serve the diverse type of content being created, but with a quick turnaround I was able to deliver an MPV that is functional and successful.</p>
			</section>
			<section class="block meta">
				<ul class="triple">
					<li>
						<span class="header">COMPANY:</span><br>Les Dreamers
					</li>
					<li>
						<span class="header">ROLE:</span><br>Developer
					</li>
					<li>
						<span class="header">LINK:</span><br><a target="_blank" href="http://lesdreamers.com">http://lesdreamers.com</a>
					</li>
				</ul>
			</section>

			<section class="block img-wrap">
				<ul>
					<li class="curved"><img src="/asset/dist/img/work/lesdreamers/01.jpg"></li>
					<li class="curved"><img src="/asset/dist/img/work/lesdreamers/02.jpg"></li>
					<li class="curved"><img src="/asset/dist/img/work/lesdreamers/03.jpg"></li>
					<li class="curved"><img src="/asset/dist/img/work/lesdreamers/04.jpg"></li>
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
