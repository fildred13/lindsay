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
                  <h3 class="panel-title">Accounts Receivable Sales Invoices</h3>
                </div>
                <div class="panel-body">
                
                	<p>You provided Ms. Black the invoice numbers of the unconfirmed accounts receivable.</p>
                    
                    <div class="row margin-top-bottom margin-left-right well">
                        <div class="col-sm-4 col-sm-offset-1">
                        	<img src="/teaching-cases/sprandel-inc/client/meg-black/headshot.jpg" class="img-responsive" />
                        </div>
                        <p class="col-sm-7">"If necessary, you should ask the specific account managers (Kate Burke and John Sawyer) for shipping documents and for information on customer correspondence."</p>
                    </div>
                    
                    <p>Please click on the invoice number below to access the corresponding sales invoice:</p>
                    
                    <div class="margin-top-bottom">
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/downloads/ar-invoices/41687.pdf" target="_blank" class="btn btn-primary col-xs-2 col-xs-offset-3">41687</a>
                            <a href="/teaching-cases/sprandel-inc/downloads/ar-invoices/41756.pdf" target="_blank" class="btn btn-primary col-xs-2 col-xs-offset-2">41756</a>
                        </div>
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/downloads/ar-invoices/41768.pdf" target="_blank" class="btn btn-primary col-xs-2 col-xs-offset-3">41768</a>
                            <a href="/teaching-cases/sprandel-inc/downloads/ar-invoices/41786.pdf" target="_blank" class="btn btn-primary col-xs-2 col-xs-offset-2">41786</a>
                        </div>
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/downloads/ar-invoices/41811.pdf" target="_blank" class="btn btn-primary col-xs-2 col-xs-offset-3">41811</a>
                            <a href="/teaching-cases/sprandel-inc/downloads/ar-invoices/41888.pdf" target="_blank" class="btn btn-primary col-xs-2 col-xs-offset-2">41888</a>
                        </div>
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/downloads/ar-invoices/41900.pdf" target="_blank" class="btn btn-primary col-xs-2 col-xs-offset-3">41900</a>
                            <a href="/teaching-cases/sprandel-inc/downloads/ar-invoices/41965.pdf" target="_blank" class="btn btn-primary col-xs-2 col-xs-offset-2">41965</a>
                        </div>
                    </div>
                    
                </div>
            </div>  
            <div>
                <a href="/teaching-cases/sprandel-inc/case.php" class="btn btn-default pull-right">Return to Case</a>
                <a href="/teaching-cases/sprandel-inc/client/meg-black" class="btn btn-default pull-right margin-right">Return to Meg Black</a>
            </div>
        </div>
    
    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
