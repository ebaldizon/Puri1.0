<?php
    class Buy
    {
        private $id;
        private $date;
        private $name;
        private $cart;
        private $subTotal;
        private $tax;
        private $total;

        function __construct($id, $date, $name, $cart, $subTotal, $tax, $total)
        {
            $this->id = $id;
            $this->date = $date;
            $this->name = $name;
            $this->cart = $cart;
            $this->subTotal = $subTotal;
            $this->tax = $tax;
            $this->total = $total;
        }

        function getId()
        {
            return $this->id;
        }

        function setId($id)
        {
            $this->id = $id;
        }

        function getDate()
        {
            return $this->date;
        }

        function setDate($date)
        {
            $this->date = $date;
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
            return $this->subTotal = $subtotal;
        }

        function setSubtotal($subTotal)
        {
            $this->subTotal = $subTotal;
        }

        function getTax()
        {
            return $this->tax;
        }

        function setTax($tax)
        {
            $this->tax = $tax;
        }

        function getTotal()
        {
            return $this->total;
        }

        function setTotal($total)
        {
            $this->total = $total;
        }
    }
?>