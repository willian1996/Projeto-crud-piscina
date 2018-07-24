<?php
//sessão
session_start();
//conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])){
    $alcalinidade = mysqli_escape_string($connect, $_POST['alcalinidade']);
    $ph = mysqli_escape_string($connect, $_POST['ph']);
    $cloro = mysqli_escape_string($connect, $_POST['cloro']);
    $cor = mysqli_escape_string($connect, $_POST['cor']);
    $produtos = mysqli_escape_string($connect, $_POST['produtos']);
    $id = mysqli_escape_string($connect, $_POST['id']);
    
    $sql = "update parametros set alcalinidade = '$alcalinidade', ph = '$ph', cloro = '$cloro', cor = '$cor', produtos = '$produtos' where id = '$id'";
    
    if(mysqli_query($connect, $sql)){
        $_SESSION['mensagem'] = "Atualizado com sucesso";
        header('Location: ../index.php?');
    }
    else{
        $_SESSION['mensagem'] = "Erro ao Atualizar";
        header('Location: ../index.php?');
    }
}