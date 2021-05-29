<?php

require __DIR__ . "/../lib_ext/autoload.php";


$novoemail = new Notification\Email("2", "mail.bembomdelivery.com.br", "contato@bembomdelivery.com.br", "dflix7778", "tls", "587", "contato@bembomdelivery.com.br", "Equipe Dflix");

$novoemail->sendMail("Assunto de Teste", "<p> Este e email de teste </p>", "contato@bembomdelivery.com.br", "mbleusou@gmail.com", "contato@bembomdelivery.com.br", "disbiriflix");

var_dump($novoemail);

