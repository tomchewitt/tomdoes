<?php
$page_title = "LIPSUM GENERATOR";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section id="lipsum" class="content project" data-pageid="project">

			<section class="hero">
				<div class="gradient"></div>
				<img src="/asset/dist/img/work/lipsum/hero.jpg">
				<header class="page-header">
					<h1 class="title">LIPSUM GENERATOR</h1>
					<span class="icon-wrap">
						<span class="icon"><svg><use xlink:href="#spinner"></use></svg></span>	
					</span>
					<p>Fast, customisable lipsum.</p>
				</header>
				<span class="pointer"></span>
				<span class="arrow"></span>
			</section>

			<section class="block spaced">
				<p class="headline">There are lots of Lipsum generators out there on the internet. Most text editors (well, Sublime does at least) have built in shortcuts for them, but I still found myself getting frustrated on occasion to generate the text I wanted quickly when I was using apps that didn’t have such shortcuts. Enter the homemade, wonderfully named: Lipsum Generator.</p>

				<p>Using vanilla javascript, I wanted to create a good looking, online generator that would allow bookmarking for the users preferred and most used choice of lorem text. I do this by using html5’s pushstate API to change the query of the URL whenever the user changes the outputted text. This is then bookmark-able so the user can come back to that configuration at the click of a button. The text is preselected by default so just needs the user to copy and paste. There are 4 variables the user can manipulate:</p>

				<p class="lipsum-code">/?paras=1&amp;words=69&amp;tags=1&amp;hodor=1</p>

				<p>The tags option will add 'p' tags wrapping each paragraph and the hodor tag is there just for funsies.</p>
			</section>
			<section class="block meta">
				<ul class="triple">
					<li>
						<span class="header">COMPANY:</span><br>Personal Project
					</li>
					<li>
						<span class="header">ROLE:</span><br>Designer &amp; Front End Developer.
					</li>
					<li>
						<span class="header">LINK:</span><br><a href="http://tomdoes.digital/lab/lipsum-generator" target="_blank">http://tomdoes.digital/lab/lipsum-generator</a>
					</li>
				</ul>
			</section>

			<section class="block img-wrap">
				<ul>
					<li class="curved"><img src="/asset/dist/img/work/lipsum/01.jpg"></li>
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
