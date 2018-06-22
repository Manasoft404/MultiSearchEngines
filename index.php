<?php
include("core/init.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title>Manasoft404 | Multi Search Engines</title>
 </head>
 <body>
   <?php  ?>
   <form class="" action="#" method="post">
     <label for="search">Search For :</label> <input type="text" name="search" value=""/> <br/>
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
