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
              <h3 class="panel-title">Previously Obtained Audit Evidence</h3>
            </div>
            <div class="panel-body">
            	<p>To view prepared by client documents that you have previously obtained from your contacts at Sprandel, Inc. (i.e., detailed listings from which samples were chosen, assigned client accounts).</p>
                <div class="margin-top-bottom">
                  <div class="row">
                    <a href="/teaching-cases/sprandel-inc/downloads/AR Detail.pdf" target="_blank" class="btn btn-primary col-xs-3 col-xs-offset-1">AR Detail</a>
                    <p class="col-xs-8">To access the detailed list from which you chose your selections for Accounts Receivable existence testing. The list was obtained from the client.</p>
                  </div>
                
                	<div class="row">
                    <a href="/teaching-cases/sprandel-inc/audit-evidence/write-off-memos.php" class="btn btn-primary col-xs-3 col-xs-offset-1">Credit Memos</a>
                    <p class="col-xs-8">To access the credit memos your audit team obtained for write-off testing at the “Write-Offs” tab of the workpapers.</p>
                  </div>

                  <div class="row">
                    <a href="/teaching-cases/sprandel-inc/downloads/Assigned Client Accounts.pdf" target="_blank" class="btn btn-primary col-xs-3 col-xs-offset-1">Assigned Client Accounts</a>
                    <p class="col-xs-8">To access the detailed list of the account managers’ assigned client accounts.</p>
                  </div>
                    
                  <div class="row">
                    <a href="/teaching-cases/sprandel-inc/audit-evidence/cut-off-detail.php" class="btn btn-primary col-xs-3 col-xs-offset-1">Cut-Off Detail</a>
                    <p class="col-xs-8">To access the detailed lists from which you chose your selections for cut-off testing. The lists were obtained from the client.</p>
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
