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
                  <h3 class="panel-title">Correspondence for Alligator Aid</h3>
                </div>
                <div class="panel-body">
                    <div class="row margin-top-bottom margin-left-right well">
                        <div class="col-sm-4 col-sm-offset-1">
                        	<img src="/teaching-cases/sprandel-inc/client/john-sawyer/headshot.jpg" class="img-responsive" />
                        </div>
                        <p class="col-sm-7">"The merchandise listed on invoice #41900 was returned on 12/31/X3 and should have been offset by a credit memo, this is not a valid receivable. I spoke to the warehouse manager, Fred Lockheart, about this issue. Fred informed me that because he left early on 12/31 any returned merchandise received at the warehouse after 4PM was logged on the manual receipt listing on 12/31/X3, but was not processed until 1/3/X4 when Fred returned from the holiday weekend. Fred should have dated this item the date the return shipment was received, not the date that he entered it into the system. Fred checked all items he processed on 1/3/X4 and found this issue applied to three other returns, including one for Olivier’s Olive Oil, which I think is also part of your sample. Based on the records he provided to me the total value of all four returns was only $47,356.78, so nothing we would consider major. I discussed with Fred the importance of ensuring issues like this do not occur in the future. Let me know if we need to discuss this issue with your manager."</p>
                    </div> 
                </div>
            </div>  
            <div>
                <a href="/teaching-cases/sprandel-inc/case.php" class="btn btn-default pull-right">Return to Case</a>
                <a href="/teaching-cases/sprandel-inc/client/john-sawyer/client-correspondence" class="btn btn-default pull-right margin-right">Return to Client Correspondence</a>
            </div>
        </div>
    
    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
