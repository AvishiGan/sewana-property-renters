<?php 

    require_once("config.php");
    $id = $_GET['id'];
    $query = " SELECT * from reqproperty where id='".$id."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
        $type = $row['type'];
        $date = $row['date'];
        $area = $row['area'];
        $rent = $row['max'];
      
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
   
    <title>Client Message Request | update </title>
</head>
<body class="bg-dark" background="CSS/img/11.jpg">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3">Client Message Request | update </h3>
                        </div>
                        <div class="card-body">

                            <form action="update.php?id=<?php echo $id ?>" method="post" >
                                <input type="text" class="form-control mb-2" placeholder=" type" name="type" value="<?php echo $type ?>">
                                <input type="date" class="form-control mb-2" placeholder=" date " name="date" value="<?php echo $date ?>">
                                <input type="text" class="form-control mb-2" placeholder=" area" name="area" value="<?php echo $area ?>">
                                <input type="text" class="form-control mb-2" placeholder=" rent " name="max" value="<?php echo $rent ?>">
                               
        
      

                               
                                <button class="btn btn-primary" name="update">Update</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>    