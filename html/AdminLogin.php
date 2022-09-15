<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="../css/signup.css"> 
</head>
<body>
    <?php
 session_start(); 
 require('conn.php');
 if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `admin` WHERE username='$username'
and password='$password'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: admin_book.php");
         }else{
                  header("Location: AdminLogin.php?error=Incorect User name or password");
	}
    }else{
?>
?>
     <div class="main">
            <div class="signup">
                  <form action="" method="post">
                     <label>Admin Login </label>
                    <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <input type="text" name="username" placeholder="User name" >
                     <input type="password" name="password" placeholder="Password" >
                    <button>login</button>
                    <p>Dont have an account?<a href="signup.php"> sign up</a></p>
                </form>
            </div>

        </div>   
    
</div> 
   <?php } ?> 
</body>
</html>