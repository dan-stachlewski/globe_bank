
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
    <link rel="stylesheet" media="" href="../stylesheets/staff.css">
</head>
<body>
    <header>
        <h1>GBI Staff Area</h1>
    </header>
    <navigation>
        <ul>
            <li><a href="index.php">Menu</a></li>
        </ul>
    </navigation>
