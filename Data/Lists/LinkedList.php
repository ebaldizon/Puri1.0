<?php
  include 'Node.php';
  class LinkedList
  {
    private $head;
    private $tail;

    public function __construct(){}

/********************************/
    public function add_obj($data)
    {

      $newNode = new Node($data);

      if($this->head == NULL)
      {
        $this->head = $newNode;
      }
      else
      {
        if($this->tail== NULL)
        {
          $this->head->setNext($newNode);
          $this->tail = $newNode;
        }
        else
        {
          $this->tail->setNext($newNode);
          $this->tail = $newNode;
        }
      }
    }
  /******************************/
    public function viewContent()
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
