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
                  <h3 class="panel-title">Accounts Receivable Shipping Documents</h3>
                </div>
                <div class="panel-body">
                
                	<p>You have provided to Mr. Sawyer the invoice numbers of the unconfirmed accounts receivable.</p>
                    
                    <div class="row margin-top-bottom margin-left-right well">
                        <div class="col-sm-4 col-sm-offset-1">
                        	<img src="/teaching-cases/sprandel-inc/client/john-sawyer/headshot.jpg" class="img-responsive" />
                        </div>
                        <p class="col-sm-7">"I have provided you with the shipping documents for the accounts I manage. You need to talk to Kate Burke if you need these documents for any other accounts, and you will need to speak with Meg Black if you need the invoices."</p>
                    </div>
                    
                    <p>Please click on the invoice number below to access the corresponding shipping document:</p>
                    
                    <div class="margin-top-bottom">
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/downloads/shipping-documents/34095.pdf" target="_blank" class="btn btn-primary col-xs-6 col-xs-offset-3">41756 (SD 34095)</a>
                        </div>
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/downloads/shipping-documents/34118.pdf" target="_blank" class="btn btn-primary col-xs-6 col-xs-offset-3">41768 (SD 34118)</a>
                        </div>
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/downloads/shipping-documents/34131.pdf" target="_blank" class="btn btn-primary col-xs-6 col-xs-offset-3">41786 (SD 34131)</a>
                        </div>
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/downloads/shipping-documents/34240.pdf" target="_blank" class="btn btn-primary col-xs-6 col-xs-offset-3">41900 (SD 34240)</a>
                        </div>
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/downloads/shipping-documents/34308.pdf" target="_blank" class="btn btn-primary col-xs-6 col-xs-offset-3">41965 (SD 34308)</a>
                        </div>
                    </div>
                    
                </div>
            </div>  
            <div>
                <a href="/teaching-cases/sprandel-inc/case.php" class="btn btn-default pull-right">Return to Case</a>
                <a href="/teaching-cases/sprandel-inc/client/john-sawyer" class="btn btn-default pull-right margin-right">Return to John Sawyer</a>
            </div>
        </div>
    
    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
