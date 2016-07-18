<?php
    class Product
    {
        private $code;
        private $name;
        private $depart;
        private $price;
        private $warranty;

        function __construct($code, $name, $depart, $price, $warranty)
        {
            $this->code = $code;
            $this->name = $name;
            $this->depart = $depart;
            $this->price = $price;
            $this->warranty = $warranty;
        }

        function getCode()
        {
            return $this->code;
        }

        function setCode($code)
        {
            $this->code = $code;
        }

        function getName()
        {
            return $this->name;
        }

        function setName($name)
        {
            $this->name = $name;
        }

        function getDepart()
        {
            return $this->depart;
        }

        function setDepar($depart)
        {
            $this->depart = $depart;
        }

        function getPrice()
        {
            return $this->price;
        }

        function setPrice($price)
        {
            $this->price = $price;
        }

        function getWarranty()
        {
            return $this->warranty;
        }

        function setWarranty($warranty)
        {
            $this->warranty = $warranty;
        }
        
    }
?>