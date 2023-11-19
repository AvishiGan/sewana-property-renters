<?php 

include 'config.php';

session_start();

error_reporting(0);











if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = ($_POST['password']);

	$sql = "SELECT * FROM manager WHERE username='$username' AND  password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        echo"<script>alert('Script Successfully worked! .')</script>";
		header("Location: managerDashboard.php");
    }
    else if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = ($_POST['password']);
    
        $sql = "SELECT * FROM supervisor WHERE username='$username' AND  password='$password'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            echo"<script>alert('Script Successfully worked! .')</script>";
            header("Location: supervisorDashboard.php");
        }
        else if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = ($_POST['password']);
        
            $sql = "SELECT * FROM assistant WHERE username='$username' AND  password='$password'";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                echo"<script>alert('Script Successfully worked! .')</script>";
                header("Location: assistantDashboard.php");
            }
            else if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $password = ($_POST['password']);
            
                $sql = "SELECT * FROM client WHERE username='$username' AND  password='$password'";
                $result = mysqli_query($conn, $sql);
                if ($result->num_rows > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['password'] = $row['password'];
                    echo"<script>alert('Script Successfully worked! .')</script>";
                    header("Location: clientDashboard.php");
                }else{

                echo"<script>alert('Woops! Something Wrong Went.')</script>";
                    
                }
            
            }
        }
        
    }
    
    
}








?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/logstyle.css">
</head>
<body style="background-image:url(css/images/sample.png) ;">
    <div class="form">
    <p>Login</p>
    <form method="POST">
        <input type="email" name="username" placeholder="username"  value="<?php echo $username; ?>">
        <input type="password" name="password" placeholder="password" value="<?php echo $password; ?>">

        <button type="submit" name="submit">login</button>

        <p class="message">Not registered? <a href="selectemployee.php">Create an account for employee</a> <br> <a href="propertyowner.php">Create an account for Property Owner</a> <br> <a href="client.php">Create an account for client</a></p>
       
        <p class="message"><a href="#">Froget Password</a></p>
    </form>
    </div>
</body>
</html>