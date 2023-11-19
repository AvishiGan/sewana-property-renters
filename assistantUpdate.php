<?php 

    require_once("config.php");

    if(isset($_POST['update']))
    {
        $UserID = $_GET['id'];
        $Name = $_POST['name'];
        $ContactNo = $_POST['contact'];
        $StartDate = $_POST['start'];
        $DOB = $_POST['dob'];
        $NIC = $_POST['nic'];
        $Salary = $_POST['salary'];
        $Gender = $_POST['gender'];

       

        $query = " update assistant set name = '".$Name."', contact='".$ContactNo."',Startdate='".$StartDate."', dob='".$DOB."',nic='".$NIC."',Salary='".$Salary."',gender='".$Gender."'  where id='".$UserID."'";
        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location:assistantmsgrequest.php");
        }
        else
        {
            echo ' Something went wrong ';
            header("location:v.php");
        }
    }


?>
