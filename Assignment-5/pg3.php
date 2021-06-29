<html>

<head>
    <title>Login</title>
</head>

<body>
    <form method="POST">
        <table border="1" cellpadding="20px" align="center">
            <tr>
                <th colspan="2" style="background-color:green;color:white;">Login Sessions</th>
            </tr>
            <tr>
                <th>User Name</th>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="LOGIN" name="login"><input type="submit"
                        value="LOGOUT" name="logout">
                </td>
            </tr>
        </table>
</body>
<?php
SESSION_start();
if(isset($_POST["login"]))
{
if(($_SESSION["username"]==$_POST['username']) && ($_SESSION["password"]==$_POST['password']) && isset($_SESSION['count']))
{ 
    $_SESSION["count"]++;
    echo $_SESSION["username"].'<br>';
    echo 'This is your '.$_SESSION["count"].' visit ';
}
else {
     $_SESSION["username"]=$_POST['username'];
     $_SESSION["password"]=$_POST['password'];
     $_SESSION["count"]=0;
     echo $_SESSION["username"];
     echo"<br>Welcome....";
    } 
}
if(isset($_POST['logout'])){
SESSION_unset();
echo"Logged Out<br>";
echo $_SESSION["username"]=$_POST['username']; }


?>

</html>