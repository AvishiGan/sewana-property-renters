<?php 

session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Client - Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="css/client.css">
</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Welcome! | <span class="badge bg-danger">Client Dashboard</span> </h1>
  <p>The best prpoerty details in Sri lanka</p> 
</div>
<br>
<ul class="nav justify-content-center">
    <li class="nav-item" style="padding-right: 6px;">
      <button  class="btn btn-outline-primary"; onclick="window.location.href='reqpropertydetails.php'";> Request Property Details</button>
    </li>
    <li class="nav-item" style="padding-right: 6px;">
    <button  class="btn btn-outline-primary"; onclick="window.location.href='msgrequest.php'";> Requests</button>
    </li>
    <li class="nav-item" style="padding-right: 6px;">
    <button  class="btn btn-outline-danger"; onclick="window.location.href='logout.php'";> Sign Out</button>
    </li>
    
  </ul>



  <?php 

  require_once ("config.php");
  $query = "SELECT * FROM `property`";
  $result  = mysqli_query($conn,$query);
 
    while($row = mysqli_fetch_array($result)){
    
      ?>
  <div class="w3-third w3-center w3-margin-bottom">
  <div class="container mt-5">
   
      
  <div class="card" style="width:400px" > 
   
    <div class="w3-card-4 w3-margin" >
      <h3 class="card-title"><?php echo  $row['title'];?></h3>
      <h3 class="card-title"><?php echo $row['place'];?></h3>
      <p class="card-text"><?php  echo $row['description']; ?></p>
      <h3 class="card-title"><span class="badge bg-warning"><?php echo $row['price'];?> LKR</span></h3>
      <div>

      <h3 class="card-title">  <?php  echo '<img src="data:image;base64,' .base64_encode($row['images']).'"" alt="image"  style="height: 100px ; width=100px;" ' ?>       </h3>
    </div>


      

    </div>
  </div>
  </div>
    </div>
    </div>
 
 

      <?php 

    }





       ?>
   

    
 
     
 



   




</body>
</html>