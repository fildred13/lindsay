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
              <h3 class="panel-title">Client Personnel</h3>
            </div>
            <div class="panel-body">
            	<p>Obtain new and additional information and evidence from your client contacts at Sprandel, Inc by speaking to the appropriate contact below.</p>
              <p>Meg Black, Accounts Receivable Supervisor, approves write-offs, calculates the AR allowance, drafts and books AR-related journal entries and keeps all invoices. The Account Managers, Kate Burke and John Sawyer are responsible for individual accounts. Meg Black has previously provided you with a detailed listing of the client accounts for each of the Account Managers (see "Assigned Client Accounts" file in Previously Obtained Audit Evidence). The Account Managers initiate and sign-off on write-offs, correspond with customers, and keep all shipping documents for their respective client accounts.</p>
                <div class="margin-top-bottom">
                
                	<div class="row">
                        <div class="col-sm-4 col-sm-offset-1 col-lg-3 col-lg-offset-1">
                        	<div class="row">
                        		<img src="/teaching-cases/sprandel-inc/client/meg-black/headshot.jpg" class="img-responsive" />
                            </div>
                            <div class="row">
                        		<a href="/teaching-cases/sprandel-inc/client/meg-black" class="btn btn-primary col-xs-12">Speak to Meg Black</a>
                            </div>
                        </div>
                        <p class="col-sm-7 col-lg-8">You can speak to Meg Black, Accounts Receivable Supervisor, to obtain sales invoices and get further information on the cut-off issue noted in your testwork.</p>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-1 col-lg-3 col-lg-offset-1">
                        	<div class="row">
                        		<img src="/teaching-cases/sprandel-inc/client/kate-burke/headshot.jpg" class="img-responsive" />
                            </div>
                            <div class="row">
                        		<a href="/teaching-cases/sprandel-inc/client/kate-burke" class="btn btn-primary col-xs-12">Speak to Kate Burke</a>
                            </div>
                        </div>
                        <p class="col-sm-7 col-lg-8">You can speak to Kate Burke, Account Manager, to obtain shipping documents, client correspondence, new cut-off support, and get further information on the cut-off issue you noted in your testwork. Kate Burke oversees the following client accounts: Cold &amp; Sinus Care, Florida Juice Corp, Generic Cola Inc., Jay &amp; Jack's Auto Oil, Mars Liquid Detergents, Olivier's Olive Oil, Sunset Soap, and Soup to Go.</p>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-1 col-lg-3 col-lg-offset-1">
                        	<div class="row">
                        		<img src="/teaching-cases/sprandel-inc/client/john-sawyer/headshot.jpg" class="img-responsive" />
                            </div>
                            <div class="row">
                        		<a href="/teaching-cases/sprandel-inc/client/john-sawyer" class="btn btn-primary col-xs-12">Speak to John Sawyer</a>
                            </div>
                        </div>
                        <p class="col-sm-7 col-lg-8">You can speak to John Sawyer, Account Manager, to obtain shipping documents, client correspondence, and new cut-off support. John Sawyer oversees the following client accounts: Alligator Aid, The Bath &amp; Body Shop, Diet Water, Jug O Wine, Penns Oil, Petrol UK, Scent of a Pet, and Soupy Soap.</p>
                    </div>
                    
                </div>
            </div>
          </div>
          <div>
              <a href="/teaching-cases/sprandel-inc/case.php" class="btn btn-default pull-right">Return to Case</a>
          </div>
        </div>
        
    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
