<!DOCTYPE html PUBLIC>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Skate X7 Jalopy</title>
<link href="zoom/css/easyzoom.css" rel="stylesheet" type="text/css">
<link href="zoom/css/example.css" rel="stylesheet" type="text/css">
<link href="zoom/css/pygments.css" rel="stylesheet" type="text/css">
	<script>
		var _gaq=[['_setAccount','UA-2508361-9'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
</head>
<body>  
	<div id="principal">
    
    <header id="cabecalho">
   
    <?php 
			include("topo.php");
		?>
	</header>
	<nav id="menu">
		<?php
			include("menu1.php");			
		?>
	</nav> 

	
    	<div id="container">
        
        <div id="venda">
         <h1>Skate X7 Flowe Skull</h1>
         <p>De: 179,99</p>
         <h2>Por: 79,99</h2>
         </div>
        	<section id="introduction">

		<!-- Introduction -->
		

			<div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
				<a href="zoom/example-images/skflower.jpg">
					<img src="zoom/example-images/skflower.jpg" alt="" width="400" height="400" />
				</a>
			</div>

			<ul class="thumbnails">
				<li>
					<a href="zoom/example-images/skflower.jpg" data-standard="zoom/example-images/skflower.jpg">
						<img src="zoom/example-images/skflower.jpg" alt="" />
					</a>
				</li>
				<li>
					<a href="zoom/example-images/sflower.jpg" data-standard="zoom/example-images/sflower.jpg">
						<img src="zoom/example-images/sflower.jpg" alt="" />
					</a>
				</li>
				<li>
					<a href="zoom/example-images/flowerfull.jpg" data-standard="zoom/example-images/flowerfull.jpg">
						<img src="zoom/example-images/flowerfull.jpg" alt="" />
					</a>
				</li>
				<li>
					<a href="zoom/example-images/rodaflower.jpg" data-standard="zoom/example-images/rodaflower.jpg">
						<img src="zoom/example-images/rodaflower.jpg" alt="" />
					</a>
				</li>
			</ul>
            
            </section>
            
	

	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="zoom/dist/easyzoom.js"></script>
	<script>
		// Instantiate EasyZoom instances
		var $easyzoom = $('.easyzoom').easyZoom();

		// Setup thumbnails example
		var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

		$('.thumbnails').on('click', 'a', function(e) {
			var $this = $(this);

			e.preventDefault();

			// Use EasyZoom's `swap` method
			api1.swap($this.data('standard'), $this.attr('href'));
		});

		// Setup toggles example
		var api2 = $easyzoom.filter('.easyzoom--with-toggle').data('easyZoom');

		$('.toggle').on('click', function() {
			var $this = $(this);

			if ($this.data("active") === true) {
				$this.text("Switch on").data("active", false);
				api2.teardown();
			} else {
				$this.text("Switch off").data("active", true);
				api2._init();
			}
		});
	</script>
    
    </div>
    
    <footer id="rodape">
		<?php
			include("rodape.php");
		?>
	</footer> 
    </div>  
</body>
</html>