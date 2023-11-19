<?php 

    require_once("config.php");

    if(isset($_POST['update']))
    {
        $id = $_GET['id'];
        $type = $_POST['type'];
        $date = $_POST['date'];
        $area = $_POST['area'];
        $rent= $_POST['max'];

        $query = " UPDATE reqproperty set type = '".$type."', date='".$date."',area='".$area."', max='".$rent."' WHERE id='".$id."'";
        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location:msgrequest.php");
        }
        else
        {
            echo ' Something went wrong ';
            header("location:v.php");
        }
    }


?>
