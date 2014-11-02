<?php
$page_title = "KOOZAC";
$as_json = false;

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
	$as_json = true;
	ob_start();
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/header.php";
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/nav.php";
}
?>

		<section class="content work">

			<h2>KOOZAC</h2>

			<p>Koozac...</p>

        </section>

<?php
if ($as_json) {
	echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
	include $_SERVER['DOCUMENT_ROOT']."/asset/dist/inc/footer.php";

}
