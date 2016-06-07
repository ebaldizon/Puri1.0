<?php
  include 'Node.php';
  class LinkedList
  {
    private $head;
    private $tail;
    private $longest = 0;

    public function __construct()
    {
    }

    public function getHead()
    {
      return $this->head;
    }

    public function getTail()
    {
      return $this->tail;
    }

    public function add_obj($obj)
    {
      $newNode = new Node($obj);

      if($this->head == NULL)
      {
        $this->head = $newNode;
        $this->longest++;
      }
      else
      {
        if($this->tail== NULL)
        {
          $this->head->setNext($newNode);
          $this->tail = $newNode;
          $this->longest++;
        }
        else
        {
          $this->tail->setNext($newNode);
          $this->tail = $newNode;
          $this->longest++;
        }
      }
    }

    /*Busca y retorna el nodo del objeto buscado*/
    public function find_obj_1($obj)
    {
      $wanted = new Node($obj);
      $runner = $this->head;
      $found = false;

      for($i=0;$i<=$this->longest;$i++){
        if($runner->getData() == $wanted->getData())
        {
          return $runner;
        }
        else
        {
          $runner = $runner->getNext();
        }
      }
      return false;
    }

    /*Busca y retornar el nodo siguiente del objeto buscado*/
    public function find_obj_2($obj)
    {
      $wanted = new Node($obj);
      $runner = $this->head;
      $found = false;

      for($i=0;$i<=$this->longest;$i++)
      if($runner->getNext()->getData() == $wanted->getData())
      {
        return $runner;
      }
      else
      {
        $runner = $runner->getNext();
      }
      return false;
    }

    public function mod_obj_1($obj1, $obj2)
    {
      if($this->longest != 0)
      {
          $wanted = $this->find_obj_1($obj1);

        if($wanted != false)
        {
          $wanted->setData($obj2);
          return true;
        }
        else
        {
            return false;
        }
      }
      else
      {
        return false;
      }
    }

    public function remove_obj_1($obj)
    {
      if($this->longest != 0)
      {
        $wanted = new Node($obj);

        if($this->longest == 1 && $this->head->getData() == $wanted->getData())
        {
          $this->head == NULL;
          return true;
        }
        else if ($this->longest > 1 && $this->head->getData() == $wanted->getData())
        {
          $this->head = $this->head->getNext();
          return true;
        }
        else
        {
          $before = $this->find_obj_2($obj);
          if($before->getNext()->getData() == $this->tail->getData())
          {
            $before->setNext(NULL);
            $this->tail = $before;
          }
          else
          {
            $before = $before->setNext($before->getNext()->getNext());
          }
          return true;
        }
      }
      else
      {
        return false;
      }
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
