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
    
    <div class="container" role="main">
    
    <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
    	<div class="well">
        	<h2>Misstatements Found During Tests of Details</h2>
            	<p>When a misstatement is found during detailed-testing the auditor should make additional selections for testing (regardless of the dollar amount of the misstatement). The auditor should attempt to obtain an understanding of how the misstatement occurred and determine whether it appears to be an anomaly, or whether it is indicative of a more pervasive problem. If the misstatement can be isolated to a particular type of transaction additional testing should focus on transactions involving that customer or vendor.</p>
              <p>If the misstatement cannot be isolated to a particular type of transaction, additional testing should cover the entire account balance.</p>
        </div>
        <div>
            <a href="/teaching-cases/sprandel-inc/case.php" class="btn btn-default pull-right">Return to Case</a>
            <a href="/teaching-cases/sprandel-inc/firm-guidance" class="btn btn-default pull-right margin-right">Return to Audit Firm Guidance</a>
        </div>
    </div>
    
    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
