<?php 

session_start();



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Assistant - Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Welcome! | <span class="badge bg-danger">Assistant Dashboard</span> </h1>
   
</div>
<br>
<ul class="nav justify-content-center">
    <li class="nav-item" style="padding-right: 6px;">
      <button  class="btn btn-outline-primary"; onclick="window.location.href='personmsgrequest.php'";> Request Property Owner Person Details</button>
    </li>
    <li class="nav-item" style="padding-right: 6px;">
      <button  class="btn btn-outline-primary"; onclick="window.location.href='companymsgrequest.php'";> Request Property Owner Company Details</button>
    </li>
    
    <li class="nav-item" style="padding-right: 6px;">
    <button  class="btn btn-outline-primary"; onclick="window.location.href='Cclientmsgrequest.php'";> Requests Client Details</button>
    </li>

    <li class="nav-item" style="padding-right: 6px;">
    <button  class="btn btn-outline-danger"; onclick="window.location.href='logout.php'";> Sign Out</button>
    </li>
    
  </ul>

     
</body>
</html>