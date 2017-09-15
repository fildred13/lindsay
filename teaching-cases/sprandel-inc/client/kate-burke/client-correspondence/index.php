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
                  <h3 class="panel-title">Client Correspondence from Ms. Burke</h3>
                </div>
                <div class="panel-body">
                
                	<p>You have asked Ms. Burke for any follow-up correspondence she has had regarding the outstanding invoices associated with the accounts she manages.</p>     
                    <p>Please click on the customers below to access corresponding communication.</p>
                    
                    <div class="margin-top-bottom">
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/client/kate-burke/client-correspondence/generic-cola.php" class="btn btn-primary col-xs-6 col-xs-offset-3">Generic Cola</a>
                        </div>
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/client/kate-burke/client-correspondence/olive-oil.php"class="btn btn-primary col-xs-6 col-xs-offset-3">Olivier’s Olive Oil</a>
                        </div>
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/client/kate-burke/client-correspondence/soup-to-go.php" class="btn btn-primary col-xs-6 col-xs-offset-3">Soup to Go</a>
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
