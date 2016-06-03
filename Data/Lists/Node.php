<?php
  class Node
  {
    private $data;
    private $next;

    public function __construct($data)
    {
      $this->data = $data;
    }

    public function getData()
    {
      return $this->data;
    }

    public function setData($data)
    {
      $this->data = $data;
    }

    public function getNext()
    {
      return $this->next;
    }

    public function setNext($next)
    {
      $this->next = $next;
    }

  }
?>
