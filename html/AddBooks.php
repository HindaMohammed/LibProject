
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/AddBooks.css"/>
  <title>Add Book</title>
</head>

<body>

<br>

<?php
include('conn.php');

if(isset($_POST["submit_btn"])){
  
  $name = $_POST['name'];
  $image = $_FILES['image']['name']; 
  $image_tmp = $_FILES['image']['tmp_name'];
  move_uploaded_file($image_tmp,"images/$image");
  $description = $_POST['description'];
  $semester = $_POST['semester'];
  $year = $_POST['year'];
  $url_download = $_POST['url_download'];

  $sql = "INSERT INTO books (name, description,image,semester,year,url_download) VALUES ('" . $name. "', '" . $description. "','" . $image. "', '" . $semester. "','" . $year. "','" . $url_download. "')";

  $res = mysqli_query($con , $sql);

if($res){

    echo "<script>alert('The Book is added')</script>";
    echo "<script>window.open('admin_book.php?','_self')</script>";
  } else {
    echo "Failed";
  }
}

?>

<h2 style="text-align: center; font-size:x-large;">Add Book</h2>
<p></p>
<br>
  <form method="post" enctype="multipart/form-data">

    <input type="text" id="fname" name="name" placeholder="Add Book name..">




   <input type="text" id="lname" name="url_download" placeholder="Add Book URL..">



    <input type="text" name="year" placeholder="Add Book Year..">
    
    <input type="text" name="semester" placeholder="Add Book Semester..">
    
    <input type="file" name="image">  

    <textarea id="subject" name="description" placeholder="Write Description of Book.." style="height:200px"></textarea>
    <br>
     <input id="submit" type="submit" name = "submit_btn"  >
     <a id="back" href="admin_book.php">back</a>
  </form>


</body>
</html>