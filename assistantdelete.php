<?php

  include("config.php");
  $id = $_GET["id"];
  $result = mysqli_query($conn, "DELETE FROM assistant WHERE id=$id");
  header("location:assistantmsgrequest.php");





?>

<?php 

    require_once("config.php");

    if(isset($_GET['Del']))
         {
             $id = $_GET['id'];
             $query = " delete from assistant where id = '".$id."'";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 header("location:assistantmsgrequest.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:assistantmsgrequest.php");
         }
         
?>         