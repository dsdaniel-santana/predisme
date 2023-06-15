<?php 
require_once "../includes/adm_cabecalho.php";
require_once "../includes/conecta.php";



// montar o sql de select da tabela contato
$sql = "SELECT * FROM contato";

//executar a query com o comando sql
$resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

// criar um grande array para os dados
$listacontatos = [];

// fazer o loop while para pegar cada resultado, transformar  num array assoc
while($contato = mysqli_fetch_assoc($resultado)){
// e colocar cada um dentro do grande array
    array_push($listacontatos,$contato);
}

// fazer um var_dump pra teste no grande array

//var_dump($listacontatos)
?>

<!-- Fazer aparecer no html usando um foreach -->

<?php foreach($listacontatos as $dadosContato){?>
    <table>
        <tr>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        
        
        <tr> 
        <td><?= $dadosContato['nome']?></td>
        <td><?= $dadosContato['email']?></td>
        <td><?= $dadosContato['telefone']?></td>
        <td><?= $dadosContato['data']?></td>
        </tr>
        </table>

         
    
<?php    //echo $dadosContato["nome"];
}
?>


<?php 
require_once "../includes/adm_rodape.php";
?>

