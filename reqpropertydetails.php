
<?php 

include 'config.php';

error_reporting(0);

session_start();


if (isset($_POST['submit'])) {
	$date = $_POST['date'];
	$area = ($_POST['area']);
    $maximumrent = $_POST['max'];
    $type = $_POST['type'];
   

//considers the id number of the person auto incremented
$sql = "INSERT INTO reqproperty(date,area,max,type) VALUES ('$date','$area','$maximumrent','$type')";
$result = mysqli_query($conn, $sql);

if($result){
    echo "<script>alert('Wow! User Registration Completed.')</script>";
    header("Location: msgrequest.php");  
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
        <h1>Property Requesting Form</h1>
    </div>
    <div class="main">
      <form method="POST"  >

     
          <h2 class="name">Date</h2>
          <input class="propertyrentel" type="date" name="date" value="<?php echo $date; ?>">
    
           <h2 class="name">Area</h2>
           <input class="propertyrentel" type="text" name="area" value="<?php echo $area; ?>">
     
          <h2 class="name">Maximum Rent</h2>
          <input class="address" type="text" name="max" value="<?php echo $maximumrent; ?>">
          
          <h2 class="name">Type</h2>
          <select class="option" name="type" value="<?php echo $type; ?>">
                <option disabled="disabled" selected="selected">--Choose option--</option>
                <option>Flat</option>
                <option>Annex</option>
                <option>Bungalow</option>
                <option>Commercial</option>
          </select>
            <button type="submit" name="submit">Submit</button>
            
            
        </form>
</div>
</body>
</html>




