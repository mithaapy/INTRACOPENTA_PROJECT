<?php
$servername = "localhost";
$username = "intn2489_kuncoro";
$password = "Welcome1";
$dbname = "intn2489_inta";
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$selsql="SELECT * FROM `tdat_leaddetails` WHERE `idstatus`=2";
$result=  mysqli_query($conn, $selsql);
while($row=  mysqli_fetch_assoc($result)):
    //print_r($row); die;
    $id=$row['id'];
$pickupdate=$row['pickupdate'];
//echo $pickupdate; 
$expirdate=date('Y-m-d', strtotime($pickupdate. ' + 5 days'));
$todaydate=  date('Y-m-d');
$updatesql = "Update tdat_leaddetails SET idstatus=1 Where id=$id and $expirdate<=$todaydate";
//echo $updatesql; die;
if (mysqli_query($conn, $updatesql)) {
    echo "modified  successfully";
} else {
    echo "Error: "  . mysqli_error($conn);
}

endwhile;




mysqli_close($conn);