<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset-utf-8"/>
<title>Corpo</title>
</head>
<body>
	<?php
		$index = isset($_GET["index"]) ? $_GET["index"]: "index.php";
		
		if(empty($_GET["index"])){
			include("home.php");
		}
	?>
</body>
</html>