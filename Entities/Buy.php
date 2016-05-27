<?php

  class Buy
  {
    private id;
    private date;
    private name;
    private cart;
    private subTotal;
    private tax;
    private total;

    function _construct($id, $date, $nombre, $cart)
    {
      $this->id = $id;
      $this->date = $date;
      $this->nombre = $nombre;
      $this->cart = $cart;
      $this->subTotal = 0;
      $this->total = 0;
    }

    function checkCart()
    {
      //Se facturan los productos;
    }

    function processTax()
    {
      $this->tax = $this->subtotal * 0.13;
    }

    function applyTaxTotal()
    {
      $this->total = $this->subTotal + $this->tax;
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

    function getCart()
    {
      return $this->cart;
    }

    function setCart($cart)
    {
      $this->cart = $cart;
    }

    function getSubTotal()
    {
      return $this->subTotal;
    }

    function setSubTotal($subTotal)
    {
      $this->subTotal = $subTotal;
    }

    function getTotal()
    {
      return $this->total = $total;
    }

    function setTotal($total)
    {
      $this->total = $total;
    }


  }
 ?>
