<?php 

session_start();



?>



<html>
<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

     
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<div class="container mt-3" style="width: 800px; margin-top: 100px;">
    <div class="mt-3 p-3 bg-primary text-white rounded">
		<h1 align="center"> Message Requests| <span class="badge bg-secondary">Property Requirements</span></h1>
		<a href="reqpropertydetails.php" class="btn btn-secondary btn-lg">Add Record</a><br><br>

    </div>
    <br>
    <br>
		<div class="row">
        <table id="example" class="table table-dark table-hover " style="width:100%">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Date</th>
                <th>Area</th>
                <th>Rent</th>
                <th>Edit</th>
                <th>Delete</th>
                
            </tr>
        </thead>
        <tbody>
        	<?php
        	      include("config.php");
                  $query ="SELECT * FROM reqproperty";
                  $sql = mysqli_query($conn,$query);
                  while($row = mysqli_fetch_array($sql))
                  {
                    $id = $row['id'];
                    $type = $row['type'];
                    $date = $row['date'];
                    $area = $row['area'];
                    $max = $row['max'];
                               


        	?>
            <tr>
                <td><?php echo  $id ?></td>
                <td><?php echo $type ?></td>
                <td><?php echo $date ?></td>
                <td><?php echo $area ?></td>
                <td><?php echo  $max ?></td>
                <td><a href="clientedit.php?id=<?php echo $id  ?>" class="btn btn-primary btn-lg">EDIT</a></td>
              <td>  <a href="clientdelete.php?id=<?php echo $id ?>" class="btn btn-danger btn-lg" onClick="return confirm('Are you sure you want to delete?')">DELETE</a></td>
                 
            </tr>
            <?php } ?>
            
        </tbody>
        
    </table>

		</div>
	</div>

    


</body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

