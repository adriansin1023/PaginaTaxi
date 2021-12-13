
<?php
$servername = "localhost";
$username = "id16980624_jesus";
$password = "2y^Pz-S3Vx_Gi0ri";

// Create connection
$conn = new mysqli($servername, $username, $password);
 
  mysql_select_db("id16980624_programa_wep",$conn);
  
  mysql_query("SET NAMES 'utf8'");
  
  //date_default_timezone_set("America/Mexico");
  /*
  function limpiar($tags){
    $tags = strip_tags($tags);
    $tags = stripslashes($tags);
    $tags = htmlentities($tags);
    $tags = mysql_real_escape_string($tags);
    return $tags;
  }
  */
?>