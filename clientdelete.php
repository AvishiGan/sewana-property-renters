<?php

  include("config.php");
  $id = $_GET["id"];
  $result = mysqli_query($conn, "DELETE FROM reqproperty WHERE id=$id");
  header("location:msgrequest.php");





?>

<?php 

    require_once("config.php");

    if(isset($_GET['Del']))
         {
             $id = $_GET['id'];
             $query = " delete from reqproperty where id = '".$id."'";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 header("location:msgrequest.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:msgrequest.php");
         }
         
?>         