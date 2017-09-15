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
              <h3 class="panel-title">Carty &amp; Plews LLC &mdash; Audit Firm Guidance</h3>
            </div>
            <div class="panel-body">
            	<div class="row">
                	<a href="/teaching-cases/sprandel-inc/firm-guidance" class="btn btn-primary col-xs-3 col-xs-offset-1"> View Audit Firm Guidance</a>
                	<p class="col-xs-8">To view excerpts of relevant audit firm guidance and the Accounts Receivable audit program.</p>

              	</div>
            </div>
          </div>
        </div>
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Previously Obtained Audit Evidence from Sprandel, Inc.</h3>
            </div>
            <div class="panel-body">
            	<div class="row">
                	<a href="/teaching-cases/sprandel-inc/audit-evidence" class="btn btn-primary col-xs-3 col-xs-offset-1">View Previously Obtained Audit Evidence</a>
              		<p class="col-xs-8">To view prepared by client documents that you have previously obtained from your contacts at Sprandel, Inc. (i.e., detailed listings from which samples were chosen, assigned client accounts).</p>
              	</div>
            </div>
          </div>
        </div>
        <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Contact Client to Obtain New/Additional Audit Evidence</h3>
            </div>
            <div class="panel-body">
            	<div class="row">
                	<a href="/teaching-cases/sprandel-inc/client" class="btn btn-primary col-xs-3 col-xs-offset-1">New/Additional Audit Evidence</a>
              		<p class="col-xs-8">To obtain new and additional information and evidence from your client contacts at Sprandel, Inc.</p>
              	</div>
            </div>
          </div>
        </div>
    
    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
