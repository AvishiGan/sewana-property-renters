<?php

  include("config.php");
  $id = $_GET["id"];
  $result = mysqli_query($conn, "DELETE FROM client WHERE id=$id");
  header("location:Cclientmsgrequest.php");





?>

<?php 

    require_once("config.php");

    if(isset($_GET['Del']))
         {
             $id = $_GET['id'];
             $query = " delete from client where id = '".$id."'";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 header("location:Cclientmsgrequest.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:Cclientmsgrequest.php");
         }
         
?>         