
<?php
include('conn.php');

if(isset($_POST["submit_btn"])){
  
  $lab_name = $_POST['labName'];
  $program_name = $_POST['progammName'];
  $url_program = $_POST['url_prog'];
  $install_program = $_POST['install_pro'];
  $year = $_POST['year'];

  $sql = "INSERT INTO programs (lab_name,program_name,url_program,install_program,year) VALUES ('" . $lab_name. "', '" . $program_name. "','" . $url_program. "', '" . $install_program. "','" . $year. "')";

  $res = mysqli_query($con , $sql);

  if($res){

    echo "<script>alert('The Program is added')</script>";
    echo "<script>window.open('AddProgramm.php?','_self')</script>";
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
    <title>Add programm</title>
     <link rel="stylesheet" href="../css/AddBooks.css"/>

</head>
<body>
    
    <br>

<h2 style="text-align: center; font-size:x-large;">Add Program  </h2>
<p></p>
<br>
  <form method="post" enctype="multipart/form-data">

    <input type="text" id="labName" name="labName" placeholder="Add Lab Name">
    <input type="text" id="lname" name="progammName" placeholder="Add progamm Name..">
    <input type="text" name="url_prog" placeholder="Add URL Programm..">
    
    <input type="text" name="install_pro" placeholder="Add install Programm..">
    <input type="text" name="year" placeholder="Add year ..">
    <br>

    <input id="submit" type="submit" name = "submit_btn"  >
    <a id="back" href="AddProgramm.php">back</a>

  </form>

</body>
</html>