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
        	<div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Audit Firm Guidance</h3>
                </div>
                <div class="panel-body">
                    <p>To view excerpts of relevant audit firm guidance and the Accounts Receivable audit program.</p>
                    <div class="margin-top-bottom">
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/downloads/AR Audit Program.pdf" target="_blank" class="btn btn-primary col-xs-3 col-xs-offset-1">AR Audit Program</a>
                            <p class="col-xs-8">To view the Accounts Receivable audit program.</p>
                        </div>
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/firm-guidance/sample-size.php" class="btn btn-primary col-xs-3 col-xs-offset-1">Sample Size</a> 
                            <p class="col-xs-8">To view audit firm guidance related to sample size materials.</p>
                        </div>
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/firm-guidance/errors-found-during-tod.php" class="btn btn-primary col-xs-3 col-xs-offset-1">Tests of Details &mdash; Misstatements</a>
                            <p class="col-xs-8">To view audit firm guidance related to misstatements found during detailed testing.</p>
                        </div>
                    </div>
                </div>
			</div>
            <div>
            	<a href="/teaching-cases/sprandel-inc/case.php" class="btn btn-default pull-right">Return to Case</a>
            </div>
        </div>
    
    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
