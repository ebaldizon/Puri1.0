<?php
  include 'LinkedList.php';
  //include 'Node.php';


  $list = new LinkedList();

  $list->add_obj("Hola");
  $list->add_obj(" mundo,");
  $list->add_obj(" Atom!");
  $list->add_obj(", Bye...");

  $list->viewAllContent();

  echo "<br/>Find.".$list->find_obj_1(" mundo,")->getData();
  echo "<br/>Find.".$list->find_obj_2(" mundo,")->getData();
  echo "<br/>";
  echo "culita".$list->getTail()->getData();
  echo "<br/>";
  echo "<br/>";
  echo $list->remove_obj_1(", Bye...");
  echo "<br/>";
  echo "<br/>";
  //$list->mod_obj_1(" Atom!", "aToMiC?");
  $list->viewAllContent();
?>
