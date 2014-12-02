<?php
$page_title = "COMPARE THE MARKET";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section id="ctm-travel" class="content project" data-pageid="project">

			<section class="hero">
				<div class="gradient"></div>
				<img class="blur" src="/asset/dist/img/work/ctm-travel/hero.jpg">
				<header class="page-header">
					<h1 class="title">COMPARE THE MARKET</h1>
					<span class="icon-wrap">
						<span class="icon"><svg><use xlink:href="#spinner"></use></svg></span>	
					</span>
					<p>UX &amp; Web Designer</p>
				</header>
				<span class="pointer"></span>
				<span class="arrow"></span>
			</section>

			<section class="block spaced">
				<p class="headline">Comparison websites like comparethemarket.com are big business. The volume of traffic together with the slightest change in UX design and web accessibility can have a monumental effect on conversation in such a highly competitive market. Fresh into the world of a freelancer, redesigning and optimising the travel insurance journey for comparethemarket was a huge and exciting challenge… with some fantastic results.</p>

				<p>The customer journey for comparethemarket's insurance journey was over 3 pages of intense forms that required a lot of unnecessary data. The task was to focus on simplicity, accessibility and speed. After doing a lot of user research, we found that most travel insurance was almost always bought in a rush with very little time between purchase and the date the customer began their holiday - a last minute purchase. This meant we needed to tailor the experience towards this type of user. After extensive iteration and user testing we got the question set down to just one form, seven questions, all of which were a simple click/tap. A name and email address later and you're at your quotes, all of which were simplified with key pieces of information pointed out.</p>

				<p>The results after just one day of the new experience being live were phenomenal. Conversion had soared so high that the technical team were worried the analytics had been embedded incorrectly… but they hadn't. I was extremely happy with the success and optimisation that we brought to what was an overly complicated and frustrating experience.</p>
			</section>
			
			<section class="block meta">
				<ul class="triple">
					<li>
						<span class="header">COMPANY:</span><br>Compare the Market
					</li>
					<li>
						<span class="header">ROLE:</span><br>UX &amp; Web Designer
					</li>
					<li>
						<span class="header">LINK:</span><br><a href="http://comparethemarket.com/travel-insurance/" target="_blank">http://comparethemarket.com/travel-insurance/</a>
					</li>
				</ul>
			</section>

			<section class="block img-wrap">
				<ul>
					<li class="curved"><img src="/asset/dist/img/work/ctm-travel/01.jpg"></li>
					<li class="full"><img src="/asset/dist/img/work/ctm-travel/02.jpg"></li>
					<li class="curved"><img src="/asset/dist/img/work/ctm-travel/03.jpg"></li>
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
