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
         <h1>Skate X7 Jalopy</h1>
         <hr>
         <p>De: R$ 179,99</p>
         <h2>Por: R$79,99</h2>
         <p>Até 4x de R$ 19,99 s/juros no cartão</p>
        </div>
        	<section id="introduction">
			
		<!-- Introduction -->
		

			<div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
				<a href="zoom/example-images/skjalopy.jpg">
					<img src="zoom/example-images/skjalopy.jpg" alt="" width="400" height="400" />
				</a>
			</div>

			<ul class="thumbnails">
				<li>
					<a href="zoom/example-images/skjalopy.jpg" data-standard="zoom/example-images/skjalopy.jpg">
						<img src="zoom/example-images/skjalopy.jpg" alt="" />
					</a>
				</li>
				<li>
					<a href="zoom/example-images/sjalopy.jpg" data-standard="zoom/example-images/sjalopy.jpg">
						<img src="zoom/example-images/sjalopy.jpg" alt="" />
					</a>
				</li>
				<li>
					<a href="zoom/example-images/jalopyfull.jpg" data-standard="zoom/example-images/jalopyfull.jpg">
						<img src="zoom/example-images/jalopyfull.jpg" alt="" />
					</a>
				</li>
				<li>
					<a href="zoom/example-images/rodajalopy.jpg" data-standard="zoom/example-images/rodajalopy.jpg">
						<img src="zoom/example-images/rodajalopy.jpg" alt="" />
					</a>
				</li>
			</ul>
            
            </section>
           <br>
           <br>
           <hr>
           <br>
  			<h1>Informações do Produto</h1>
            
            <p>Conheça o <b>Skate X7 Jalopy!</b></p>
            
            <p>O Skate X7 Jalopy vai fazer a cabeça de todos aqueles que gostam de segurança e estilo durante as manobras radicais. 
            Seu material é de lâmina de madeira resistente e sua base é antiderrapante. Aproveite!</p>
             	<ul>
                	<li><b>Principais Características</b></li>              
                	<li>Material: Lâminas de madeira resistentea</li>
                	<li>Base: Antiderrapante</li>              
                	<li>Rodas: Em PU – 54 mm – ABEC 5</li>
                    <li>Peso aproximado: 2,36 Kg</li>
                    <li>Dimensões do produto cm (C x L x A): 79 cm x 20 cm x 10 cm</li>
                    <li>Garantia: Contra defeitos de fabricação</li>               
                </ul>
          </div>
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
  
     
    <footer id="rodape">
		<?php
			include("rodape.php");
		?>
	</footer> 
    </div>  
</body>
</html>