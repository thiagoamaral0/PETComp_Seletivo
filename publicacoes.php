<?php 
	include("connect.php");

	$consulta ="SELECT titulo, autores, link_publicacao FROM publicacoes";
	$con = $mysqli->query($consulta) or die($mysqli->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicações | PETComp</title>
    <link rel="stylesheet" type="text/css" href="css\publicacoes.CSS">
    <link rel="shortcut icon" href="imagens/índice.png" type="image/x-icon">
</head>
<body>
    <header>
		<!--ICONES LINKAVEIS DO CABEÇALHO-->
		<a href="PetCompIndex.php" target="_self" id="iconePET"><img src="imagens\PETComp_LOGO.png" width="100px"></a>
		<a href="https://portalpadrao.ufma.br/site" target="_blank" id="iconeUFMA"><img src="imagens\UFMA_LOGO.png"></a>
		<!--FIM DOS ICONES LINKAVEIS DO CABEÇALHO-->
		<nav>
			<!--LINKS-->
			<a href="PetCompIndex.php" id="inicio"><strong>Início</strong></a>
			<a href="SobreNos.php" id="conheçaoPETCOMP"><strong>Conheça o PETComp</strong></a>
			<a href="404.php" id="Projetos"><strong>Projetos</strong></a>
			<a href="publicacoes.php" id="Publiçoes"><strong>Publicações</strong></a>
			<a href="404.php" id="Noticias"><strong>Notícias</strong></a>
			<a href="404.php" id="Produtos"><strong>Produtos</strong></a>
			<a href="eventos.php" id="Eventos"><strong>Eventos</strong></a>
			<!--FIM DOS LINKS-->
		</nav>
	</header>

    <main>
        <h1>PUBLICAÇÕES</h1>
        <table>
        	<tr id="titulos">
        		<td>Título</td>
        		<td>Autores</td>
        		<td>Link da Publicação</td>
        	</tr>
        	<?php while($dado = $con->fetch_array()){ ?>
        	<tr id="infos">
        		<td><?php echo $dado['titulo']; ?></td>
        		<td><?php echo $dado['autores']; ?></td>
        		<td><?php echo $dado['link_publicacao']; ?></td>
        	</tr>
        	<?php } ?>
        </table>
        


    </main>
    <footer>
		
		<h1 id="sobre">SOBRE</h1>
		<!--ICONES LINKAVEIS DO RODAPÉ-->
		<a href="PetCompIndex.php" target="_self" id="logobranca"><img src="imagens\PETComp_LOGOBRANCA.png" width="100px"></a>
		<a href="https://portalpadrao.ufma.br/site" target="_blank" id="logoufma"><img src="imagens\UFMA_LOGO.png"></a>
		
		<!--FIM DOS ICONES LINKAVEIS DO RODAPÉ-->
		<!-- CONTATOS INFORMAÇÕES -->
		<h1 id="contatos">CONTATOS</h1>
		<h3>ENDEREÇO:</h3>
		<h3 id="endereco">Av. dos Portugueses, 1966 - Vila Bacanga, São Luís - MA, 65080-805, CCET - Bloco 2 </h3>
		<h3>EMAIL:</h3>
		<h3 id="email">petcomputacao.ufma@gmail.com</h3>
		<h3>INSTAGRAM:</h3>
		<a href="https://www.instagram.com/petcompufma/" target="_blank" id="instagram">@PetCompUfma</a>
		<h3>TWITTER:</h3>
		<a href="https://twitter.com/petcompufma" target="_blank">@PetCompUfma</a>
		
				


	</footer>

   
</body>
</html>