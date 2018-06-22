<?php

//Makes the URL from search term
public function make_url($site,$search)
{
  if(empty($search)){
    return false;
  }else{
    $search = str_replace("","+",htmlentities($search));
  }
  switch (variable) {
    case 'google':
      $url ="https://www.google.com/search?q={$search}";
      break;
    case 'google_image':
      $url ="https://www.google.com/images?q={$search}";
      break;
    case 'bing':
      $url ="https://www.bing.com/search?q={$search}";
      break;
    case 'bing_image':
      $url ="https://www.bing.com/images?q={$search}";
      break;
    case 'yahoo':
      $url ="https://ca.search.yahoo.com/web?q={$search}";
      break;
    case 'yahoo_image':
      $url ="https://ca.images.search.yahoo.com/images?q={$search}";
      break;
    default:
      return false
      break;
  }
}

public function display_url($url,$type)
{
  // code...
}

 ?>
