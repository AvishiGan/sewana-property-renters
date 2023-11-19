<?php 

    require_once("config.php");

    if(isset($_POST['update']))
    {
         $ID = $_GET['id'];
        $Name = $_POST['name'];
        $NIC = $_POST['nic'];
        $Email = $_POST['email'];
                   



        $query = " update client set fullname = '".$Name."',nic='".$NIC."',username='".$Email."'  where id='".$ID."'";
        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location:Cclientmsgrequest.php");
        }
        else
        {
            echo ' Something went wrong ';
            header("location:clientDashboard.php");
        }
    }


?>
