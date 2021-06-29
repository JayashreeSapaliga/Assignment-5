<?php 
$mysql = new mysqli("localhost","root","","passport");
If(!$mysql) 
die("error");
if($_POST)
{
    $pno=$_POST['no'];

    $check="SELECT * FROM passenger WHERE pno = '$pno'";
    $result = $mysql->query($check);
    $row=$result->fetch_array();
}
?>
<html>

<head>
    <title>PASSPORT</title>
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
    <a href="pg4.php">ADD</a>
    <a href="#">UPDATE</a>
    <a href="pg4_delete.php">DELETE</a>
    </center>
</nav>

 <form method="POST">
        <table border="1" cellpadding="20px" align="center">
            <tr>
                <th colspan="2" style="background-color:blue;color:white;">Update Passport details</th>
            </tr>
            <tr>
            <th>Enter Passport Number</th>
            <td><input type="number" name="no" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="SUBMIT" name="submit"></td>
            </tr>
        </table>
</form>
<?php
if(isset($_POST["submit"])){
    
    if($row[0] > 1) {
        ?>
        <form method="post" enctype="multipart/form-data">
            <center>
                <table border="1" cellpadding="20px">
                    <tr>
                        <th colspan="2" style="background-color:blue;color:white;">Passport Form</th>
                    </tr>
                    <tr>
                        <th>Passport Number</th>
                        <td><input type="number" name="no" value="<?php echo $row[0]?>" readonly></td>
                    </tr>
                    <tr>
                        <th>First Name</th>
                        <td><input type="text" name="fname" value="<?php echo $row[1]?>" required></td>
                    </tr>
                    <tr>
                        <th>Middle Name</th>
                        <td><input type="text" name="mname" value="<?php echo $row[2]?>" required></td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td><input type="text" name="lname" value="<?php echo $row[3]?>" required></td>
                    </tr>
                    <tr>
                        <th>Dob</th>
                        <td><input type="date" name="dob" value="<?php echo $row[4]?>" required></td>
                    </tr>
                    <tr>
                        <th>Nationality</th>
                        <td><input type="text" name="nation" value="<?php echo $row[5]?>" required></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><textarea name="address" required><?php echo $row[6]?></textarea></td>
                    </tr>

                    <tr>
                        <th>Gender</th>
                        <td><input type="radio" name="gender" value="male" <?php if($row[7]=="male") echo "checked"?>>Male
                            <input type="radio" name="gender" value="female" <?php if($row[7]=="female") echo "checked"?>>Female
                        </td>
                    </tr>
                    <tr>
                        <th>Picture</th>
                          <th><img src="<?php echo $row[8]; ?>" height="100px" width="100px"><input type="file" name="image" ></th> 
                     
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="update" value="UPDATE">
                        </td>
                    </tr>

                </table>
                <center>
        </form>
   <?php
    }
    else
    {
            echo "Passport Number Not exist<br/>";
    }
    }
    if(isset($_POST["update"])){

        $pno=$_POST['no'];
        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
        $lname=$_POST['lname'];
        $dob=$_POST['dob'];
        $nationality=$_POST['nation'];
        $address=$_POST['address'];
        $gender=$_POST['gender'];
        $image=$row[8];
        $pname=$_FILES['image']['name'];
        $ftype=$_FILES['image']['type'];
        $fsize=$_FILES['image']['size'];
        $floc=$_FILES['image']['tmp_name'];
        $fstore="upload/".$pname;
        move_uploaded_file($floc,$fstore);
        if($fstore=="upload/")
    {
    	$fstore=$image;
    }
     
            $res="update passenger set fname='$fname',mname='$mname',lname='$lname',dob='$dob',nationality='$nationality',address='$address',gender='$gender',img='$fstore' where pno='$pno'";
            $mysql->query($res);
            echo "Updated successfully";
        }
        ?>

</body>
</html>