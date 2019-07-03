<?php

include_once 'config.php';

$link = mysqli_connect(SERVIDOR, USUARIO, SENHA, NULL, PORTA);
if(!$link) {
    print "Erro";
}
else {
    print "Ok!";
}


