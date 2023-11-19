<?php 

    require_once("config.php");

    session_start();




    if(isset($_POST['update']))
    {
       
        $id = $_GET['id'];
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $address = $_POST['address']; 
        $companyId = $_POST['companyID']; 
        
       

        $query = " update company set name = '".$name."', contact='".$contact."',email='".$email."', address='".$address."',companyID='".$companyId."'  where ownerId='".$id."'";
        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location:companymsgrequest.php");
        }
        else
        {
            echo ' Something went wrong ';
            header("location:v.php");
        }
    }


?>
