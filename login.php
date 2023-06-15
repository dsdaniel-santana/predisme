<?php
require "includes/cabecalho.php";
require_once "includes/funcoes_sessao.php";
require_once "includes/funcoes-usuarios.php";
?>




<div id="container">
<div class="bg-white rounded shadow col-12 my-1 py-4">
		<h2 class="text-center fw-light">Acesso à área administrativa</h2>

		<form action="" method="post" id="form-login" name="form-login" class="mx-auto w-50" autocomplete="off">
			<?php if (isset($mensagem)) { ?>
			<p class="my-2 alert alert-warning text-center">
				<?=$mensagem?>
			</p>
			<?php } ?>

			<div class="mb-3">
				<label for="email" class="form-label">E-mail:</label>
				<input class="form-control" type="email" id="email" name="email">
			</div>
			<div class="mb-3">
				<label for="senha" class="form-label">Senha:</label>
				<input class="form-control" type="password" id="senha" name="senha">
			</div>

			<button class="btn btn-primary btn-lg" name="entrar" type="submit">Entrar</button>

		</form>

		<?php
		if (isset($_POST["entrar"])) {
			/* Verificando se os campos estão vazios 
				Se estiverem (um ou ambos), o usuário continuará aqui na página login */
			if (empty($_POST["email"]) || empty($_POST["senha"])) {
				header("location:login.php?campos_obrigatorios");
				exit; //ou die

			}// fim do if validação

			//capturar o e-mail e senha digitados
			$email = $_POST['email'];
			$senha = $_POST['senha'];

			/* Buscando no banco de dados um usuário de acordo com o e-mail informado */

			$dadosUsuario = buscaUsuario($conexao, $email);

			/* VERIFICAÇÃO DE USUÁRIOS */
			if($dadosUsuario != null && password_verify($senha, $dadosUsuario['senha'])){
				
				/* Estando tudo ok com usuário e senha então inicia o processo de login criando variáveis de sessão com id, nome e tipo do usuário */
				login (
					$dadosUsuario['id'],
					$dadosUsuario['nome'],
					$dadosUsuario['tipo']
				);

				/* Redireciona o usuário logado para a área administrativa */
				header("location:admin/blog.php");
				exit; //pare qualquer outro script
			} else {
				//echo "NÃO Pode Entrar";

				//caso contrário, fique no login e avise o usuário
				header("location:login.php?dados_incorretos");
				exit;
			}




		} //fim do if isset entrar

		?>




</div>
<?php
require_once "includes/rodape.php";
?>