<?php
  //Makes the URL from search term
  public function make_url($site,$search)
  {
    if(empty($search)){
      return false;
    }else{
      $search = str_replace("","+",htmlentities($search));
    }
    switch ($site) {
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
    return $url;
  }

  //Display the URL with the given method
  public function display_url($url,$type)
  {
    $url = htmlentities($url);
    if ($type ==="site") {
      $display = "The URL to your search is: <a href='{$url}' target='_BLANK'>{$url}</a>";
    }elseif ($type ==="offsite") {
      return $url;
    }elseif ($type === "insite") {
      $display ="<iframe src='{$url}'' width='100%' height='100%'>
      <p>Your browser does not support iframes.</p>
      </iframe>";
    }else {
      return false;
    }
    return $display;
  }
?>
