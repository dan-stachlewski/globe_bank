
<?php
    //The below code prevents the code from breaking if the var $page_title is not defined on a page, instead setting a default value.
    if(!isset($page_title)) { $page_title='Staff Area'; }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GBI - <?= $page_title ?></title>
    <!-- Defining a constant for the Web Root allows us to share the stylehseet among diff index.php locations -->
    <link rel="stylesheet" media="" href="<?= url_for('/stylesheets/staff.css');?>">
</head>
<body>
    <header>
        <h1>GBI Staff Area</h1>
    </header>
    <navigation>
        <ul>
            <!-- We have a shared header file being used on multiple pages & we want to use relative links to differnet pages - we need to define a constant for the Web Root -->
            <li><a href="<?= url_for('/staff/index.php'); ?>">Menu</a></li>
        </ul>
    </navigation>
