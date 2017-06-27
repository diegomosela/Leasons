<!doctype html>
<html>
	<head>
		<title>JQuery</title>
		<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){

				$("h2").css("margin", "0"); //tira a margin de todos h2
				$("p").css({margin:"0", color:"blue"}); //muda a cor de todos os p
				$(".div1").css({'margin-bottom': '20px', background: "gray"});

				//seleção de filhos
				$(".div1 span").hide().delay(1000).fadeIn("slow").css("color", "green");

				//seleção de filhas diretas
				$(".div1 h2").hide().delay(100).fadeIn("slow").css("font-size", "50px");

				//seleção do filho da div1
				$(".div1 > span").hide().delay(1500).fadeIn("slow").css("color", "red");

				//seleciona o primeiro elemento depois da classe p1
				$(".p1 + p").css({"font-size":"25px"});

				//seleciona todos os elementos depois da classe p1
				$(".p1 ~ p").delay(1000).css("color", "red");
			});
		</script>
	</head>
	<body>

		<div class="div1">
			<h2>Filho da DIV 1</h2>
			<p>P filho da DIV 1 <span>Filho de P</span> </p>
			<span>Filho da DIV 1</span>
		</div>
		<h2>H2 fora da DIV 1</h2>
		<p class="p1">P1 fora da DIV 1</p>
		<p>P2 fora da DIV 1</p>
		<p>P3 fora da DIV 1</p>

	</body>
</html>