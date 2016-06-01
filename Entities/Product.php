<?php
  class Product
  {
    private $code;
    private $name;
    private $departament;
    private $cost;

    public function __construct($code, $name, $departament, $cost)
    {
      $this->code = $code;
      $this->name = $name;
      $this->cost = $cost;
    }

    public function getCode()
    {
      return $this->code;
    }

    public function setCode($code)
    {
      $this->code = $code;
    }

    public function getName()
    {
      return $this->code;
    }

    public function setName($name)
    {
      $this->name = $name;
    }

    public function getCost()
    {
      return $this->cost;
    }

    public function setCost($cost)
    {
      $this->cost = $cost;
    }

  }
?>
