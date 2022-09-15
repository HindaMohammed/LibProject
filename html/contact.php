<?php 

include('conn.php');

if(!empty($_POST["send"])) {

    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $content = $_POST["content"];

    $sql = "INSERT INTO contact (user_name, user_email,content) VALUES ('" . $name. "', '" . $email. "','" . $content. "')";
   
    if(mysqli_query($con, $sql)){
    echo "<script>alert('Your contact information is saved successfully.')</script>";
    echo "<script>window.open('contact.php?','_self')</script>";
  } else {
    echo "Failed";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>content</title>
    <link rel="stylesheet" href="../css/contact.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/> 
</head>
<body>
        <?php include('header.html'); ?>
  <section class="hero">
          <p> Countact Us </p>
    </section>
    <section>
     <div id="container">
                <div class="contain">
                    <h2> Points of Contact </h2><br>
                    <ul>  
                         <li><a href="#" class="phone"><i class="fa fa-phone"></i>+08285461</a></li><br>
                         <li><a href="#" class="email"><i class="fa fa-envelope"></i>walaa@gmail.com</a></li>
                   </ul>
                  
                    
                </div>
                 <div class="contact">
                     <form method="post" action="" >
                    <h3>Send Message</h3>
                    <div class="inputBox">
                        <label>full Name</label>
                        <input type="text" name="userName" required="required">
                        
                    </div>

                    <div class="inputBox">
                            <label>Email</label>
                        <input type="email" name="userEmail" required="required">
                    
                    </div>

                    <div class="inputBox">
                          <label>Type your Message...</label>
                        <textarea name="content" required="required"></textarea>
                      
                    </div>

                    <div class="send">
                         <button id="print" name="send" value="Send">Send Message</button>

                    </div>
                </form>
                 </div>
   
     </div>
    </section>
        <?php include('footer.html'); ?>

</body>
</html>