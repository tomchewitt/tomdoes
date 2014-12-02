<?php
$page_title = "COLOURFLOOD";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>
		<section id="colourflood" class="content project" data-pageid="project">

			<section class="hero">
				<div class="gradient"></div>
				<img src="/asset/dist/img/work/colourflood/hero.svg">
				<header class="page-header">
					<h1 class="title">COLOUR FLOOD</h1>
					<span class="icon-wrap">
						<span class="icon"><svg><use xlink:href="#spinner"></use></svg></span>	
					</span>
					<p>Branding. Design. Development. Direction.</p>
				</header>
				<span class="pointer"></span>
				<span class="arrow"></span>
			</section>

			<section class="block spaced">
				<p class="headline">Colour Flood is my own company, set up to manage my design and development freelance/contract work. Being the sole director, everything is my responsibility - from doing the actual work to client liaison and tax management (although my accountant does most of that).</p>

				<p>Making the choice to go freelance was a big one. Having to then name and brand your own company is arguably a bigger one. You are your worst client. Nothing is ever good enough, iteration goes on forever and by the time you feel you are about ready to deliver on your own goals - you change your mind to something completely different.</p>

				<p>My own brand is no exception, and has gone through a few changes and tweaks over the last 3 years. The most recent update is my favourite as I feel it makes a great use of colour that really unifies everything together. The website I made is just a simple splash page to point people to my contact information. I have been fortunate enough to rely on word of mouth to generate my clients so having a fully established, promotional web presence has never been too much of a high priority. Below you can see some of the workings I went through to get the logo to what it is now.</p>
			</section>
			<section class="block meta">
				<ul class="triple">
					<li>
						<span class="header">COMPANY:</span><br>Colourflood
					</li>
					<li>
						<span class="header">ROLE:</span><br>Director.
					</li>
					<li>
						<span class="header">LINK:</span><br><a href="http://colourflood.uk" target="_blank">http://colourflood.uk</a>
					</li>
				</ul>
			</section>

			<section class="block img-wrap">
				<ul>
					<li class="curved"><img src="/asset/dist/img/work/colourflood/01.jpg"></li>
					<li class="double">
						<img src="/asset/dist/img/work/colourflood/02.svg">
						<img src="/asset/dist/img/work/colourflood/04.svg">
						
					</li>
					<li class="double">
					<img src="/asset/dist/img/work/colourflood/03.svg">
					<img src="/asset/dist/img/work/colourflood/05.svg"></li>
					<li class="full"><img src="/asset/dist/img/work/colourflood/06.svg"></li>
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
