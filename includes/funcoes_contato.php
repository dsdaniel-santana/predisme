<?php
require_once "conecta.php";
/* Funções usadas nas páginas da área pública */

/* usada em index.php */
function lerTodasOscontato($conexao)
{

    $sql = "SELECT id, data, email, telefone, informativos, nome FROM contato ORDER BY data DESC";

    $resultado = mysqli_query($conexao, $sql)
        or die(mysqli_error($conexao));

    $contato = [];

    while ($contato = mysqli_fetch_assoc($resultado)) {

        array_push($contato, $contato);
    }

    return $contato;
} // fim lerTodasAsnoticias

/* Usada em noticia.php */
function lerDetalhes($conexao, $id)
{
    $sql = "SELECT 
    contato.id, 
    contato.data, 
    contato.email, 
    contato.telefone, 
    contato.informativos, 
    usuarios.nome
    FROM contato ";

    $resultado = mysqli_query($conexao, $sql)
        or die(mysqli_error($conexao));

    return mysqli_fetch_assoc($resultado);
} //fim lerDetalhes

/* Usada em resultados.php */
function busca($conexao, $termo)
{
    $sql = "SELECT * FROM contato WHERE 
    titulo LIKE '%$termo%' OR 
    texto LIKE '%$termo%' OR
    RESUMO LIKE '%$termo%' 
    ORDER BY data DESC";

    $resultado = mysqli_query($conexao, $sql)
        or die(mysqli_error($conexao));

    $contato = [];

    while ($contato = mysqli_fetch_assoc($resultado)) {
        array_push($contato, $contato);
    }

    return $contato;
} //fim da busca