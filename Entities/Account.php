<?php

    class Account
    {
        private $id;
        private $email;
        private $password;

        function __construct($id, $email, $password)
        {
            $this->id = $id;
            $this->email = $email;
            $this->password = $password;
        }

        function getId()
        {
            return $this->id;
        }

        function setId($id)
        {
            $this->id = $id;
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