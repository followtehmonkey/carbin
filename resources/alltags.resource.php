<?php
class alltags extends Resource{
 
  function __construct($method, $id, $data){
    $this->entity = "tags";
    $this->id = "id";
    $this->fields['get'] = "id,name";
    $this->fields['post'] = "name";
    
    parent::__construct($method, $id, $data);
  }
 
}

?>
