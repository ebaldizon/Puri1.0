<?php
    //include 'ConnectionDB.php';

    class UserData
    {
        function searchAccount(Account $account)
        {
            if(empty($account))
            {
                return false;
            }
            else
            {
                $conection = new ConnectionDB();
                if($conection->connection())
                {
                    $email = $account->getEmail();
                    $pass = $account->getPassword();

                    $query = "select * from account where email like '$email' and pass like '$pass'";
                    $result = $conection->pushQuery($query);

                    while($info = mysqli_fetch_array($result))
                    {
                        echo "</br>
                        <tr>
                            <td width='150'>".$info['idAccount']."</td>
                            <td width='150'>".$info['email']."</td>
                            <td width='150'>".$info['pass']."</td>
                        </tr>
                        ";
                    }
                }
            }
        }
    }
?>