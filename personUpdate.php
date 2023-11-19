<?php 

    require_once("config.php");

  
    if(isset($_POST['update']))
    {
       
        $id = $_GET['id'];
        $name = $_POST['name'];
        $nic = $_POST['nic'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $address = $_POST['address']; 
       

        $query = " update person set name = '".$name."', contact='".$contact."',email='".$email."', nic='".$nic."',address='".$address."'  where ownerId='".$id."'";
        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location:personmsgrequest.php");
        }
        else
        {
            echo ' Something went wrong ';
            header("location:v.php");
        }
    }


?>
