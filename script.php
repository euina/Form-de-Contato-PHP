<?php
if(isset($_POST['email']) && !empty($_POST['email'])){ 

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to= "jhany.yeah@gmail.com";
$subject= "Contato - Projeto Php";
$body="Nome: ".$nome. "\n". 
      "Email: ".$email. "\r\n".
      "Mensagem: ".$mensagem;
$header = "From:euinaoficial@gmail.com"."\r\n"
          ."Reply-to: ".$email. "\e\n"
          ."X=Mailer:PHP/".phpversion();
if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso");
}else{
    echo("Email não pode ser enviado!");
}                

}

?>