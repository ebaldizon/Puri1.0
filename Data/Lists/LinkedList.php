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

/********************************/
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

    /*****************************  without variable $found
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

    public function remove_obj($obj)
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

    public function viewAllContent()
    {
      $runner = $this->head;

      while($runner != NULL)
      {
        echo $runner->getData();
        $runner = $runner->getNext();
      }
    }
  }

?>
