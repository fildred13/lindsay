<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php
		if (!empty($_SERVER['SUBDOMAIN_DOCUMENT_ROOT'])) {
		  #GoDaddy Hackery
			$_SERVER['DOCUMENT_ROOT'] = $_SERVER['SUBDOMAIN_DOCUMENT_ROOT'];
		}
		$root = $_SERVER['DOCUMENT_ROOT'];
	?>
    
    <?php include($root."/includes/head.html"); ?>
  </head>

  <body>
  
  	<?php include($root."/includes/nav.html"); ?>
    
    <div class="jumbotron">
        <div class="container">
        	<div class="col-md-4">
            	<img src="media/logo.png" class="img-responsive" />
            </div>
            <div class="col-md-8">
                <h1>Welcome to Sprandel, Inc.</h1>
                <h2>Bring your auditing "tool belt," you are going to need it!</h2>
                <p>This teaching case is designed to help you learn how to close review notes, perform audit procedures, evaluate audit evidence, and understand the connection of auditing standards and other technical concepts highlighted in your textbook.</p>
            </div>
        </div>
    </div>
    
    <div class="container" role="main">
        
        <div class="well">
        	<h2>Student Instructions</h2>
            <p>You should begin this case by clicking the "View Case Materials" button. The Case Materials contain background information, as well as the case requirements, and deliverables. After reading the Case Materials, you should proceed by clicking "Download Workpapers" to open the excel file that contains the audit workpapers and the review notes from your manager. Save the excel file to your computer and then begin clearing the review notes. Firm guidance, audit evidence, and your client contacts can be accessed by clicking "Begin Case" below. </p>
            <a href="/teaching-cases/sprandel-inc/downloads/Case Materials.pdf" download class="btn btn-lg btn-info">View Case Materials</a>
            <a href="/teaching-cases/sprandel-inc/downloads/Workpapers.xlsx" download class="btn btn-lg btn-primary">Download Workpapers</a>
            <a href="/teaching-cases/sprandel-inc/case.php" class="btn btn-lg btn-success">Begin Case</a>
        </div>
    
    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
