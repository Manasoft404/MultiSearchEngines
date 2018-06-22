<?php

//Makes the URL from search term
public function make_url($site,$search)
{
  if(empty($search)){
    return false;
  }else{
    $search = str_replace("","+",htmlentities($search));
  }
  $search = htmlentities($search);
}

public function display_url($url,$type)
{
  // code...
}

 ?>
