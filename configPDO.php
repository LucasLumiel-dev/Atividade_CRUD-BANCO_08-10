<?php 
    try {
       
        $pdo = new PDO("mysql:dbname=coismercadinho_shibata;host=localhost:3306", "root", "cimatec");
    } catch (exception $e) {
       
        echo "Erro ao conectar ao banco" . $e->getmesage()
    }
    if ($pdo) {
        echo "Deu certo"
    }
?>