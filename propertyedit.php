<?php 

    require_once("config.php");
    $id = $_GET['id'];
    $query = " SELECT * from property where PropertyNumber='".$id."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $PropertyNumber = $row['PropertyNumber'];
        $NoOfRooms = $row['NoOfRooms'];
        $PropertyRentel = $row['PropertyRentel'];
        $Address = $row['Address'];
        $Type = $row['Type'];
       
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
    <title>Property Message Request | update </title>
</head>
<body class="bg-dark" background="CSS/img/11.jpg">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3">Property Message Request | update </h3>
                        </div>
                        <div class="card-body">

                            <form action="propertyUpdate.php?id=<?php echo $id ?>" method="post" >
                           
                                <input type="text" class="form-control mb-2" placeholder="  No of Rooms " name="noofrooms" value="<?php echo $NoOfRooms ?>">
                                <input type="text" class="form-control mb-2" placeholder="  Property Rentel " name="propertyrentel" value="<?php echo $PropertyRentel ?>">
                                <input type="text" class="form-control mb-2" placeholder="  Address " name="address" value="<?php echo $Address ?>">
                                <input type="text" class="form-control mb-2" placeholder="  Type " name="type" value="<?php echo $Type ?>">
                              
      

                               
                                <button class="btn btn-primary" name="update">Update</button>
                     
      
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>    