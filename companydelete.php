<?php

  include("config.php");
  $id = $_GET["id"];
  $result = mysqli_query($conn, "DELETE FROM company WHERE ownerId=$id");
  header("location:companymsgrequest.php");





?>

<?php 

    require_once("config.php");

    if(isset($_GET['Del']))
         {
             $id = $_GET['id'];
             $query = " delete from company where ownerId = '".$id."'";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 header("location:companymsgrequest.php");
             }
             else
             {
                 echo "Please Check Your Query";
             }
        }
         else
         {
             header("location:companymsgrequest.php");
         }
         
?>         