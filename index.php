<?php
	require_once('parser.php');
?>

<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>News</title>

  
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

  <!--<script src="js/vendor/custom.modernizr.js"></script>-->
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script type="text/javascript">
  
	$(function() {
		for(i=1;i<=5;i++) {
			$( "#pos"+i ).accordion({
			collapsible: true
			
			});
		}
	});

  </script>

</head>
<body>

	<div class="row">
		<div class="large-12 columns">
			<h2>News</h2>
			<hr />
		</div>
	</div>

	<div class="row">
		<div class="large-12 columns">

			<!-- Grid Example -->
			<div class="row">
				<div class="large-12 columns">
					<div>
						<div id="pos1">
							<h3>Last 4 news</h3>
								<div>
									<?php echo getResults("",true); ?>
								</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-6 columns">
					<div id="pos2">
						<h3>Humor</h3>
							<div id="content">
								
								<?php echo getResults("humor",false); ?>
								
							</div>
					</div>	
				</div>
				<div class="large-6 columns">
					<div id="pos3">
						<h3>Cloud</h3>
							<div id="content">
								
								<?php echo getResults("Cloud",false); ?>
								
							</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-6 columns">
					<div id="pos4">
						<h3>Science</h3>
							<div id="content">
								
								<?php echo getResults("Science",false); ?>
								
							</div>
					</div>	
				</div>
				<div class="large-6 columns">
					<div id="pos5">
						<h3>Gadgets</h3>
							<div id="content">
								
								<?php echo getResults("Gadgets",false); ?>
								
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/foundation.min.js"></script>
  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  <script src="js/foundation/foundation.interchange.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.abide.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
