<?php

require __DIR__ . "/lib_ext/autoload.php";


$novoemail = new Notification\Email;
//$novoemail->sendMail("Assunto de Teste" , "<p> Este e email de teste </p>" , "contato@bembomdelivery.com.br" , "mbleusou@gmail.com" , "Marcionho");

$novoemail->sendMail("Assunto de Teste", "<p> Este e email de teste </p>", "contato@bembomdelivery.com.br", "mbleusou@gmail.com", "contato@bembomdelivery.com.br", "disbiriflix");

var_dump($novoemail);







