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
          <div class="well">
            <h2>Sample Size Decisions</h2>
              <p>When performing tests of details of account balances, sample sizes should be determined using our firm proprietary sampling software to ensure that we can draw conclusions on the total population.</p>
              <p>When performing tests of controls, sample sizes should be determined based on the population size in accordance with our firm guidance. Specifically,</p>
              <table class="case-table">
                <thead>
                  <td>Population Size</td>
                  <td>Sample Size</td>
                </thead>
                <tbody>
                  <tr>
                    <td>4 (Quarterly Control)</td>
                    <td>2</td>
                  </tr>
                  <tr>
                    <td>12 (Monthly Control)</td>
                    <td>2-4</td>
                  </tr>
                  <tr>
                    <td>24 (Semi-monthly Control)</td>
                    <td>3-8</td>
                  </tr>
                  <tr>
                    <td>52 (Weekly)</td>
                    <td>5-9</td>
                  </tr>
                  <tr>
                    <td>100 or less</td>
                    <td>33</td>
                  </tr>
                  <tr>
                    <td>101-200</td>
                    <td>35</td>
                  </tr>
                  <tr>
                    <td>201-500</td>
                    <td>37</td>
                  </tr>
                  <tr>
                    <td>500-1000</td>
                    <td>37</td>
                  </tr>
                  <tr>
                    <td>&lt;1000</td>
                    <td>38</td>
                  </tr>
                </tbody>
              </table>

              <p>If a sample is to be used for both tests of details and tests of controls (i.e., a dual-purpose test), then it is important to ensure that the sample is sufficient to conclude on both. If the sample size for the test of details determined by the proprietary sampling software is smaller than the required sample size for the test of control (identified in the above table), then additional items must be selected and tested to ensure the effectiveness of the control.</p>
          </div>
          <div>
          	<a href="/teaching-cases/sprandel-inc/case.php" class="btn  btn-default pull-right">Return to Case</a>
          	<a href="/teaching-cases/sprandel-inc/firm-guidance" class="btn btn-default pull-right margin-right">Return to Firm Guidance</a>
          </div>
      </div>
    
    </div><!-- role="main" -->

	<?php include($root."/includes/end_of_body.html"); ?>

  </body>
</html>
