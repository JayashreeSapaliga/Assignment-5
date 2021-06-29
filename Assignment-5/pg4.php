<html>

<head>
    <title>Passport details</title>
    <style>
    a {
        color: white;
        padding: 15px;
        font-size: 25px;
        text-decoration: none;
    }
    </style>
</head>

<body>
    <nav style="background-color:#333;">
        <center>
            <a href="#">ADD</a>
            <a href="pg4_update.php">UPDATE</a>
            <a href="pg4_delete.php">DELETE</a>
        </center>
    </nav>
    <center>
        <form method="post" enctype="multipart/form-data">
            <center>
                <table border="1" cellpadding="20px">
                    <tr>
                        <th colspan="2" style="background-color:blue;color:white;">Passport Form</th>
                    </tr>
                    <tr>
                        <th>Enter Passport Number</th>
                        <td><input type="number" name="no" required></td>
                    </tr>
                    <tr>
                        <th>Enter First Name</th>
                        <td><input type="text" name="fname" required></td>
                    </tr>
                    <tr>
                        <th>Enter Middle Name</th>
                        <td><input type="text" name="mname" required></td>
                    </tr>
                    <tr>
                        <th>Enter Last Name</th>
                        <td><input type="text" name="lname" required></td>
                    </tr>
                    <tr>
                        <th>Enter Dob</th>
                        <td><input type="date" name="dob" required></td>
                    </tr>
                    <tr>
                        <th>Enter Nationality</th>
                        <td><input type="text" name="nation" required></td>
                    </tr>
                    <tr>
                        <th>Enter Address</th>
                        <td><textarea name="address" required></textarea></td>
                    </tr>

                    <tr>
                        <th>Select Gender</th>
                        <td><input type="radio" name="gender" value="male" required>Male
                            <input type="radio" name="gender" value="female">Female
                        </td>
                    </tr>
                    <tr>
                        <th>Upload Picture</th>
                        <td><input type="file" name="image"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="submit" value="SUBMIT">
                        </td>
                    </tr>

                </table>
                <center>
        </form>
</body>

</html>


<?php
if(isset($_POST["submit"]))
{
$mysql = new mysqli("localhost","root","","passport");
If(!$mysql) 
die("error");

$pno=$_POST['no'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$nationality=$_POST['nation'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$pname=$_FILES['image']['name'];
$ftype=$_FILES['image']['type'];
$fsize=$_FILES['image']['size'];
$floc=$_FILES['image']['tmp_name'];
$fstore="upload/".$pname;
move_uploaded_file($floc,$fstore);

$check="SELECT * FROM passenger WHERE pno = '$pno'";
$result = $mysql->query($check);
$row=$result->fetch_array();

if($row[0] > 1) 
{
    echo "Passport Number Already Exists<br/>";
}
else
{
    mysqli_query($mysql,"INSERT INTO passenger  VALUES ('$pno','$fname','$mname', '$lname','$dob','$nationality','$address','$gender','$fstore')");
          
            echo "<h3>Passport Created Successfully.</h3>" ;
}
}
?>