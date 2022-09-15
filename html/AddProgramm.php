<?php

include("conn.php");
  
if (isset($_GET['deleted_id']))
{

  $id = $_GET['deleted_id'];

  // delete the entry

  $result = mysqli_query($con,"DELETE FROM programs WHERE id='$id'") or die(mysqli_error($con));

}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/AddBooks.css"/>
  <title>Proramm</title>
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
      <h2 style="text-align: center; font-size:x-large; margin-top:65px"> Admin Program</h2>
  <p></p>
  <br>
      
<a class="add_proramm_btn" href="AddProgrammEvent.php"> Add Program</a>
<table id="programms">
    <tr>
      <th>Lab Name </th>
      <th>Programm Name </th>
      <th>URL Programm</th>
      <th>How to install </th>
      <th>Year </th>
      <th> Option </th>
    </tr>
  <?php

   $get_programs = "SELECT * FROM `programs` WHERE 1";

  $run_programs = mysqli_query($con, $get_programs);
    
   while ($row = mysqli_fetch_array($run_programs)){

   $id = $row['id'];  
   $lab_name = $row['lab_name'];
   $program_name = $row['program_name'];
   $url_program = $row['url_program'];
   $year = $row['year'];
   $install_program = $row['install_program'];
  ?>


<tr>
            <td><?php echo $lab_name; ?></td>
            <td><?php echo $program_name; ?></td>
            <td><?php echo $url_program; ?></td>
            <td><?php echo $install_program; ?></td>
            <td><?php echo $year; ?></td> 
            <td>
              <a id="edit" href="Editprograms.php?id=<?php echo $row["id"]; ?>" rel="tooltip" name="id"><i>edit</i></a>
              <a id="delete" href="AddProgramm.php?deleted_id=<?php echo $row["id"]; ?>"onclick="return confirm('Are you sure?')" rel="tooltip" name="deleted_id" value="delete"><i>delete</i></a>  
            </td>                
          </tr>
        <?php }  ?>
        </table>



  </body>
</html>