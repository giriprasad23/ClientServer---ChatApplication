<!--Hithesh Krishnamurthy (1001096009)-->
<!--Lavanya Somashekar (1001104262)-->
<!--Girish Ramesh Babu (1001087481)-->
<!--Sunayana Suresh Gowda (1001107621)-->


<!-- code for login and registration link-->

<?php
session_start();
ob_start();
$host="localhost"; // Host name 
$username="u518307498_hithe"; // Mysql username; change here in case you use a local server 
$password="hith1242"; // Mysql password; change here in case you use a local server
$db_name="u518307498_test"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select databse.

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 

$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row

$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"

    $_SESSION['myusername']="$myusername";
    $_SESSION['mypassword']="$mypassword"; 
    header("location:login_success.php");
}
else {
    ob_start();      
    echo "<script type='text/javascript'>alert('Wrong username/password!!');</script>"; // display appropriate message on wrong password
    echo "<script type='text/javascript'>alert('redirecting back to login page...');</script>";
    header( "refresh:1; url=main_login.php" ); 
    ob_end_flush();   
    exit;    
}
?>

