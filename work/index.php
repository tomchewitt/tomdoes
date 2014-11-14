<?php
$page_title = "WORK";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/img/svg-clients.svg";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section class="content work" data-pageid="work">

			<h1 class="main">
				<span class="word">WORK</span>
				<span class="icon"><svg><use xlink:href="#nav-work"></use></svg></span>
			</h1>

			<section class="block lead">
				<!-- <nav class="nav-work">
					<ul>
						<li class="nav-best on">The Best</li>
						<li class="nav-rest">The Rest</li>
					</ul>
				</nav> -->

				<div class="projects hero">

					<section class="best">
						<ul>
							<li class="nav-project">
								<a class="ajax-nav" href="koozac/" data-pageid="project">
									<img src="/asset/dist/img/bg.jpg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<h2>
										<span class="word">KOOZAC</span>
										<span class="subtext">Mobile game UI &amp; Web</span>
									</h2>
								</a>
							</li>
							<li class="nav-project">
								<a class="ajax-nav" href="heroes-and-generals/" data-pageid="project">
									<img src="/asset/dist/img/bg.jpg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<h2>
										<span class="word">HEROES &amp; GENERALS</span>
										<span class="subtext">Web design &amp; build</span>
									</h2>
								</a>
							</li>
							<li class="nav-project">
								<a class="ajax-nav" href="compare-the-market/" data-pageid="project">
									<img src="/asset/dist/img/bg.jpg">
									<span class="gradient"></span>
									<span class="triangle"></span>
									<h2>
										<span class="word">COMPARE THE MARKET</span>
										<span class="subtext">UX &amp; Design</span>
									</h2>
								</a>
							</li>
						</ul>
					</section>

					<!-- <section class="rest">
						<ul>
							<li class="nav-project"><a class="ajax-nav" href="koozac/" data-pageid="project">KZ 2</a></li>
							<li class="nav-project"><a class="ajax-nav" href="heroesandgenerals/" data-pageid="project">HNG 2</a></li>
						</ul>
					</section> -->

				</div>
				
			</section>
			
			<section class="block morework">
				<h1>SEE MORE</h1>

			    <ul class="social">
			    	<li class="icon behance"><a target="_blank" href=""><span class="word">Behance</span><svg><use xlink:href="#behance"></use></svg></a></li>
			    	<li class="icon codepen"><a target="_blank" href=""><span class="word">Codepen</span><svg><use xlink:href="#codepen"></use></svg></a></li>
			    	<li class="icon github"><a target="_blank" href=""><span class="word">GitHub</span><svg><use xlink:href="#github"></use></svg></a></li>
			    </ul>
			</section>

			<section class="block clients spaced">
				<h1>CLIENTS &amp; COMPANIES</h1>
			    
			    <ul class="clientlist">
			    	<li><svg><use xlink:href="#square"></use></svg></li>
			    	<li><svg><use xlink:href="#bafta"></use></svg></li>
			    	<li><svg><use xlink:href="#game"></use></svg></li>
			    	<li><svg><use xlink:href="#argos"></use></svg></li>
			    	<li><svg><use xlink:href="#ctm"></use></svg></li>
			    	<li><svg><use xlink:href="#ea"></use></svg></li>
			    	<li><svg><use xlink:href="#bbc"></use></svg></li>
			    	<li><svg><use xlink:href="#climax"></use></svg></li>
			    </ul>
			</section>

        </section>

<?php
if ($as_json) {
	echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/footer.php";

}
