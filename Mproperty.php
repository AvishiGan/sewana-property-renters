<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$noofrooms = $_POST['noofrooms'];
	$propertyrentel = ($_POST['propertyrentel']);
    $address= $_POST['address'];
    $type = $_POST['type'];
   
//considers the id number of the person auto incremented
$sql = "INSERT INTO property(NoOfRooms,PropertyRentel,Address,Type) VALUES ('$noofrooms','$propertyrentel','$address','$type')";
$result = mysqli_query($conn, $sql);

if($result){
    echo "<script>alert('Wow! User Registration Completed.')</script>";
    header("Location: propertymsgrequest.php");
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
        <h1>Property Register Form</h1>
    </div>
    <div class="main">
      <form method="POST">

     
          <h2 class="name">No Of Rooms</h2>
          <input class="address" type="text" name="noofrooms" value="<?php echo $noofrooms; ?>">
    
           <h2 class="name">Property Rentel</h2>
           <input class="address" type="text" name="propertyrentel" value="<?php echo $propertyrentel; ?>">
     
          <h2 class="name">Address</h2>
          <input class="address" type="text" name="address" value="<?php echo $address; ?>">

          <h2 class="name">Type</h2>

          <select class="option" name="type" value="<?php echo $gender; ?>">
                <option disabled="disabled" selected="selected">--Choose option--</option>
                <option>Flat</option>
                <option>Annex</option>
                <option>Bungalow</option>
                <option>Commercial</option>
          </select>
                       
   
            <button type="submit" name="submit">Register Property</button>
    





     
            
        </form>
</div>
</body>
</html>

       








