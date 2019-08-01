<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
 	<div id="main-menu">
  	  <h2>Main Menu</h2>
  		<ul>
    		<li><a href="<?php echo url_for('staff/subjects/index.php'); ?>"><h3>Subjects</h3></a></li>
    	</ul>
    	<ul>
    		<li><a href="<?php echo url_for('staff/pages/index.php'); ?>"><h3>Pages</h3></a></li>
    	</ul>
	</div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
