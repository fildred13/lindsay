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
                  <h3 class="panel-title">Sprandel Inc. Internal Audit Correspondence</h3>
                </div>
                <div class="panel-body">
                    <div class="row margin-top-bottom margin-left-right well">
                        <div class="col-sm-4 col-sm-offset-1">
                        	<img src="/teaching-cases/sprandel-inc/client/internal-auditor-headshot.jpg" class="img-responsive" />
                        </div>
                        <p class="col-sm-7">"I can verify the electronic receipt of payment from Generic Cola, for invoice #41687 in the amount of $6,264.85 received on 02/12/X4."</p>
                    </div> 
                    <div class="row">
                    	<p class="col-sm-12">Based on review of the evidence with internal audit and the date of payment, it appears that the amount was a valid receivable for Sprandel, Inc. as of 12/31/X3.</p>
                    </div>
                </div>
            </div>  
            <div>
                <a href="/teaching-cases/sprandel-inc/case.php" class="btn btn-default pull-right">Return to Case</a>
                <a href="/teaching-cases/sprandel-inc/client/kate-burke/client-correspondence/generic-cola.php" class="btn btn-default pull-right margin-right">Return to Generic Cola</a>
            </div>
        </div>
    
    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
