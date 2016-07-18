<?php
    $email = $_POST['loginEmail'];
    $password = $_POST['loginPassword'];

    if(empty($email) and empty($password))
    {
        echo "Faltaron campos por rellenar";
    }
    else
    {
        
        echo "Bienvenido";
    }
?>