<?php
    class Person
    {
        private $id;
        private $name;
        private $lastname1;
        private $lastname2;
        private $movil;
        private $telephone;
        private $address;

        function __construct($id, $name, $lastname1, $lastname2, $movil, $telephone, $address)
        {
            $this->id = $id;
            $this->name = $name;
            $this->lastname1 = $lastname1;
            $this->lastname2 = $lastname2;
            $this->movil = $movil;
            $this->telephone = $telephone;
            $this->address = $address;
        }

        function getId()
        {
            return $this->id;
        }

        function setId($id)
        {
            $this->id = $id;
        }

        function getName()
        {
            return $this->name;
        }

        function setName($name)
        {
            $this->name = $name;
        }

        function getLastName1()
        {
            return $this->lastname1;
        }

        function setLastname($lastname1)
        {
            $this->lastname1 = $lastname1;
        }

        function getLastName2()
        {
            return $this->lastname2;
        }

        function setLastName2($lastname2)
        {
            $this->lastname2 = $lastname2;
        }

        function getMovil()
        {
            return $this->movil;
        }

        function setMovil($movil)
        {
            $this->movil = $movil;
        }

        function getTelephone()
        {
            return $this->telephone;
        }

        function setTelephone($telephone)
        {
            $this->telephone = $telephone;
        }

        function getAddress()
        {
            return $this->address;
        }

        function setAddress()
        {
            $this->address = $this->address;
        }

    }
?>