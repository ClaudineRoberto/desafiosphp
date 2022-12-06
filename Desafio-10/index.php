<?php

$arquivo = fopen("contatos.txt", "w");

for ($i=0; $i < count($data); $i++) { 
    fwrite($arquivo, $data[$i]["name"] . "\t");
    fwrite($arquivo, $data[$i]["email"] . "\t");
    fwrite($arquivo, $data[$i]["country"] . "\n");
}

fclose($arquivo)
?>