
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
    <a href="pg4_update.php">UPDATE</a>
    <a href="#">DELETE</a>
    </center>
</nav>

 <form method="POST">
        <table border="1" cellpadding="20px" align="center">
            <tr>
                <th colspan="2" style="background-color:blue;color:white;">Delete Passport</th>
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
</body>
</html>
<?php 
$mysql = new mysqli("localhost","root","","passport");
If(!$mysql) 
die("error");
if(isset($_POST["submit"]))
{
    $pno=$_POST['no'];

    $check="SELECT * FROM passenger WHERE pno = '$pno'";
    $result = $mysql->query($check);
    $row=$result->fetch_array();
    if($row[0] > 1){
        $sql = "DELETE FROM  passenger  WHERE pno ='$pno'";
        $mysql->query($sql);
        echo "Data deleted Successfully";
            
        }
        else{
            echo "Passport Number Not exist<br/>";
        }
}
?>