<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Levels/pages</title>
        <link rel="stylesheet"  type="text/css" href="../css/level.css">  
        <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
        <link href="https://fonts.googleapis.com/css2?family=Cairo+Slab:wght@600&display=swap" rel="stylesheet"> 
    </head>
    <body>
    <?php include('conn.php');
          include('header.html'); 
          ?>
          
          <div class="header-hero">
            <div class="content">
              <h1>The World’s Leading </br> Online University</h1> 
              <h4> all your book  you need here and free !</h4> 
              <h4> Stay at home and keep yourslef safe</h4> 
            </div>
          </div>
        
        
          <div class="gallery-cont py-50">
          <div class="container">
            <h6>Your books here</h6>
            <br/><h2>New Materials</h2>
            <?php

          if(isset($_GET['semester'])){

            if($_GET['semester'] == 11){
              $get_books = "SELECT * FROM `books` WHERE year = 1 and semester = 1";
            }
            elseif ($_GET['semester'] == 12) {
              $get_books = "SELECT * FROM `books` WHERE year = 1 and semester = 2";
            }
            elseif ($_GET['semester'] == 21) {
              $get_books = "SELECT * FROM `books` WHERE year = 2 and semester = 1";
            }
            elseif ($_GET['semester'] == 22) {
              $get_books = "SELECT * FROM `books` WHERE year = 2 and semester = 2";
            }
            elseif ($_GET['semester'] == 31) {
              $get_books = "SELECT * FROM `books` WHERE year = 3 and semester = 1";
            }
            elseif ($_GET['semester'] == 32) {
              $get_books = "SELECT * FROM `books` WHERE year = 3 and semester = 2";
            }
            elseif ($_GET['semester'] == 41) {
              $get_books = "SELECT * FROM `books` WHERE year = 4 and semester = 1";
            }
            elseif ($_GET['semester'] == 42) {
              $get_books = "SELECT * FROM `books` WHERE year = 4 and semester = 2";
            }
            elseif ($_GET['semester'] == 51) {
              $get_books = "SELECT * FROM `books` WHERE year = 5 and semester = 1";
            }
            elseif ($_GET['semester'] == 52) {
              $get_books = "SELECT * FROM `books` WHERE year = 5 and semester = 2";
            }

            $run_books = mysqli_query($con, $get_books);
            
            while ($row = mysqli_fetch_array($run_books)){
       
              $id = $row['id'];  
              $name = $row['name'];
              $image = $row['image'];
              $description = $row['description'];
              $semester = $row['semester'];
              $year = $row['year'];
              $url_download = $row['url_download'];
             
              ?>
            
            <div class="gallery">

              <div class="gallery-imag">
              <img id="imgsol1" src="images/<?php echo $image; ?>" alt="Cinque Terre" width="250px" height="220px"></div>
            <div class="desc"> <h3><?php echo $name ?></h3> 
              <p style="padding: 20px"><?php echo $description; ?> </p> 
              <button id="Book1" onclick="location.href='<?php echo $url_download; ?>'"> download</button>
            </div>
          </div>
          <?php }} ?>
    
            </div>
            <div class="clear"></div>
          </div>
          </div>

      
          
    
          <div class="QuotesSection">
            <img src="../image/pictureForP2.jpg" width="100%" >
           
            <div class="centercot"><h1>،،، </br> "Always think how to do better things."
             <br/> ،،،  </h1> 
              <h4> Elon Reeve Musk 
                <br/> a business magnate, industrial designer and engineer.</h4>
              </h4> 
            </div>
           <div class="color-overlay"></div> 
          </div>
        
         
          <div class="gallery2-cont py-50">
            <div class="container">
              <h6>Book Solutions</h6>
              
              <?php

if(isset($_GET['semester'])){

  if($_GET['semester'] == 11){
    $get_solbooks = "SELECT * FROM `sol_books` WHERE year = 1 and semester = 1";
  }
  elseif ($_GET['semester'] == 12) {
    $get_solbooks = "SELECT * FROM `sol_books` WHERE year = 1 and semester = 2";
  }
  elseif ($_GET['semester'] == 21) {
    $get_solbooks = "SELECT * FROM `sol_books` WHERE year = 2 and semester = 1";
  }
  elseif ($_GET['semester'] == 22) {
    $get_solbooks = "SELECT * FROM `sol_books` WHERE year = 2 and semester = 2";
  }
  elseif ($_GET['semester'] == 31) {
    $get_solbooks = "SELECT * FROM `sol_books` WHERE year = 3 and semester = 1";
  }
  elseif ($_GET['semester'] == 32) {
    $get_solbooks = "SELECT * FROM `sol_books` WHERE year = 3 and semester = 2";
  }
  elseif ($_GET['semester'] == 41) {
    $get_solbooks = "SELECT * FROM `sol_books` WHERE year = 4 and semester = 1";
  }
  elseif ($_GET['semester'] == 42) {
    $get_solbooks = "SELECT * FROM `sol_books` WHERE year = 4 and semester = 2";
  }
  elseif ($_GET['semester'] == 51) {
    $get_solbooks = "SELECT * FROM `sol_books` WHERE year = 5 and semester = 1";
  }
  elseif ($_GET['semester'] == 52) {
    $get_solbooks = "SELECT * FROM `sol_books` WHERE year = 5 and semester = 2";
  }

  $run_solbooks = mysqli_query($con, $get_solbooks);
  
  while ($row = mysqli_fetch_array($run_solbooks)){

    $id = $row['id'];  
    $name = $row['name'];
    $image = $row['image'];
    $description = $row['description'];
    $semester = $row['semester'];
    $year = $row['year'];
    $url_download = $row['url_download'];
   
    ?>

    <div class="gallery2">
  
      <div class="gallery-imag" width >
      <img id="imgsol1" src="images/<?php echo $image ?>" alt="Cinque Terre" width="250px" height="270px"></div>
    <div class="desc"> <h3><?php echo $name; ?></h3> 
      <p style="padding: 20px;"><?php echo $description; ?></p> 
      <button id="solbook1" onclick="location.href='<?php echo $url_download; ?>'"> download</button>
    </div>
  </div>
<?php }} ?>
<div class="clear"></div>
              </div>

            </div>
            </div>
            


             <div class="QuotesSection">
              <img src="../image/img13.jpg" width="100%" >
             
              <div class="centercotprogram"><h1> </br>See The Laboratory Materials
               <br/>  
                <h4> easy way to install the programs we need at your semester from their oringinal wbesite , and some videos it will help you . 
                </h4> 

                <button id="pragramButton1" onclick="location.href='programm.php'"> See More</button>
            
             <div class="color-overlayprogram"></div> 
             <div class="clear"></div>
            </div>
            </div>

             <?php include('footer.html') ?>
   
</body>
</html>