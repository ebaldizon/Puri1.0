<?php

    class Account
    {
        private $email;
        private $password;

        function __construct($email, $password)
        {
            $this->email = $email;
            $this->password = $password;
        }

        function getEmail()
        {
            return $this->email;
        }

        function setEmail($email)
        {
            $this->email = $email;
        }

        function getPassword()
        {
            return $this->password;
        }

        function setPassword($password)
        {
            $this->password = $password;
        }
    }

?>