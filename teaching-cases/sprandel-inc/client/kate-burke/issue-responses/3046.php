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
                  <h3 class="panel-title">Kate Burke's Response</h3>
                </div>
                <div class="panel-body">
                    <div class="row margin-top-bottom margin-left-right well">
                        <div class="col-sm-4 col-sm-offset-1">
                        	<img src="/teaching-cases/sprandel-inc/client/kate-burke/headshot.jpg" class="img-responsive" />
                        </div>
                        <p class="col-sm-7">"My understanding is that Mars Liquid Detergents has different terms for returning merchandise than the rest of Sprandel, Inc.'s customers. The title of the merchandise changes hands (for Mars Liquid Detergents) when the carrier picks up the merchandise. For all of Sprandel's other customers, the title of the merchandise does not change hands until the merchandise is delivered by the carrier. The merchandise was picked up by the carrier on 12/30/X3 but was not delivered to Sprandel, Inc. until 1/2/X4. By mistake a credit memo was not issued until 1/2/X4 because that is the process for other Sprandel, Inc. customers. If you think it's necessary, Meg Black can discuss adjusting for the error with your manager, Bill Davis."</p>
                        <p class="col-sm-7 col-sm-offset-5">"I will provide any further support you require for additional credit memo cutoff testing for the accounts I manage. I am pretty sure Meg Black previously supplied you with the cutoff detail."</p>
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
