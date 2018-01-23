<!-- This is required for the url_for to work otherwise the back link is useless with the function attached -->
<?php require_once('../../../private/initialize.php'); ?>

<?php

$id = $_GET['id'];
$title = $_GET['menu_name'];
echo "<h1>Page ID: $id</h1>";
echo "<h2>Page Title: $title</h2>";
?>
<br />
<p><a href="<?= url_for('/staff/subjects/index.php') ?> ">< Back</a></p>
