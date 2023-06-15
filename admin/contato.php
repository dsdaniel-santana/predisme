<?php 
require_once "../includes/funcoes_contato.php";
require_once "../includes/adm_cabecalho.php";

$email = lerDetalhes($conexao, $email);
?>

<div class="row">
<article class="col-12 bg-white rounded shadow my-1 py-4">
<h2 class="text-center">
			Notícias <span class="badge bg-dark"><?=count($email) ?></span>
		</h2>


</article>
</div>

<?php 
require_once "../includes/adm_rodape.php";
?>