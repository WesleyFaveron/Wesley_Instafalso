<?php
require_once 'lib/bancoDeDados.php';

session_start ();

if (conectar ()) 
{
	$codDono = $_SESSION ["cod"];
	executarSQL ( "select nome, descricao from Foto where cod_canal='$codDono'");
	$arrResultados = recuperarResultados ();
	foreach ( $arrResultados as $linha ) 
	{
	?>
		<img src="images/<?php echo $linha["nome"]; ?>" width="200px" height="100px"><br><?php echo $linha["descricao"]; ?><br><br><br>
	<?php 
	}
}
?>