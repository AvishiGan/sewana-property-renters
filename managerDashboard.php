<?php 

session_start();



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Manager - dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Welcome! | <span class="badge bg-danger">Manager Dashboard</span> </h1>
  <p>The best prpoerty dealers in Sri lanka</p> 
</div>
<br>
<ul class="nav justify-content-center">

    <li class="nav-item" style="padding-right: 6px;">
      <button  class="btn btn-outline-primary"; data-bs-toggle="modal" data-bs-target="#myModal"> Add Property</button>
    </li>

    <li class="nav-item" style="padding-right: 6px;">
    <button  class="btn btn-outline-primary"; onclick="window.location.href='client.php'";>Add Client</button>
    </li>

    <li class="nav-item" style="padding-right: 6px;">
    <button  class="btn btn-outline-primary"; onclick="window.location.href='supervisor.php'";>Add Supervisor</button>
    </li>

    <li class="nav-item" style="padding-right: 6px;">
    <button  class="btn btn-outline-primary"; onclick="window.location.href='assistant.php'";>Add Assistant</button>
    </li>

    <li class="nav-item" style="padding-right: 6px;">
    <button  class="btn btn-outline-danger"; onclick="window.location.href='logout.php'";> Sign Out</button>
    </li>
    
  </ul>
        <!-- The Modal -->
<div class="modal" id="myModal">

  <div class="modal-dialog">
    <div class="modal-content">


      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Property details</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

        
      <form   method="POST"  enctype="multipart/form-data" >
    
       <input type="text" name="title"  class="form-control"  placeholder="property title"/><br><br>
       <input type="text" name="place" class="form-control" placeholder="location" /><br><br>
       <input type="text" name="description" class="form-control" placeholder="description" /><br><br>
       <input type="text" name="price"  class="form-control" placeholder="price in RS"/><br><br>
       <input type="file" name="image" class="form-control" /><br><br>
       <button type="submit" name="upload" class="btn btn-primary">Add Property</button>
         
      </form>

      <?php
                   include("config.php");
                
                   if(isset($_POST['upload'])){

                       $title = $_POST['title'];
                       $place = $_POST['place'];
                       $description = $_POST['description'];
                       $price = $_POST['price'];
                       $file = addslashes(file_get_contents($_FILES['image']['tmp_name']));

                       $query = "INSERT INTO `property`(`title`,`place`,`description`,`price`,`images`) VALUES ('$title',' $place','$description','$price','$file')";
                       $query_run = mysqli_query($conn,$query);

                       if($query_run){

                           echo '<script type="text/javascript">alert("Image profile uploaded") </script>';

                       } 
                        else{
                        
                        echo '<script type="text/javascript">alert("Image profile not uploaded") </script>';

                       }

                   }
?>

       

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>




</body>
</html>