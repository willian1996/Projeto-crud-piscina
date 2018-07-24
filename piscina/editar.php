<?php
//Conexão
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//Select
if(isset($_GET['id'])){
    $id = mysqli_escape_string($connect, $_GET['id']);
    
    $sql = "select * from parametros where id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
}
?>



<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Editar Parâmetro</h3>
        <form action="php_action/update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
            <div class="input-field col s12">
                <input type="text" name="alcalinidade" id="alcalinidade" value="<?php echo $dados['alcalinidade'] ?>">
                <label for="nome">Alcalinidade</label>
            </div>
             <div class="input-field col s12">
                <input type="text" name="ph" id="ph" value="<?php echo $dados['ph'] ?>">
                <label for="ph">PH</label>
            </div>
             <div class="input-field col s12">
                <input type="text" name="cloro" id="cloro" value="<?php echo $dados['cloro'] ?>">
                <label for="email">Cloro</label>
            </div>
             <div class="input-field col s12">
                <input type="text" name="cor" id="cor" value="<?php echo $dados['cor'] ?>">
                <label for="cor">Cor</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="produtos" id="produtos" value="<?php echo $dados['produtos'] ?>">
                <label for="produtos">Produtos Utilizados</label>
            </div>
            <button type="submit" name="btn-editar" class="btn">Atualizar</button>
            <a href="index.php" type="submit" class="btn green">Lista de Parâmetros</a>
        </form>
    </div>




</div>













<?php
//footer
include_once 'includes/footer.php';

?>


        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        