<?php
require "includes/cabecalho.php";
?>
    
    <main>
        <article class="conteudo limitador">
            <h1>Contato</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores similique voluptates, est, libero
            </p>

            <form action="https://formspree.io/f/xeqwvbwd" method="post">

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
                    <label for="nascimento">Data de Nascimento</label>
                    <input type="date" name="nascimento" id="nascimento">
                </div>

                <div>
                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" id="telefone">
                </div>

                <div>
                    <label for="idade">Idade</label>
                    <input type="number" name="idade" id="idade" min="18" max="100">
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
                    <input type="checkbox" name="interesses" id="blog" value = "blog">
                    <label for="blog">Blog</label>

                    <input type="checkbox" name="interesses" id="paciente" value = "marketing">
                    <label for="paciente">Paciente</label>

                    <input type="checkbox" name="interesses" id="profissional" value = "profissional" >
                    <label for="profissional">Profissional da Saúde</label>
                </div>

                <!-- INÍCIO HTML PARA CEP/ENDEREÇO -->
                <div>
                    <label for="cep">CEP:</label>
                    <input type="text" id="cep" name="cep" maxlength="9" required>
                    <button id="localizar-cep">Localizar</button>
                    <b id="status"></b>
                </div>
                <div>
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" size="30">
                </div>
                <div>
                    <label for="bairro">Bairro:</label>
                    <input type="text" id="bairro" name="bairro">
                </div>
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
                        <option>Outros<contato.html /option>
                    </select>
                </div>




                <div>
                    <label for="mensagem">Mensagem</label> <br>
                    <textarea maxlength="100" name="mensagem" id="mensagem" cols="30" rows="10" required></textarea>
                </div>

                <button type="submit">Enviar</button>


            </form>


        </article>

    </main>

    <footer>
        <p>Simplicity é um site fictício desenvolvido educacionalmente <br>
            Senac Penha - 2023</p>
    </footer>

    <!-- Importando Biblioteca J Query -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Importando o plugin jQuery Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/contato.js"></script>


</body>

</html>