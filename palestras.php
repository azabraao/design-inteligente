<!doctype html>
<?php

	$videos = array("https://www.youtube.com/embed/OF4yQ4oOb-c?list=PL-B0XbHqi00sALD9z8G2XFGaEWM3RYl7t",
					"https://www.youtube.com/embed/Ewzr3u2UjNE",
					"https://www.youtube.com/embed/nWUM9BMtEC8?list=PLrKyVK1crMRCX1fltNEsDoI1pgL2Cn7HS",
					"https://www.youtube.com/embed/PYpTjfrFEgQ?list=PLLv0W8cqkLrmBqS-iC122pP8I2Ypy7A9x",
					"https://www.youtube.com/embed/jJIbcE0kOAs?list=PL7Wwl5TzliiHSlk6Ol7xEGiUxa69fVsk-",
					"https://www.youtube.com/embed/VoI2ms5UHWg",
					"https://www.youtube.com/embed/1CwL7xXUriE",
					"https://www.youtube.com/embed/s6XAXjiyRfM");

?>
<html>
	<head>
		<title>Design Inteligente</title>
		<meta charset= "UTF-8">
		<link rel="stylesheet" href="estilo.css">	 
		<link rel="shortcut icon" href="img/favicon.ico" >
	</head>
					

	<body>

		<div class="conteudo">



			<div class="topo" > 
				<img src="img/topo.png" width="800px" height="155" alt = "Imagem Design Inteligente">
			</div>
				
			<div class="menu"> 

					<a href="index.html">HOME</a>
					<a href="nossosproponentes.php">PROPONENTES</a>
					<a href="artigos.html">ARTIGOS</a>
					<a href="palestras.php">VIDEOS</a>
					<a href="contato.php">CONTATO</a>
			</div>
			<!--Início da div que reúne vídeos os-->
			<div class="palestras">
				<?php
					for($i = 0; $i < sizeof($videos); $i++){
				?>
					<div class="videos"><iframe  width="450px" height="320px" src= <?php echo $videos[$i]?> frameborder="0" allowfullscreen></iframe></div> 			

				<?php
					}
				?>	
			</div>
			<!--Fim da div que reúne os vídeos-->

			<!--Anúncio Google-->
			<div class = "adsbygoogle" align = "center">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" ></script>
					<!-- Anúncio -->

					<ins class="adsbygoogle"
						 align = "center"
					     style="display:inline-block;width:728px;height:90px"
					     data-ad-client="ca-pub-6736437241913917"
					     data-ad-slot="4584341389"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
			</div> 			
			<!--Fim do anúncio Google-->				

		</div>
	</body>
</html> 	