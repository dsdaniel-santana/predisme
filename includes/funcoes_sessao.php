<?php
/*  Sessões no PHP
Recurso usado para controle de acesso à determinadas páginas e /ou recursos do site. Exemplo:
área administrativa, área do cliente/aluno. 

Nestas áreas, o acesso só é póssivel mediante alguma forma de autenticação. Exemplo: login/senha. */

//Se NÃO EXISTIR uma sessão em funcionamento
if( !isset($_SESSION)){
    //Então, inicie uma sessão
    session_start();
}

/* Usada en TODAS as páginas admin */
function verificaAcesso(){
    /* SE NÃO EXISTIR uma variável de SESSÃO baseada no id do usuário, significa que ele/ela não esta logado(a) no sistema */
    if ( !isset($_SESSION['id'])){
        session_destroy();

        //Redirecione para o formulário de login
        header("location:../login.php");
        
        //Pare completamente qualquer outra execução
        exit; //ou die()
    }
} // fim verficaAcesso

function login($id, $nome, $tipo){
    /*  Criação de variáveis de SESSÃO */
    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;
    $_SESSION['tipo'] = $tipo;

    /* As variáveis de sessão ficam dispóniveis para utlilização durante toda a duração da sessão, 
    ou seja, enquanto o navegador não for fechado ou o usuário estiver logado. */
}; //fim do login


//usada em todas as páginas admin
function logout (){
    session_start();
    session_destroy();
    header("location:../login.php?logout");
} //fim do logout