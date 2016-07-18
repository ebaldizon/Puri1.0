<?php
    class Cart
    {
        private $id;
        private $user;
        private $products;
        private $mount;

        function __construct($id, $user, $products, $mount)
        {
            $this->id = $id;
            $this->user = $user;
            $this->products = $products;
            $this->mount = $mount;
        }

        function getId()
        {
            return $this->id;
        }

        function setId($id)
        {
            $this->id = $id;
        }

        function getUser()
        {
            return $this->user;
        }

        function setUser($user)
        {
            $this->user = $user;
        }

        function getProducts($products)
        {
            return $this->products;
        }

        function getMount()
        {
            return $this->mount;
        }

        function setMount($mount)
        {
            $this->mount = $mount;
        }
        
    }
?>