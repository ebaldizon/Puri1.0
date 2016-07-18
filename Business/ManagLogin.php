<?php
    include '../Data/UserData.php';
    include '../Entities/Account.php';

    $email = $_POST['loginEmail'];
    $password = $_POST['loginPassword'];

    if(empty($email) and empty($password))
    {
        echo "Faltaron campos por rellenar";
    }
    else
    {
        $account = new Account($email, $password);
        $data = new UserData();

        if($data->searchAccount($account))
        {
            echo "encontrado";
        }

    }
?>