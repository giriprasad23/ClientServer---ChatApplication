<!--Hithesh Krishnamurthy (1001096009)-->
<!--Lavanya Somashekar (1001104262)-->
<!--Girish Ramesh Babu (1001087481)-->
<!--Sunayana Suresh Gowda (1001107621)-->

<!--This page flushes out all session variables and logs out the user-->

<?php

 session_start();
 header( "refresh:2; url=main_login.php" ); 
 unset($chatrooms);
 unset($_SESSION);
 $_SESSION = array();
 session_destroy();


?>
<h4>You have been successfully logged out<h4>