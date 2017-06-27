<!doctype html>
<html>
	<head>
		<title>JQuery</title>
		<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){


				$("h1").css("color", "#f66");
				$("h1")
					.hide() //faz ficar invisivel
					.delay(1000) //da um delay pra carregar
					.fadeIn("slow") //efeito de fadein
					.text("Tchau!") //altera o text para tchau
					.click(function(){ // evento de click
						$("body").css("background", "#c30"); //altera o background
						$("h1").css("color", "#fff");
					});



				$("a").css({color:'red', display:'block'}); //colocar varios atributos css
				$(".link2").css("color", "green"); //altera o css da classe link2
				$("#link3").css("color", "blue"); //altera o css do id link3
				$("*").css("margin", "50px"); //* altera todos elementos
				$("h1, #link3").css("border", "3px solid black"); //coloca borda no h1 e no id link3



			});
			</script>
	</head>
	<body>

		<h1>Olá Lauan!</h1>

		<a href="#">link1</a>
		<a href="#" class="link2">link2</a>
		<a href="#" id="link3">link3</a>

	</body>
</html>