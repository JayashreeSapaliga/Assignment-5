<html>
<head>
    <title>View information</title>
</head>
<body>
    <h1>..................JSD FLIGHTS...................</h1>
    <h3>Thank you for choosing JSD Flights</h3>
    <h3>The cookie values are</h3>
    <h3>Name:<?php echo $_COOKIE["user_name"]; ?></h3>
    <h3>Seat:<?php echo $_COOKIE["seat"]; ?></h3>
    <h3>Food:<?php echo $_COOKIE["meal"]; ?></h3>
</body>
<?php
date_default_timezone_set("Asia/kolkata");
$inTwoMonths = 60 * 60 * 24 * 60 + time(); 
if(isset($_COOKIE['lastVisit']))
{
$visit = $_COOKIE['lastVisit'];
echo "Last Visited on : ".$visit;
setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths);
}
else{
echo "This is your first visit";
setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths);
}
?>
</html>