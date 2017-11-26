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
                        <p class="col-sm-7">"Regarding the missing signature on memo #2178, I was on vacation the week that this write-off was processed. Kate Burke faxed me the supporting documentation to ask about processing the write-off. I reviewed those materials and faxed back the fax cover page with a note and approval signature. I should have attached that to the credit memo. Typically, when I return I will officially sign the write-off memo for our records, but somehow I must have missed this one. The fax is attached."</p>
                        <a href="/teaching-cases/sprandel-inc/downloads/corrections/Fax Support 2178.pdf" target="_blank" class="btn btn-primary pull-right">Fax Support</a>
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
