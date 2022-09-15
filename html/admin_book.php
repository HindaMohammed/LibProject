<?php
include("conn.php");

if (isset($_GET['deleted_id'])){

  $id = $_GET['deleted_id'];

  // delete the entry

  $result = mysqli_query($con,"DELETE FROM books WHERE id='$id'") or die(mysqli_error($con));

}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/adminBook.css"/>

  <title>Admin books</title>
</head>

<body>
   <header>
        <ul class="nav" >

          <li><a href="admin_book.php">Admin Books</a></li>
          <li><a href="AddProgramm.php">Admin Programs</a></li>
          <li><a href="admin_solbooks.php">Admin Solution Books</a></li>
          <li id="logout"><a href="logout.php">logout</a></li>
        </ul>
      </header>
      <h2 style="text-align: center; font-size:x-large; margin-top:65px"> Admin Book</h2>
  <p></p>
  <br>
  <a class="add_proramm_btn" href="AddBooks.php" >Add  Book </a>

<form method="POST" action = "<?php $_PHP_SELF ?>">
  <div>
  <table id="customers" >
        <tr>
          <th>Books name</th>
          <th>Books image</th>
          <th>Books year</th>
          <th>Books semester</th>
          <th>Books Details</th>
          <th>Books URL</th>
          <th>Options</th>
        </tr>

        <?php

$get_books = "SELECT * FROM `books` WHERE 1";

$run_books = mysqli_query($con, $get_books);

while ($row = mysqli_fetch_array($run_books)){

  $id = $row['id'];  
  $name = $row['name'];
  $image = $row['image'];
  $description = $row['description'];
  $year = $row['year'];
  $semester = $row['semester'];
  $url_download = $row['url_download'];
?>

<tr>
  <td><?php echo $name; ?></td>
  <td><img width="60" height="60" src="../image/<?php echo $image;?>"  alt= "<?php echo $name; ?>" /></td>
  <td><?php echo $year; ?></td>
  <td><?php echo $semester; ?></td>
  <td><?php echo $description; ?></td>
  <td><?php echo $url_download; ?></td>
  <td>           
    <a id="edit" href="EditBooks.php?id=<?php echo $row["id"]; ?>"rel="tooltip" name="id"><i>edit</i></a>
    <a  id="delete" href="admin_book.php?deleted_id=
    <?php echo $row["id"]; ?>
    " onclick="return confirm('Are you sure?')" rel="tooltip" name="deleted_id" value="delete">
    <i>delete</i></a>  
  </td>                
</tr>

<?php }  ?>


</table>

  </div>                  
</form>
</body>
</html>