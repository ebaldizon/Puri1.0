<?php
  include 'Node.php';
  class LinkedList
  {
    private $head;
    private $tail;
    private $longest;

    public function __construct()
    {
      $longest = 0;
    }

    public function add_obj($obj)
    {

      $newNode = new Node($obj);

      if($this->head == NULL)
      {
        $this->head = $newNode;
        $longest++;
      }
      else
      {
        if($this->tail== NULL)
        {
          $this->head->setNext($newNode);
          $this->tail = $newNode;
          $longest++;
        }
        else
        {
          $this->tail->setNext($newNode);
          $this->tail = $newNode;
          $longest++;
        }
      }
    }

    public function find_obj_1($obj)
    {
      $wanted = new Node();
      $wanted->setData($obj);
      $runner = $this->head;
      $found = false;

      for($i=0;$i<=$longest;$i++)
      if($runner->getData() == $wanted->getData())
      {
        return $runner;
      }
      return false;
    }

    public function find_obj_2($obj)
    {
      $wanted = new Node();
      $wanted->setData($obj);
      $runner = $this->head;
      $found = false;

      for($i=0;$i<=$longest;$i++)
      if($runner->getNext()->getData() == $wanted->getData())
      {
        return $runner;
      }
      return false;
    }

    public function remove_obj_1($obj)
    {
      $wanted = new Node();
      $wanted->setData($obj);
      $runner = $this->head;
      $found = false;

      while($found != true)
      {
        if($runner->getNext()->getData() == $wanted->getData())
        {
          $bodyRest = $runner->getNext()->getNext();
          $runner->setNext($bodyRest);
          $this->longest--;
          return $found = true;
        }
        else
        {
          echo $runner->getData();
          $runner = $runner->getNext();
        }
      }
      return false;
    }

    public function remove_obj_2($obj)
    {
      $beforeNode = find_obj_2($obj);
      if($beforeNode != false)
      {
        $beforeNode->setNext($beforeNode->getNext()->getNex());
        return true;
      }
      return false;
    }


    public function viewAllContent()
    {
      $runner = $this->head;

      while($runner != NULL)
      {
        echo $runner->getData();
        $runner = $runner->getNext();
      }
    }

    //End class
  }

  //Gosths of the past

  /*without variable $found
  public function remove_obj_1($obj)
  {
    $wanted = new Node();
    $wanted->setData($obj);
    $runner = $this->head;

    while($runner->getData() != $wanted->getData())
    {
      if($runner->getNext()->getData() == $wanted->getData())
      {
        $bodyRest = $runner->getNext()->getNext();
        $runner->setNext($bodyRest);
        $this->longest--;
      }
      else
      {
        echo $runner->getData();
        $runner = $runner->getNext();
      }
    }
  }
  *************************************/
?>
