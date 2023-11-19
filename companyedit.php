<?php 

    require_once("config.php");
    $id = $_GET['id'];
    $query = " SELECT * from company where ownerId='".$id."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row['ownerId'];
        $name = $row['name'];
        $contact = $row['contact'];
        $email = $row['email'];
        $address = $row['address'];
        $companyId = $row['companyID'];
        
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
   
    <title>Company Message Request | update </title>
</head>
<body class="bg-dark" background="CSS/img/11.jpg">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-success text-white text-center py-3">Company Message Request | update </h3>
                        </div>
                        <div class="card-body">

                            <form action="companyupdate.php?id=<?php echo $id ?>" method="post" >
                           
                                <input type="text" class="form-control mb-2" placeholder=" User Name " name="name" value="<?php echo $name ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User Address " name="address" value="<?php echo $address ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User ContactNo " name="contact" value="<?php echo $contact ?>">
                                <input type="text" class="form-control mb-2" placeholder=" User Company Id " name="companyID" value="<?php echo $companyId ?>">
                                
      

                               
                                <button class="btn btn-primary" name="update">Update</button>
                     
      
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>    