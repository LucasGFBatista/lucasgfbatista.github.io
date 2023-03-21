<?php
    $to = "lucasgf.batista+contato@gmail.com"; // destinatário
    
    $subject = "Contato via Portifolio";
    
    $message = $_POST['message']." - ".$_POST['name'];

    $email = $_POST['email']; //remetente


    $header[] = 'MIME-Version: 1.0';
    $header[] = 'Content-type: text/html; charset=iso-8859-1';
    $header[] = "To: $to";
    $header[] = "From: $email";

    $status = mail($to, $subject, $message, implode("\r\n", $header));


    if($status==true){
        print "Mensagem foi enviada com sucesso!";    

    } else {
    print "Mensagemnão pode ser enviada.";
    
    }

?>
