<?php
//Header
include_once 'includes/header.php';
?>



<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Parâmetro</h3>
        <form action="php_action/create.php" method="post">
            <div class="input-field col s12">
                <input type="text" name="alcalinidade" id="alcalinidade" required autocomplete="off">
                <label for="alcalinidade">Alcalinidade</label>
            </div>
             <div class="input-field col s12">
                <input type="text" name="ph" id="ph" required autocomplete="off">
                <label for="ph">PH</label>
            </div>
             <div class="input-field col s12">
                <input type="text" name="cloro" id="cloro" required autocomplete="off">
                <label for="cloro">Cloro</label>
            </div>
             <div class="input-field col s12">
                <input type="text" name="cor" id="cor" required autocomplete="off">
                <label for="cor">Cor</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="produtos" id="produtos" autocomplete="off">
                <label for="produtos">Produtos Utilizados</label>
            </div>
            <button type="submit" name="btn-cadastrar" class="btn">Candastrar</button>
            <a href="index.php" type="submit" class="btn green">Lista de Parâmetros</a>
        </form>
    </div>




</div>













<?php
//footer
include_once 'includes/footer.php';

?>


        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        