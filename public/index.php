<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php $layout_context = "public"; ?>
<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(true); ?>

<div id="main">
  <div id="navigation">
		<?php echo public_navigation($current_subject, $current_page); ?>
  </div>
  <div id="page">
		<?php if ($current_page) { ?>
			
			<h2><?php echo ($current_page["menu_name"]); ?></h2>
			<p> <?php echo nl2br(($current_page["content"])); ?> </p>
						
		<?php	} else {  ?>
			
			<h1>Welcome to Open Repository!</h1>
			<!--<h2>A place for all the world's research, or well, almost. We are constantly updating our database with new and old publications alike.</h2>
			<p>You can be a part of this journey too! Just go to the upload section and upload your or any other work! We will review it and send you the confirmation.</p>
			
			<h3>The site encompasses the following: </h3>
			<li>Browse by category</li>
			<li>Browse by author</li>
			<li>Request missing publication</li>
			<li>A little history of Open Repo</li>
			<li>How to reach us</li>";-->

		 <?php } ?>
  </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
