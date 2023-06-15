<?php
require "includes/conecta.php";
require "includes/cabecalho.php";
?>

<?php

if(isset($_POST['enviar'])){
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $informativos = $_POST['informativos'];
    // $interesses = $_POST['interesses'];
    $interesses = implode(" ", $_POST['interesses']);
    
    // echo "<pre>";
    // var_dump($interesses);
    // echo "</pre>";
    // die();

    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    /* $assunto = $_POST['assunto']; */
    $mensagem = $_POST['mensagem'];

    //variáveis pra cada caenderecovariáveis penderecompo
//
//
//

// montar e executar SQL de insert na tabela
    mysqli_query($conexao, "INSERT INTO contato (nome,email,telefone, informativos, interesses, cidade, estado, mensagem) VALUES('$nome','$email', '$telefone', '$informativos', '$interesses', '$cidade', '$estado', '$mensagem')" ) or die (mysqli_error($conexao));

    // redirecionar ou apenas mostrar mensagem
        //echo "Dados Enviados";


}

?>
    
    <div id="container"> 
            <h1>Contato</h1>
            
            <form action="" method="post">

            <!-- https://formspree.io/f/mayzrqwg -->

                <div>
                    <label for="nome">Nome:</label>
                    <input placeholder="Digite o Nome Completo" type="text" name="nome" id="nome" required>
                </div>
                <br>

                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" required>
                </div>
                
                <div>
                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" id="telefone">
                </div>

                
                <div>
                    <p>Deseja receber informativos?</p>
                    <input type="radio" name="informativos" id="sim" value = "sim">
                    <label for="sim">Sim</label>


                    <input type="radio" name="informativos" id="nao" value = "nao">
                    <label for="nao">Não</label>
                </div>

                <div>
                    <p>Informe seus interesses:</p>
                    <input type="checkbox" name="interesses[]" id="blog" value = "blog">
                    <label for="blog">Blog</label>

                    <input type="checkbox" name="interesses[]" id="paciente" value = "marketing">
                    <label for="paciente">Paciente</label>

                    <input type="checkbox" name="interesses[]" id="profissional" value = "profissional" >
                    <label for="profissional">Profissional da Saúde</label>
                </div>

                <!-- INÍCIO HTML PARA CEP/ENDEREÇO -->
                <div>
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="cidade">
                </div>
                <div>
                    <label for="estado">Estado:</label>
                    <input type="text" id="estado" name="estado">
                </div>
                <!-- /FIM HTML PARA CEP/ENDEREÇO -->

                <div>
                    <label for="assunto">Assunto</label>
                    <select name="assunto" id="assunto">
                        <!-- propositalmente deixe uma vazio -->
                        <option value=""></option>
                        <option>Dúvidas</option>
                        <option>Elogios</option>
                        <option>Reclamações</option>
                        <option>Outros</option>
                    </select>
                </div>




                <div>
                    <label for="mensagem">Mensagem</label> <br>
                    <textarea maxlength="100" name="mensagem" id="mensagem" cols="30" rows="10" required></textarea>
                </div>

                <button type="submit" name="enviar">Enviar</button>


            </form>
            </div>

    <?php
require_once "includes/rodape.php";
?>