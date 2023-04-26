<html>
<head>
<title>level3sod</title>
</head>
<body>
<?php
    if(isset($_POST['submit']))
    {
    $username= $_POST["username"];
    $userpassword = $_POST["password"];
    echo $username." and Password is ".$userpassword."</br><br>";
    }
    ?>
    <form method="post" action="">
        <label>Username</label>
        <input type="text" name="username"><br><br>
        <label>Password</label>
        <input type="text" name="password"><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
