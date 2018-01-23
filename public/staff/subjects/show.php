<!-- This is required for the url_for to work otherwise the back link is useless with the function attached -->
<?php require_once('../../../private/initialize.php'); ?>

<?php
// If for some reason someone types in /globe_bank/public/staff/subjects/show.php without any URL Params after .show.php, to avoid throwing errors we need to check if the $variables have been defined. If they have (and there are parameters in the URL the page works as normal. If however no parameters have been set as per above scenario, then we need to define default values.
//The below code shows 3 ways of doing just that!

// PHP 5.4 back
/*
if(isset($_GET['id']) && isset($_GET['menu_name'])){
    $id = $_GET['id'];
    $title = $_GET['menu_name'];
}else{
    $id = '1';
    $title = 'About Globe Bank';
}
*/

// PHP 5.5 onwards
$id = isset($_GET['id']) ? $_GET['id'] : '1';
$title = isset($_GET['menu_name']) ? $_GET['menu_name'] : 'About Globe Bank';

// PHP 7.0 onwards - using NULL COALESCING OPERATOR
// $id = $_GET['id'] ?? '1';
// $title = $_GET['menu_name'] ?? 'About Globe Bank';

echo "<h1>Page ID: $id</h1>";
echo "<h2>Page Title: $title</h2>";
?>
<br />
<p><a href="<?= url_for('/staff/subjects/index.php') ?> ">< Back</a></p>
