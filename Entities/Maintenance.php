<?php
    class Maitenance
    {
        private $nameProduct;
        private $latest;
        private $next;

        function __construct($nameProduct, $latest, $next)
        {
            $this->nameProduct = $nameProduct;
            $this->latest = $latest;
            $this->next = $next;
        }

        function getNameProduct()
        {
            return $this->nameProduct;
        }

        function setNameProduct($nameProduct)
        {
            $this->nameProduct = $nameProduct;
        }

        function getLatest()
        {
            return $this->latest;
        }

        function setLatest($latest)
        {
            $this->latest = $latest;
        }

        function getNext()
        {
            return $this->next;
        }

        function setNext($next)
        {
            $this->next = $next;
        }

    }
?>