
<?php
//ARQUIVO QUE FAZ A CONEXÃO ATÉ O BANCO DE DADOS


$servidor="localhost";
$usuario="root";
$senha="";
$banco="chilipeppers";

$conexao=mysqli_connect($servidor, $usuario, $senha, $banco);// VARIAVEL RECEBE A CONEXÃO COM O BANCO

if(!$conexao){//SE OCORRER UM ERRO NA CONEXÃO
    die("Houve um erro: ".mysqli_connect_error());

}

?>