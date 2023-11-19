<?php 

include 'config.php';

error_reporting(0);

session_start();


if (isset($_POST['submit'])) {
	  $email = $_POST['email'];
	  $password = ($_POST['password']);
    $name = $_POST['name'];
    $companyID = $_POST['companyID'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];

//considers the id number of the person auto incremented
$sql = "INSERT INTO company(email,password,name,companyID,address,contact) VALUES ('$email','$password','$name','$companyID','$address','$contact')";
$result = mysqli_query($conn, $sql);

if($result){
    echo "<script>alert('Wow! User Registration Completed.')</script>";
    header("Location: index.php");
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
    <script type="text/javascript" src="js/onsubmit.js"> </script>
</head>
<body>
    <div class="regform">
        <h1>Company Registration Form</h1>
    </div>
    <div class="main">
      <form method="POST" onsubmit="return checkform()">

          
           <h2 class="name">Company User Name(email)</h2>
           <input class="propertyrentel" id="uname" type="email" name="email" value="<?php echo $email; ?>">

            <h2 class="name">Password </h2>
           <input class="propertyrentel" id="password" type="password" name="password" value="<?php echo $password; ?>">
          
                
           <h2 class="name">Company Name </h2>
           <input class="propertyrentel" type="text" name="name" value="<?php echo $name; ?>">
                   
           
           <h2 class="name">Company ID</h2>
           <input class="propertyrentel" type="text" name="companyID" value="<?php echo $companyID; ?>">
     
          <h2 class="name">Address</h2>
          <input class="address" type="text" name="address" value="<?php echo $address; ?>">
    
    
          <h2 class="name">Contact Number</h2>
          <input class="address" type="text" name="contact" value="<?php echo $contact; ?>">

    
    
            <button type="submit" name="submit">Register Owner</button>
    
    
        </form>
</div>
</body>
</html>