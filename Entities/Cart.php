<?php
  class Cart()
  {
    $private id;
    $private user;
    $private products;
    $private mount;

    public function __construct($id, $user, $products, $mount)
    {
      $this->id = $$id;
      $this->user = $user;
      $this->products = $products;
      $this->mount = $mount;
    }

    public function __construct()
    {
      $this->id = 0
      $this->user = "";
      $this->products = array();
      $this->mount = 0;
    }

    public function addProduct($product)
    {
      array_push($this->products, $product);
    }

    public function removeProduct($product)
    {

    }

    public function getId()
    {
      return $this-id;
    }

    public function setId($id)
    {
      $this->id = $id;
    }

    public function getUser()
    {
      return $this->user;
    }

    public function setUser($user)
    {
      $this->user = $user;
    }

    public function getProducts()
    {
      return $this->products;
    }

    public function setProducts($products)
    {
      $this->products = $products;
    }

    public function getMount()
    {
      return $this->mount;
    }

    public function setMount($mount)
    {
      return $this->mount = $mount;
    }
  }
?>
