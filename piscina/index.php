<?php
//Conexão
include_once 'php_action/db_connect.php';
//Header
include_once 'includes/header.php';
//Message
include_once 'includes/message.php';
?>




<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Piscina Brisa Hotel</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Data:</th>
                    <th>Alcalinidade:</th>
                    <th>PH:</th>
                    <th>Cloro:</th>
                    <th>Cor:</th>
                    <th>Produtos Utilizados:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from parametros";
                $resultado = mysqli_query($connect, $sql);
                
                if(mysqli_num_rows($resultado) > 0){
                    
                
                while($dados = mysqli_fetch_array($resultado)){
                    
                ?>
                <tr>
                    <td><?php echo date('d/m/Y H:i',strtotime($dados['data'])); ?></td>
                    <td><?php echo $dados['alcalinidade']; ?></td>
                    <td><?php echo $dados['ph']; ?></td>
                    <td><?php echo $dados['cloro']; ?></td>
                    <td><?php echo $dados['cor']; ?></td>
                    <td><?php echo $dados['produtos']; ?></td>
                    <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                    
                    <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons" >delete</i></a></td>
                    
                    <!-- Modal Structure -->
                      <div id="modal<?php echo $dados['id']; ?>" class="modal">
                        <div class="modal-content">
                          <h4>Opa!</h4>
                          <p>tem certeza que deseja excluir esse parâmetros?</p>
                        </div>
                        <div class="modal-footer">
        
                            <form action="php_action/delete.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                                
                                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                        
                            </form>
                        </div>
                      </div>
                    
                </tr>
                <?php 
                }
                    }
                else{ ?>
                    
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                
                <?php
                    
                }
                
                ?>
            </tbody>
        </table>
        <br/>
        <a href="adicionar.php" class="btn">Adicionar Parâmetro</a>
    </div>




</div>


<?php
//footer
include_once 'includes/footer.php';

?>


        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        