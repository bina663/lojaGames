<?php
    try {
        require_once('./array.php');
        $id = $_POST['id'];
    
        $emailFrom = '';
        $emailTo = $_POST['email'];
    
        ini_set('display_errors', 1 );
        error_reporting( E_ALL );
        $from = $emailFrom;
        $to = $emailTo;
        $subject = "Compra realizada com sucesso!";
        $message = "Você comprou com sucesso ". $produto[$id]['nome']. "por R$ ". $produto[$id]['preco'];
        $headers = "From:" . $from;
        mail($to,$subject,$message, $headers);
        header('Location:../index.php?status=true');
    } catch (\Throwable $th) {
        header('Location:../index.php?status=false');
    }
?>
