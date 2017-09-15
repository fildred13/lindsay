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
                  <h3 class="panel-title">Ask about Audit Issues</h3>
                </div>

                <div class="panel-body">

                    <p>To discuss a specific issue you have uncovered during your audit work with Kate Burke input the identification number on the sample item you want to discuss. For example, if you want to ask about a discrepancy with a sample item in your AR Testwork, you should input the Invoice # (e.g., 12345) in the below open text box. Only input the numbers, do NOT input any words, letters, or symbols. Kate Burke can only answer questions about issues associated with her responsibilities and evidence that she has provided to the auditors, therefore if you have questions about work or evidence received from other personnel you should contact them directly.</p>

                    <form id='kate-burke-ask-issues-form'>
                        <input type="text" name="document-id" id="document-id">
                        <input type="submit" value="Submit" class="btn btn-default">
                    </form>

                </div>

            </div>  
            <div>
                <a href="/teaching-cases/sprandel-inc/case.php" class="btn btn-default pull-right">Return to Case</a>
                <a href="/teaching-cases/sprandel-inc/client/kate-burke" class="btn btn-default pull-right margin-right">Return to Kate Burke</a>
            </div>
        </div>
    
    </div><!-- role="main" -->

    <?php include($root."/includes/end_of_body.html"); ?>
    <script src="/teaching-cases/sprandel-inc/client/kate-burke/ask-about-issues.js"></script>

  </body>
</html>