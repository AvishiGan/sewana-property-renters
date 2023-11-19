<?php 

session_start();



?>



<?php





  include("config.php");
  $id = $_GET["id"];
  $result = mysqli_query($conn, "DELETE FROM property WHERE PropertyNumber=$id");
  header("location:propertymsgrequest.php");





?>

<?php 

    require_once("config.php");

    if(isset($_GET['Del']))
         {
             $id = $_GET['id'];
             $query = " delete from property where PropertyNumber = '".$id."'";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 header("location:propertymsgrequest.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
         else
         {
             header("location:propertymsgrequest.php");
         }
         
?>         