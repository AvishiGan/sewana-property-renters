<?php 

include 'config.php';

error_reporting(0);

session_start();



if (isset($_POST['submit'])) {
  $username =$_POST ['username'] ;
  $email = $_POST['email'];
  $password = ($_POST['password']);
  $fullname = $_POST['fullname'];
  $nic = $_POST['nic'];
  
   

//considers the id number of the person auto incremented
$sql = "INSERT INTO client(username,email,password,fullname,nic) VALUES ('$username','$email','$password','$fullname','$nic')";
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
        <h1>Client Registration Form</h1>
    </div>
    <div class="main">
      <form method="POST" onsubmit="return checkform()">
            
          <h2 class="name"> username</h2>
           <input class="propertyrentel" id="uname" type="text" name="username" value="<?php echo $username; ?>">
          
           <h2 class="name"> email</h2>
           <input class="propertyrentel" id="uname" type="email" name="email" value="<?php echo $email; ?>">

           <h2 class="name">Password </h2>
           <input class="propertyrentel" id="password" type="password" name="password" value="<?php echo $password; ?>">
     
          <h2 class="name">Full Name</h2>
          <input class="propertyrentel" type="text" name="fullname" value="<?php echo $fullname; ?>">
    
           <h2 class="name">NIC</h2>
           <input class="propertyrentel" type="text" name="nic" value="<?php echo $nic; ?>">
     
         
    
            <button type="submit" name="submit">Add</button>
            
            
        </form>
</div>
</body>
</html>