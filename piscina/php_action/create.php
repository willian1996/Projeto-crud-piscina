<?php
//sessão
session_start();
//conexão
require_once 'db_connect.php';

//clear
function clear($input){
    global $connect;
    //sql
    $var = mysqli_escape_string($connect, $input);
    // xss
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['btn-cadastrar'])){
    //$data = "2018-07-07 03:55";
    $alcalinidade = clear($_POST['alcalinidade']);
    $ph = clear($_POST['ph']);
    $cloro = clear($_POST['cloro']);
    $cor = clear($_POST['cor']);
    $produtos = clear($_POST['produtos']);
    
    $sql = "INSERT INTO parametros (data, alcalinidade, ph, cloro, cor, produtos ) values (NOW(), '$alcalinidade', '$ph', '$cloro', '$cor', '$produtos')";
    
    if(mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Cadastrado com sucesso";
        header('Location: ../index.php?');
    }
    else{
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location: ../index.php?');
    }
}