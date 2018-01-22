<!-- SUBJECTS INDEX.PHP -->

<!-- DO not use dynamic links here, only static strings as it introduces security vulnerabilities - here working with file system -->
<!-- Had to fix the nesting adding ../ as file is 1 dir deeper than the staff index.php file was -->
<?php require_once('../../../private/initialize.php'); ?>

<?php
// This is a $variable with an associative array that is storing content that will eventually come from a dBase. Instead at the moment the data has been hard-coded in.
$subjects = [
    ['id'=>'1', 'position'=>'1', 'visible'=>'1', 'menu_name'=>'About Globe Bank'],
    ['id'=>'2', 'position'=>'2', 'visible'=>'1', 'menu_name'=>'Consumer'],
    ['id'=>'3', 'position'=>'3', 'visible'=>'1', 'menu_name'=>'Small Business'],
    ['id'=>'4', 'position'=>'4', 'visible'=>'1', 'menu_name'=>'Commercial'],
];

?>


<!-- We are including the header here as it is not dynamic - it is 'static'/re-usable -->
<?php $page_title = 'Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.inc.php'); ?>
<!-- This allows us to define what is unique to this page with the section below -->
<section id="content">
    

</section>
<!-- We are including the footer here as it is not dynamic - it is 'static'/re-usable -->
<?php include(SHARED_PATH . '/staff_footer.inc.php'); ?>
