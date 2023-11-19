<?php

session_start();


  
  include("config.php");
  $id = $_GET["id"];
  $result = mysqli_query($conn, "DELETE FROM person WHERE ownerId=$id");
  header("location:personmsgrequest.php");





?>

<?php 

    require_once("config.php");

    if(isset($_GET['Del']))
         {
             $id = $_GET['id'];
             $query = " delete from person where ownerId = '".$id."'";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 header("location:personmsgrequest.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:personmsgrequest.php");
         }
         
?>         