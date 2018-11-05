<?php
session_start();
$user = $pass = $error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    
    setcookie($user, $pass, time() + (86400 * 30), "/");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <?php echo $error;?><br>
        Username: <input type="text" name="user"><br><br>
        Password: <input type="password" name="pass"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>