<?php
$page_title = "SIMPLE TIMER";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section id="timer" class="content project" data-pageid="project">

			<section class="hero">
				<div class="gradient"></div>
				<img src="/asset/dist/img/work/timer/hero.jpg">
				<header class="page-header">
					<h1 class="title">SIMPLE TIMER</h1>
					<span class="icon-wrap">
						<span class="icon"><svg><use xlink:href="#spinner"></use></svg></span>	
					</span>
					<p>Full screen time tracking.</p>
				</header>
				<span class="pointer"></span>
			</section>

			<section class="block spaced">
				<p class="headline">During the last year I found the need for an online stopclock/timer and was frustrated to find nothing that simple and elegant which would let me see time time at a glance. Rather than dealing with the best that was on offer, I made my own!</p>

				<p>The idea was simple enough - create something with a large timer that was easy to control and had some basic lap time, start/stop functionality. It also had to look good :)</p>

				<p>I found a great little jQuery library called <a href="http://simplefocus.com/flowtype/" target="_blank">flowtype.js</a> that will resize type to fit the parent space which was perfect for creating a responsive timer. The timer mechanic was simple enough to create using javascript’s build in setInterval function. The design is clean and simple and was built in browser.</p>
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
						<span class="header">LINK:</span><br><a href="http://tomdoes.digital/lab/simple-timer" target="_blank">http://tomdoes.digital/lab/simple-timer</a>
					</li>
				</ul>
			</section>

			<section class="block img-wrap">
				<ul>
					<li class="curved"><img src="/asset/dist/img/work/timer/01.jpg"></li>
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
