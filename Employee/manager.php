<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="regform">
        <h1>Manager Registration Form</h1>
    </div>
    <div class="main">
      <form  method="POST">

    

           <h2 class="name">Name </h2>
           <input class="propertyrentel" type="text" name="name">

           <h2 class="name">NIC</h2>
           <input class="propertynum" type="text" name="nic"><br>
                  
          <h2 class="name">Contact Number</h2>
          <input class="address" type="text" name="contact">
    
          <h2 class="name">start Date</h2>
          <input class="address" type="date" name="start">
    
          <h2 class="name">Date of Birth</h2>
          <input class="address" type="date" name="dob">
    
          <h2 class="name">salary</h2>
          <input class="address" type="text" name="salary">
        
          <h2 class="name">Gender</h2>

           <select class="option" name="subject">
                <option disabled="disabled" selected="selected">--Choose option--</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
           </select>
   
          <h2 class="name">Appointed Date</h2>
          <input class="address" type="date" name="address">
    


            <button type="submit">Register Manager</button>
    
    
        </form>
</div>
</body>
</html>