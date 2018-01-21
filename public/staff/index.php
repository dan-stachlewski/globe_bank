<!-- MAIN INDEX.PHP PAGE -->

<!-- DO not use dynamic links here, only static strings as it introduces security vulnerabilities - here working with file system -->
<!-- B/c initialize.php contains the code creating the file paths it cannot be used on this file path -->
<?php require_once('../../private/initialize.php'); ?>
<!-- We are including the header here as it is not dynamic - it is 'static'/re-usable -->
<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.inc.php'); ?>
<!-- This allows us to define what is unique to this page with the section below -->
<section id="content">

</section>
<!-- We are including the footer here as it is not dynamic - it is 'static'/re-usable -->
<?php include(SHARED_PATH . '/staff_footer.inc.php'); ?>
