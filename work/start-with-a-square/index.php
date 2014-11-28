<?php
$page_title = "START WITH A SQUARE";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>
		<section id="swas" class="content project" data-pageid="project">

			<section class="hero">
				<div class="gradient"></div>
				<img src="/asset/dist/img/work/swas/hero.svg">
				<header class="page-header">
					<h1 class="title">START WITH A SQUARE</h1>
					<span class="icon-wrap">
						<span class="icon"><svg><use xlink:href="#spinner"></use></svg></span>	
					</span>
					<p>Branding. Design. Development. Direction.</p>
				</header>
				<span class="pointer"></span>
				<span class="arrow"></span>
			</section>

			<section class="block spaced">
				<p class="headline">Start with a Square started as a domain name. I liked the ties to the design and digital industries, two I am extremely passionate about. It is now going to become a place of words and opinion… a blog.</p>

				<p>I've always wanted to make a proper blog. Somewhere I can talk about the things I am passionate about, where I can give back to the web community through insights and tutorials, advice for freelancers and engage more with the community. I've started this at Start with a Square. It's currently in a very beta stage, while I develop the main site using wordpress. Below are my initial designs and what I'm planning to develop, but these may change the further into the browser I get. More on the way.</p>
			</section>
			<section class="block meta">
				<ul class="double">
					<li>
						<span class="header">COMPANY:</span><br>Personal Project
					</li>
					<li>
						<span class="header">ROLE:</span><br>Designer &amp; Developer.
					</li>
				</ul>
			</section>

			<section class="block img-wrap">
				<ul>
					<li class="curved"><img src="/asset/dist/img/work/swas/01.jpg"></li>
					<li class="double">
						<img src="/asset/dist/img/work/swas/hero.svg">
						<img src="/asset/dist/img/work/swas/02.svg">
					</li>
					<li class="curved"><img src="/asset/dist/img/work/swas/03.jpg"></li>
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
