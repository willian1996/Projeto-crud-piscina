<?php
//Sessão 
session_start();
if(isset($_SESSION['mensagem'])){ ?>


    
<script>
    //Mensagem de erro
    window.onload = function(){
        M.toast({html: '<?php echo $_SESSION['mensagem'];?>'})
    };
</script>
<?php
}
session_unset();



?>