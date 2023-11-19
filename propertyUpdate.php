<?php 

session_start();



?>


<?php 

    require_once("config.php");

    if(isset($_POST['update']))
    {
        
        $PropertyNumber = $_GET['id'];
        $NoOfRooms = $_POST['noofrooms'];
        $PropertyRentel = $_POST['propertyrentel'];
        $Address = $_POST['address'];
        $Type = $_POST['type'];

        $query = " update property set  NoOfRooms ='".$NoOfRooms ."',PropertyRentel='".$PropertyRentel."', Address='".$Address."',Type='".$Type."'  where PropertyNumber='".$PropertyNumber."'";
        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location:propertymsgrequest.php");
        }
        else
        {
            echo ' Something went wrong ';
            header("location:v.php");
        }
    }


?>
