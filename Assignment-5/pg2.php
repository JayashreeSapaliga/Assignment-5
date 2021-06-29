<html>

<head>
    <title>Flight booking</title>
</head>

<body>
    <form method="POST">
        <table border="1" cellpadding="20px" align="center">
            <tr>
                <th colspan="2" style="background-color:blue;color:white;">Set Your Flight Preference</th>
            </tr>
            <tr>
                <th>Name</th>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <th>Seat Selection</th>
                <td><input type="radio" name="seat" value="Aisle">Aisle
                    <input type="radio" name="seat" value="Window">Window
                    <input type="radio" name="seat" value="Center">Center
                </td>
            </tr>
            <tr>
                <th>Meal Selection</th>
                <td><input type="radio" name="meal" value="Vegetarian">Vegetarian
                    <input type="radio" name="meal" value="Non-vegetarian">Non-vegetarian
                    <input type="radio" name="meal" value="Diabetic">Diabetic
                    <input type="radio" name="meal" value="Child">Child
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="SUBMIT" name="submit"></td>
            </tr>
        </table>
</form>
</body>
<?php
if(isset($_POST["submit"])){
$expire_time=time()+60*60*24*30;
setcookie("user_name", $_POST['username'], $expire_time);
setcookie("seat", $_POST['seat'], $expire_time);
setcookie("meal", $_POST['meal'], $expire_time);
echo "Cookie has been Set!<br>";
echo ".................................<br>";
echo 'Press <a href="display.php" style="text-decoration:none;margin:10px;display:inline-block;border:1px solid black;">GO</a> again to view cookies';

}
?>
</html>
