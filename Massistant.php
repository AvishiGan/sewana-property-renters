<?php 

include 'config.php';

error_reporting(0);

session_start();



if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = ($_POST['password']);
    $name = $_POST['name'];
    $nic = $_POST['nic'];
    $contact = $_POST['contact'];
    $start = $_POST['start'];
    $dob = $_POST['dob'];
    $salary = $_POST['salary'];
    $gender = $_POST['gender'];

//considers the id number of the person auto incremented
$sql = "INSERT INTO assistant(username,password,name,nic,contact,startdate,dob,salary,gender) VALUES ('$email','$password','$name','$nic','$contact','$start','$dob','$salary','$gender')";
$result = mysqli_query($conn, $sql);

if($result){
    echo "<script>alert('Wow! User Registration Completed.')</script>";
    header("Location: ./assistantmsgrequest.php");
}else{
    echo "<script>alert('oops! Something Went Wrong.')</script>";
} 

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <div class="regform">
        <h1>Assistant Registration Form</h1>
    </div>
    <div class="main">

      <form  method="POST" >


            <h2 class="name"> User Name(email)</h2>
           <input class="propertyrentel" type="email" name="email" value="<?php echo $email; ?>">

           <h2 class="name">Password </h2>
           <input class="propertyrentel" type="password" name="password" value="<?php echo $password; ?>">

           <h2 class="name">Name </h2>
           <input class="propertyrentel" type="text" name="name" value="<?php echo $name; ?>">

           <h2 class="name">NIC</h2>
           <input class="propertynum" type="text" name="nic" value="<?php echo $nic; ?>"><br>
                  
          <h2 class="name">Contact Number</h2>
          <input class="address" type="text" name="contact" value="<?php echo $contact; ?>">
    
          <h2 class="name">start Date</h2>
          <input class="address" type="date" name="start" value="<?php echo $start; ?>">
    
          <h2 class="name">Date of Birth</h2>
          <input class="address" type="date" name="dob" value="<?php echo $dob; ?>">
    
          <h2 class="name">salary</h2>
          <input class="address" type="text" name="salary" value="<?php echo $salary; ?>">
        
          <h2 class="name">Gender</h2>

           <select class="option" name="gender"  value="<?php echo $gender; ?>" >
                <option disabled="disabled" selected="selected">--Choose option--</option> 
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
           </select>
           
   
          

            <button type="submit" name="submit">Register Assistant</button>
    
    
        </form>
</div>
</body>
</html>