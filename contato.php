<!doctype html>

<html>
	<head>
		<title>Design Inteligente</title>
		<meta charset= "UTF-8">
		<link rel="stylesheet" href="estilo.css">	 
		<link rel="shortcut icon" href="img/favicon.ico" >
		<script type="text/javascript" src="form.js"></script>
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

<div id="central">
			<form action="" method="post" name="power" id="power">
			  <table width="500" border="0" align="center">
				<tr>	<!--Tag de linha de tabela tr = table row. table = tabela, row = linha-->
				  <td class="name">Nome:</td> <!--Tag de dado de tabela td = table data. data = dados -->
				  <td>
				  	<label>
				  		<input  class="campo" name="nome" type="text" id="nome" placeholder="Fulano de Dawkins">
				  	</label>
				  </td>
				</tr>
				<tr>
				  <td class="name">E-mail:</td>
				  <td>
				  	<label>
					    <input class="campo" name="email" type="text" id="email" placeholder="FulanoDawkins@mail.com">
				    </label>
				  </td>
				</tr>
				<tr>
				  <td class="name">Seu texto:</td>
				  <td>
				  	<label>
					  <textarea class="campus" name="recado" id="recado" placeholder="Dúvidas? Sugestões?"></textarea>
				    </label>
				  </td>
				</tr>
				<tr>
					  <td>&nbsp;</td>
					<td>
					  <label>
						<input name="Send" class="buttom" type="submit" id="Send" value="Enviar">
					  </label>
					</td>
				</tr>
			  </table>
			  <?php
				if (isset($_POST[nome])){
				$nome =   $_POST[nome];
				$email =  $_POST[email];
				$recado = $_POST[recado];
				$assunto = "Contato";
				
					$send = ("maosecerebro@gmail.com"); //Coloque seu E-mail aqui.
					
					$data = date("d/m/y");	   
					$hora = date("H:i:s");
					$ip = $_SERVER[REMOTE_ADDR];
					
					$headers .= "From: $send\r\n"; 
											//para o envio em formato HTML
											$headers = "MIME-Version: 1.0\r\n";
											$headers .= "Content-type: text/html;
											charset=iso-8859-1\r\n";
	 									
											$corpo =("
														 
														<b>De:</b> $_POST[nome]; <br/>
														<b>E-mail:</b> $email<br/>
														<b>Assunto:</b> $assunto<br/>
														<b>Para:</b> $send<br/>
															<hr/><br/>
														<b>Recado:</b> <br/> 
														$recado
														<br/>
															<hr/>
														<br/>
														
														<b>Data:</b> $data <br/>
														<b>Hora:</b> $hora	<br/>
														<b>IP:</b>	$ip			<br/>
														
														");
																		
												mail($send, $assunto, $corpo, $headers); 
										
											echo "<script type=\"text/javascript\"> alert('Obrigado $nome, Seu Recado Foi Enviado Com sucesso!!!') </script>";

					
				} else{
				
				
				}
			  
			  ?>
			</form>
				<br/>
				
 		</div>			<div class = "adsbygoogle" align = "center">
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
		</div> 
	</body>
</html>