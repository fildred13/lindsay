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
                
                	<p>You have provided to Ms. Burke the invoice numbers of the unconfirmed accounts receivable.</p>
                    
                    <div class="row margin-top-bottom margin-left-right well">
                        <div class="col-sm-4 col-sm-offset-1">
                        	<img src="/teaching-cases/sprandel-inc/client/kate-burke/headshot.jpg" class="img-responsive" />
                        </div>
                        <p class="col-sm-7">"I provided you with the shipping documents for the accounts I manage. You need to talk to John Sawyer if you need these documents for any other accounts, and you will need to speak with Meg Black if you need the invoices."</p>
                    </div>
                    
                    <p>Please click on the invoice number below to access the corresponding shipping document:</p>
                    
                    <div class="margin-top-bottom">
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/downloads/shipping-documents/34015.pdf" target="_blank" class="btn btn-primary col-xs-6 col-xs-offset-3">41687 (SD 34015)</a>
                        </div>
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/downloads/shipping-documents/34157.pdf" target="_blank" class="btn btn-primary col-xs-6 col-xs-offset-3">41811 (SD 34157)</a>
                        </div>
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/downloads/shipping-documents/34227.pdf" target="_blank" class="btn btn-primary col-xs-6 col-xs-offset-3">41888 (SD 34227)</a>
                        </div>
                    </div>
                    
                </div>
            </div>  
            <div>
                <a href="/teaching-cases/sprandel-inc/case.php" class="btn btn-default pull-right">Return to Case</a>
                <a href="/teaching-cases/sprandel-inc/client/kate-burke" class="btn btn-default pull-right margin-right">Return to Kate Burke</a>
            </div>
        </div>
    
    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
