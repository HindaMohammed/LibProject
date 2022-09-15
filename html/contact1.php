<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/constyle.css" type="text/css">

   
</head>
<body>
          <?php include('header.html'); ?>

<h3 style="margin-top:80px;">ContactUs </h3>

<div class="container">
  <form action="/action_page.php">
    
    <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>

    <label for="Email">Email</label>
    <input type="Email" id="email" name="Email" placeholder="Your Email.."><br>

    <label for="Meseege">Meseege</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea><br>

    <input type="submit" value="Submit">
  </form>
    
</div>
         <?php include('footer.html'); ?>

</body>
</html>
