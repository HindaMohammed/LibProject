<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>sign up</title>
    <link rel="stylesheet" href="../css/signup.css" />
</head>

<body>
    <?php
    require('conn.php');

    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query = "INSERT into `admin` (username, password, email)
VALUES ('$username', '" . $password . "', '$email')";
        $result = mysqli_query($con, $query);
        if ($result) {
            header("location: AdminLogin.php");
        }
    } else {
    ?>
        <div class="main">
            <div class="signup">
                <form action="" method="post">
                    <label >Sign up</label>
                    <input type="text" name="username" placeholder="User name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button>Sign up</button>
                </form>
            </div>

        </div>
</body>

</html>
<?php } ?>
</body>

</html>