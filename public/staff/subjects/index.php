<!-- SUBJECTS INDEX.PHP -->

<!-- DO not use dynamic links here, only static strings as it introduces security vulnerabilities - here working with file system -->
<!-- Had to fix the nesting adding ../ as file is 1 dir deeper than the staff index.php file was -->
<?php require_once('../../../private/initialize.php'); ?>
<!-- We are including the header here as it is not dynamic - it is 'static'/re-usable -->
<?php $page_title = 'Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.inc.php'); ?>
<!-- This allows us to define what is unique to this page with the section below -->
<section id="content">

</section>
<!-- We are including the footer here as it is not dynamic - it is 'static'/re-usable -->
<?php include(SHARED_PATH . '/staff_footer.inc.php'); ?>
