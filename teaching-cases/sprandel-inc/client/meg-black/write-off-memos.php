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
                  <h3 class="panel-title">Write-Off Memos</h3>
                </div>
                <div class="panel-body">
                
                	<p>You provided Ms. Black with the write-off memo numbers of the additional sample selected by your audit manager.</p>
                    
                    <div class="row margin-top-bottom margin-left-right well">
                        <div class="col-sm-4 col-sm-offset-1">
                        	<img src="/teaching-cases/sprandel-inc/client/meg-black/headshot.jpg" class="img-responsive" />
                        </div>
                        <p class="col-sm-7">"Here are the additional write-off memos you requested. Please let me know if you require anything further."</p>
                    </div>
                    
                    <p>Please click on the write-off memo number below to access the corresponding write-off:</p>
                    
                    <div class="margin-top-bottom">
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/downloads/write-off-memos/2110.pdf" target="_blank" class="btn btn-primary col-xs-2 col-xs-offset-3">2110</a>
                            <a href="/teaching-cases/sprandel-inc/downloads/write-off-memos/2125.pdf" target="_blank" class="btn btn-primary col-xs-2 col-xs-offset-2">2125</a>
                        </div>
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/downloads/write-off-memos/2139.pdf" target="_blank" class="btn btn-primary col-xs-2 col-xs-offset-3">2139</a>
                            <a href="/teaching-cases/sprandel-inc/downloads/write-off-memos/2141.pdf" target="_blank" class="btn btn-primary col-xs-2 col-xs-offset-2">2141</a>
                        </div>
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/downloads/write-off-memos/2149.pdf" target="_blank" class="btn btn-primary col-xs-2 col-xs-offset-3">2149</a>
                            <a href="/teaching-cases/sprandel-inc/downloads/write-off-memos/2155.pdf" target="_blank" class="btn btn-primary col-xs-2 col-xs-offset-2">2155</a>
                        </div>
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/downloads/write-off-memos/2178.pdf" target="_blank" class="btn btn-primary col-xs-2 col-xs-offset-3">2178</a>
                            <a href="/teaching-cases/sprandel-inc/downloads/write-off-memos/2181.pdf" target="_blank" class="btn btn-primary col-xs-2 col-xs-offset-2">2181</a>
                        </div>
                        <div class="row">
                            <a href="/teaching-cases/sprandel-inc/downloads/write-off-memos/2182.pdf" target="_blank" class="btn btn-primary col-xs-2 col-xs-offset-3">2182</a>
                            <a href="/teaching-cases/sprandel-inc/downloads/write-off-memos/2183.pdf" target="_blank" class="btn btn-primary col-xs-2 col-xs-offset-2">2183</a>
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
