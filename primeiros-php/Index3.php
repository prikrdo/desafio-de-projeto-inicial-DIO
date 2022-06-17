<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Página PHP utilizando a função ACCORDION</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion({
		collapsible: true
	});
  } );
  </script>
</head>
<body>
 
<div id="accordion">
  <h3>O que é a Internet</h3>
  <div>
    <p>
	Nesta aula abordaremos os seguintes temas abaixo: <br />
    </p>
	<ul>
	  <Li>Termos-Chave</Li>
	  <Li>Introdução ao tema</Li>
	  <Li>A Internet atualmente</Li>
	</ul>
  </div>
  <h3>Como funciona a internet</h3>
  <div>
    <p>
	Nesta aula abordaremos os seguintes temas abaixo: <br />
	</p>
	<ul>
	  <Li>Objetivos da aula</Li>
	  <Li>O que são redes</Li>
	</ul>
  </div>
  <h3>TCP/IP, portas, roteadores, switches e modems</h3>
  <div>
    <p>
	Nesta aula abordaremos os seguintes temas abaixo:<br />
    </p>
    <ul>
      <li>Objetivos da aula</li>
      <li>TCP/IP e UDP</li>
      <li>Portas</li>
	  <Li>Roteadores, switches, e modems</Li>
    </ul>
  </div>
  <h3>Celular, internet e outros dispositivos</h3>
  <div>
    <p>
	Esta primeira aula basica de PHP foi bastante produtiva	
    </p>
    <p>
	Os exemplos demonstrado e a dinâmica apresentada pelo professor da DIO
	estimula bastante a curiosidade do aluno 
    </p>
  </div>
</div>
 
 
</body>
	<script type="text/javascript">
		$(document).ready(function() {
			alert("Exercicio proposto ao termino da aula, no qual foi solicitado a utilização da função ACCORDION");
		});
	</script>

</html>