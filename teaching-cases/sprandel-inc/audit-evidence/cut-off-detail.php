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
                  <h3 class="panel-title">Cut-Off Testing Detail</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <a href="/teaching-cases/sprandel-inc/downloads/Early Cut-Off Detail.pdf" target="_blank" class="btn btn-primary col-xs-3 col-xs-offset-1">Early Cut-Off Detail</a>         
                        <p class="col-xs-8">To access the detailed list of all credit memos issued by Sprandel, Inc. for the 15 days prior to fiscal year-end.</p>
                    </div>
                    <div class="row">
                        <a href="/teaching-cases/sprandel-inc/downloads/Late Cut-Off Detail.pdf" target="_blank" class="btn btn-primary col-xs-3 col-xs-offset-1">Late Cut-Off Detail</a>
                        <p class="col-xs-8">To access the detailed list of all credit memos issued by Sprandel, Inc. for the 15 days after fiscal year-end.</p>
                    </div>
                </div>
            </div>  
            <div>
                <a href="/teaching-cases/sprandel-inc/case.php" class="btn btn-default pull-right">Return to Case</a>
                <a href="/teaching-cases/sprandel-inc/audit-evidence" class="btn btn-default pull-right margin-right">Return to Audit Evidence</a>
            </div>
        </div>
    
    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
