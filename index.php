<?php
  include("core/init.php");
  $errors = array();
  if (isset($_POST['site'],$_POST['search'],$_POST['type'])) {
    $url = make_url($_POST['site'],$_POST['search']);
    if ($url===false) {
      $errors[] ="Please enter a valid search term.";
    }else {
      $display = display_url($url,$_POST['type']);
      if ($display === false) {
          $errors[] = "We could not create the URL display.";
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title>Manasoft404 | Multi Search Engines</title>
 </head>
 <body>
   <?php
      if (empty($errors)=== false) {
        ?>
        <ul>
          <li>
            <?php
            echo implode("</li><li>",$errors);
             ?>
          </li>
        </ul>
        <?php
      }else {
        if (isset($url,$display)) {
            if ($url === $display) {
              header("Location: {$display}");
              exit;
            }else {
              echo "<div><p>{$display}</p></div>";
            }
        }
      }
     ?>

   <form class="" action="" method="post">
     <label for="search">Search For :</label> <input type="text" name="search" value="<?php if (isset($_POST['search'])) {echo $_POST['search'];} ?>"/><br/>
     <label for="site">Search on:</label>
        <select class="site" name="site">
          <option value="google">Google</option>
          <option value="google_image">Google Images</option>
          <option value="bing">Bing</option>
          <option value="bing_image">Bing Images</option>
          <option value="yahoo">Yahoo</option>
          <option value="yahoo_image">Yahoo Images</option>
        </select><br />
      <label for="type">Display Results</label>
          <select class="type" name="type">
            <option value="site">In a new window</option>
            <option value="offsite">On their site (current tab)</option>
            <option value="insite">On This site</option>
          </select>
   </form>

 </body>
</html>
