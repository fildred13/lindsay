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
                  <h3 class="panel-title">Client Correspondence from Mr. Sawyer</h3>
                </div>
                <div class="panel-body">
                
                	<p>You have asked Mr. Sawyer for any follow-up correspondence he has had regarding the outstanding invoices associated with the accounts he manages.</p>     
                    <p>Please click on the customers below to access corresponding communication.</p>
                    
                    <div class="margin-top-bottom">
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/client/john-sawyer/client-correspondence/penns-oil.php" class="btn btn-primary col-xs-6 col-xs-offset-3">Penn's Oil</a>
                        </div>
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/client/john-sawyer/client-correspondence/bath-body-shop.php"class="btn btn-primary col-xs-6 col-xs-offset-3">The Bath &amp; Body Shop</a>
                        </div>
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/client/john-sawyer/client-correspondence/alligator-aid.php" class="btn btn-primary col-xs-6 col-xs-offset-3">Alligator Aid</a>
                        </div>
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/client/john-sawyer/client-correspondence/diet-water.php" class="btn btn-primary col-xs-6 col-xs-offset-3">Diet Water</a>
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
