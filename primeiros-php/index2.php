<html>

	<head>
		<title>Meu primeiro site em PHp! :p</title>
		
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		
		<style type="text/css">
			.linha {
				font-weight: bold;
				color: green;
				padding-left: 5px;
				line-height: 25px;
			}
			.linha2 {
				font-weight: arial;
				color: red;
				padding-left: 10px;
				line-height: 25px;
			}
		</style>
	</head>
	
	<body>
	 
		<?php
			print("<span class=\"linha2\">Para a primeira página, ficou ate legal!!!"."</span><br />");
		?>
		<br />
		<?php
			for ( $i = 0 ; $i < 11 ; $i++ ) {
				print( "<span class=\"linha\">Linha número " .$i . "</span><br />");
		}
		?>
	
	
	</body>
	
	<script type="text/javascript">
		$(document).ready(function() {
			alert("Ainda vamo ficar bom nisso!!!! ");
		});
	</script>

</html>