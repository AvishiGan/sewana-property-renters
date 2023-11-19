<html>
<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

     
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="css/client.css">
</head>

<body>
<div >
  <div class="jumbotron" >
   <center>   
    <h1> Property Details</h1>      
    <p> <h2><span class="badge rounded-pill bg-dark">The best property dealers in Sri-Lanka</span></h2></p>
  </div>
</center>
</div>

    


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

