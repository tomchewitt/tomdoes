<?php
$page_title = "Index page";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include "asset/dist/inc/header.php";
	include "asset/dist/inc/nav.php";
}
?>

		<section class="content home">

			<section class="hero">
				<img src="/asset/dist/img/bg.jpg">
				<span class="gradient"></span>
				<svg class="logotype"><use xlink:href="#logotype"></use></svg>
			</section>

			<section class="block">
			    <h1>FEED</h1>

			    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum quibusdam et iure odio saepe doloremque, ipsum, enim quod ut obcaecati veniam quidem, perferendis, officia officiis dolore iusto vitae. Expedita, magnam.</p>
			</section>

        </section>

<?php
if ($as_json) {
	echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
	include "asset/dist/inc/footer.php";

}
