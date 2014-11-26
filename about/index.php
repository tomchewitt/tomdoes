<?php
$page_title = "ABOUT";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section class="content about" data-pageid="about">

			<h1 class="main">
				<span class="word">ABOUT</span>
				<span class="icon"><svg><use xlink:href="#nav-about"></use></svg></span>
			</h1>

			<section class="block lead hero">
				<div class="gradient"></div>
				<img src="/asset/dist/img/about-hero.jpg"> 
				<span class="pointer"></span>
				<h1>SHAPES + CODE.<br>
		    	MUSIC + GAMES.<br>
		    	BASKETBALL +<br>PIZZA.</h1>
			</section>

			<section class="block spaced">
				<h1>GREETINGS</h1>

				<p class="headline">Should I be in the first or third person? Is it 'I' or 'He'. I am Tom, and Tom is he, and he is me. Tom is me, so I am… confused. I'll just be me (I think)...</p>

				<p>Hello. I am Tom Hewitt. I craft great user experiences. To do this I work out how and what content the user sees and when, design beautiful user interfaces, empower brands and create compliant code. I like to do things right. Before fixing something, you need to understand how and why it was broken to begin with. I use this approach for every aspect of my projects, from UX and design all the way through to development. I like to produce lean, minimal code - choosing hand written mechanics rather than a reliance on libraries and plugins.</p>

				<p>From an early age I studied and experimented with digital design. This continued throughout my education, until the end of my degree when my obsession with interactive web design began. For the last five years I've been successfully designing and developing user experiences for a wide range of companies, from large corporate behemoths to small independent games developers.</p>

			</section>
			<section class="block spaced presently">

				<h1>PRESENTLY...</h1>

				<p>Since January 2012 I have been running my own freelance business based from home in Southampton. Managing clients, scheduling projects and collaborating with client and external resources is all part of the process. Not to mention the glamour of dealing with Mr Taxman. One of my biggest assets is my familiarity and experience managing both the design and development sides of a project. Understanding and communicating with developers and designers alike let's me work in a more fluid way, allowing me to focus on producing great work.</p>

				<p>So what drives me to do all this? Quite simply, because I love it. I love learning new techniques, processes and tools - not because it ticks a new box, but because I am genuinely interested and passionate about making the best experiences I can. I'm not fixed on any one tool or process, and while I do have my preferred way of doing things, I am always happy and excited to learn new things.</p>
			</section>

			<section class="block toolbox spaced">
				<h1>TOOLBOX</h1>

				<ul class="tools">
					<li class="icon"><span class="word">Photoshop</span><svg><use xlink:href="#photoshop"></use></svg></li>
					<li class="icon"><span class="word">Illustrator</span><svg><use xlink:href="#illustrator"></use></svg></li>
					<li class="icon"><span class="word">HTML5</span><svg><use xlink:href="#html5"></use></svg></li>
					<li class="icon"><span class="word">CSS3</span><svg><use xlink:href="#css3"></use></svg></li>
					<li class="icon"><span class="word">Javascript</span><svg><use xlink:href="#javascript"></use></svg></li>
					<li class="icon"><span class="word">jQuery</span><svg><use xlink:href="#jquery"></use></svg></li>
					<li class="icon"><span class="word">SASS</span><svg><use xlink:href="#sass"></use></svg></li>
					<li class="icon"><span class="word">Grunt</span><svg><use xlink:href="#grunt"></use></svg></li>
					<li class="icon"><span class="word">Github</span><svg><use xlink:href="#githubfull"></use></svg></li>
				</ul>

				<h1>BONUS</h1>

				<ul class="bonus">
					<li>PHP</li>
					<li>ActionScript 3</li>
					<li>mySQL</li>
					<li>After Effects</li>
					<li>Premiere</li>
					<li>Flash</li>
				</ul>
			</section>

			<section class="block spaced">
				<h1>WELCOME TO THE DANGERZONE!</h1>

				<p>There's more to me than just work though. There's all the little projects I do for funsies as well. Be sure to check some of them out on <a href="http://codepen.io/tomchewitt" target="_blank">Codepen</a> or <a target="_blank" href="https://www.behance.net/tomchewitt">Behance</a>. I'm also a huge basketball fan (<a href="http://www.nba.com/bulls/" target="_blank">go Bulls!!</a>), nerdily into video games and eSports, and am way to enthusiastic about the Fast and the Furious franchise. Music and stories are my muses and I am an occasional and (not quite so anymore) secret <a href="http://www.brickish.org/default.aspx" target="_blank">AFOL</a>. And I love pizza.</p>
			</section>

			<section class="social">
				<ul>
			    	<li class="icon behance"><a target="_blank" href="https://www.behance.net/tomchewitt"><span class="word">Behance</span><svg><use xlink:href="#behance"></use></svg></a></li>
			    	<li class="icon codepen"><a target="_blank" href="http://codepen.io/tomchewitt"><span class="word">Codepen</span><svg><use xlink:href="#codepen"></use></svg></a></li>
			    	<li class="icon github"><a target="_blank" href="https://github.com/tomchewitt"><span class="word">GitHub</span><svg><use xlink:href="#github"></use></svg></a></li>
			    </ul>
			</section>

        </section>

<?php
if ($as_json) {
	echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/footer.php";

}
