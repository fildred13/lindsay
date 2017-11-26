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
                  <h3 class="panel-title">Meg Black's Response</h3>
                </div>
                <div class="panel-body">
                    <div class="row margin-top-bottom margin-left-right well">
                        <div class="col-sm-4 col-sm-offset-1">
                        	<img src="/teaching-cases/sprandel-inc/client/meg-black/headshot.jpg" class="img-responsive" />
                        </div>
                        <p class="col-sm-7">"I am sorry. We provided you the wrong invoice. We revised Invoice 41965 shortly after it was sent out, due to a pricing error. We offered the customer a five-cent discount on one of the purchases that was not reflected in the sales invoice. We immediately issued a revised sales invoice for the amount reflected in the AR detail, but mistakenly provided you the original invoice. Our accounts receivable system tracks revised invoices by labeling them with an R. However, these revised invoice numbers do not transfer over when an AR detailed listing is produced in the general accounting system. I have mentioned this to our IT people several times to see if they can fix it to make tracking revised invoices easier, but they have not done anything about it yet. Perhaps your manager could mention this issue in our next status meeting to help encourage the IT department to make this fix? Here is the revised invoice which matches the amount in the AR Detail."</p>
                        <a href="/teaching-cases/sprandel-inc/downloads/corrections/41965R.pdf" target="_blank" class="btn btn-primary pull-right">41965R</a>
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
