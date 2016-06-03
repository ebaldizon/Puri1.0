<?php
  include 'LinkedList.php';
  //include 'Node.php';


  $list = new LinkedList();

  $list->add_obj("Hola");
  $list->add_obj(" mundo,");
  $list->add_obj(" Atom!");
  $list->add_obj(", Bye...");

  $list->viewContent();

?>
