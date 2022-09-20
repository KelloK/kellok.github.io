<!doctype html>
<html>
<head>
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style class="cp-pen-styles"></style>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link href="estilo.css" rel="stylesheet" type="text/css">
</head>

	<body>
	<nav id="menu">
	<div class="jquery-script-center">
	<div><script type="text/javascript">
		</script>
	<script type="text/javascript">
		</script>
<div class="jquery-script-clear">
</div>
	</div>
		</div>
     
<nav class='animated flipInX'>
<hr>
  <ul>
    <li> <a href='#'>
      <div class='fa fa-home'></div>
      </a> </li>
    <li> <a href="index.php">Home</a> </li>
      <li class='sub-menu'> <a href='#'>Skates <i class='fa fa-angle-down'></i> </a>
      <ul>
        <li> <a href="#">Street </a> </li>
        <li> <a href="#">Longboard </a> </li>
        <li> <a href="#">Cruisers </a> </li>
      </ul>
    </li>
    <li class='sub-menu'> <a href='#'>Peças <i class='fa fa-angle-down'></i> </a>
      <ul>
        <li> <a href="#">Shapes </a> </li>
        <li> <a href="#">Trucks </a> </li>
        <li> <a href="#">Rodas </a> </li>
        <li> <a href="#">Porcas </a> </li>
        <li> <a href="#">Lixas </a> </li>
        <li> <a href="#">Amortecedores </a> </li>
        <li><a href="#">Parafusos </a> </li>
        <li><a href="#">Rolamentos </a> </li>
        <li><a href="#">Chave para Skate </a> </li>
      </ul>
    </li>
    <li class='sub-menu'> <a href='#'>Roupas <i class="fa fa-angle-down"></i></a>
    <ul>
    	<li><a href="#">Camisetas </a></li>
        <li><a href="#">Calças </a></li>
        <li><a href="#">Bermudas </a></li>
         <li><a href="#">Blusas </a></li>
    </ul>
  	</li>
    <li class='sub-menu'> <a href='#'>Tênis</a></li>
    
    <li> <a href="contato.php"> Contato </a> </li>
  </ul>

<hr>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script>
$('.sub-menu ul').hide();
$(".sub-menu a").click(function () {
  $(this).parent(".sub-menu").children("ul").slideToggle("200");
  $(this).find("i.fa").toggleClass("fa-angle-up fa-angle-down");
});
</script>
</nav>
</nav>
	</body>
  
</html>