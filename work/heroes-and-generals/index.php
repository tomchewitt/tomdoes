<?php
$page_title = "HEROES & GENERALS";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section id="hng" class="content project" data-pageid="project">

			<section class="hero">
				<div class="gradient"></div>
				<img class="blur" src="/asset/dist/img/work/hng/hero.jpg">
				<header class="page-header">
					<h1 class="title">HEROES &amp; GENERALS</h1>
					<span class="icon-wrap">
						<span class="icon"><svg><use xlink:href="#spinner"></use></svg></span>	
					</span>
					<p>Branding, Web design &amp; development</p>
				</header>
				<span class="pointer"></span>
				<span class="arrow"></span>
			</section>

			<section class="block spaced">
				<p class="headline">Rebranding the WW2 first person shooter is no easy task. After 8 months of iteration, experimentation design and development - a unique and modern take had been established and was ready to go.</p>

				<p>During my second 6 month contract at Square Enix I joined a team of producers and designers to rebrand Heroes &amp; Generals - a WW2 online first person shooter. As the sole web designer on the team, it was my job to make sure the rebrand would be accessible online as well as design the new web experience. I was also responsible for building the front-end of the forums section.</p>

				<p>At the time the web presence was made of 5 different systems that required different logins and looked completely different. There was also a big problem of a complicated navigation and page structure. Simplifying the UX was priority number 1. Creating a design that could be used across all areas of the site was next on the list.</p>

				<p>Helping with the branding while creating a simplified user experience was an enjoyable process. It meant that I could begin to see how the artwork would sit in the different areas of the site and tailor areas of navigation and content towards the art style.</p>

				<p>After a long slog of iteration and development, the site was teased to the players and got a great reception. Square Enix have not yet released the site.</p>
			</section>
			<section class="block meta">
				<ul class="double">
					<li>
						<span class="header">COMPANY:</span><br>Square Enix
					</li>
					<li>
						<span class="header">ROLE:</span><br>Web Designer &amp; Front End Developer.
					</li>
				</ul>
			</section>
			<section class="block img-wrap">
				<ul>
					<li class="curved"><img src="/asset/dist/img/work/hng/01.jpg"></li>
					<li class="double">
						<img src="/asset/dist/img/work/hng/02.jpg">
						<img src="/asset/dist/img/work/hng/03.jpg">
					</li>
					<li class="full"><img src="/asset/dist/img/work/hng/04.jpg"></li>
					<li class="curved"><img src="/asset/dist/img/work/hng/06.jpg"></li>
					<li class="curved"><img src="/asset/dist/img/work/hng/05.jpg"></li>
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
