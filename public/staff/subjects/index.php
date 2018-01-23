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
    <div class="subjects listing">
        <h1>Subjects</h1>
        <div class="actinos">
            <a href="" class="actions">Create New Subject</a>
        </div>
        <!-- This table has a list of subjects that will be displayed in the sidebar with data being retrieved from the database. For now the menu has been set up with an associative array which emulates the database data -->
        <table class="list">
            <tr>
                <th>ID</th>
                <th>Position</th>
                <th>Visible</th>
                <th>Name</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <!-- We are using a foreach loop to iterate through the array and display the data based on key=>value pairs. For each value the array will loop through, find the key & insert the associated value for that key generating the menu -->

            <!-- For each of the $subjects in the associative-array we are creating an array called $subject where we can ask for the values for each of the keys to be displayed in the table row. Thus, while there are items in the array, the for each loop will iterate through and display them in their own row. -->
            <?php foreach($subjects as $subject) { ?>
            <tr>
                <td><?=$subject['id']; ?></td>
                <td><?=$subject['position']; ?></td>
                <td><?=$subject['visible'] == 1 ? 'true':'false'; ?></td>
                <td><?=$subject['menu_name']; ?></td>
                <!-- For each view the link needs to have it's own id associated with that subject. We can use a url parameter - the id via the url so that we can view the details for each subject.  -->
                <!-- For multiple parameters we need to assign the name of each param with an & b/w them ie: show.php?id='<$variable>'&'menu_name'$<variable>' -->
                <td><a href="<?= url_for('/staff/subjects/show.php?id=' . $subject['id'] . '&' . 'menu_name=' . $subject['menu_name']); ?> " class="action">View</a></td>
                <td><a href="" class="action">Edit</a></td>
                <td><a href="" class="action">Delete</a></td>
            </tr>
        <!-- Don't forget to close off the loop at the end of the row... -->
            <?php } ?>
        </table>
    </div><!-- /END .subjects -->


</section>
<!-- We are including the footer here as it is not dynamic - it is 'static'/re-usable -->
<?php include(SHARED_PATH . '/staff_footer.inc.php'); ?>
