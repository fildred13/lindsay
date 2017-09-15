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
                  <h3 class="panel-title">Speak with John Sawyer</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <a href="/teaching-cases/sprandel-inc/client/john-sawyer/shipping-docs.php" class="btn btn-primary col-xs-8 col-xs-offset-2">Ask for Shipping Documents for AR Invoices</a>
                    </div>
                    <div class="row">
                        <a href="/teaching-cases/sprandel-inc/client/john-sawyer/client-correspondence" class="btn btn-primary col-xs-8 col-xs-offset-2">Ask for Client Correspondence for open AR Invoices</a>
                    </div>
                    <div class="row">
                        <a href="/teaching-cases/sprandel-inc/client/john-sawyer/new-cut-off.php" class="btn btn-primary col-xs-8 col-xs-offset-2">Ask for New Cut-Off Support for Testing</a>
                    </div>
                </div>
            </div>  
            <div>
                <a href="/teaching-cases/sprandel-inc/case.php" class="btn btn-default pull-right">Return to Case</a>
                <a href="/teaching-cases/sprandel-inc/client" class="btn btn-default pull-right margin-right">Return to Client Contacts</a>
            </div>
        </div>
    
    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
