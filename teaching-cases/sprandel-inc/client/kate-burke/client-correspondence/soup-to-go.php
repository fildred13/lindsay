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
                  <h3 class="panel-title">Correspondence for Soup to Go</h3>
                </div>
                <div class="panel-body">
                    <div class="row margin-top-bottom margin-left-right well">
                        <div class="col-sm-4 col-sm-offset-1">
                        	<img src="/teaching-cases/sprandel-inc/client/kate-burke/headshot.jpg" class="img-responsive" />
                        </div>
                        <p class="col-sm-7">"I have received notice of an electronic payment from Soup to Go for invoice #41888. You can ask internal audit to assist you in verifying receipt of payment, if necessary."</p>
                    </div> 
                    <div class="row">
                    	<p class="col-sm-12">If you would like to verify receipt of payment with internal audit, click below:</p>
                    </div>
                    <div class="margin-top-bottom">
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/client/kate-burke/client-correspondence/soup-to-go-internal-audit.php" class="btn btn-primary col-xs-6 col-xs-offset-3">Internal Audit</a>
                        </div>
                    </div>
                </div>
            </div>  
            <div>
                <a href="/teaching-cases/sprandel-inc/case.php" class="btn btn-default pull-right">Return to Case</a>
                <a href="/teaching-cases/sprandel-inc/client/kate-burke/client-correspondence" class="btn btn-default pull-right margin-right">Return to Client Correspondence</a>
            </div>
        </div>
    
    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
