<?php
// // We need to use sessions, so you should always start sessions using the below code.
// session_start();
// // If the user is not logged in redirect to the login page...
// if (!isset($_SESSION['loggedin'])) {
// 	header('Location: index.php');  //redirects to a new page (index.html) if user is not logged
// 	exit;
// }

//SERVERS
$FMCSVR = '192.168.18.2';
$FMCADC = '192.168.18.3';
$FMCSMART = '192.168.18.6';
$APPSERVICES = '192.168.18.11';
$MOBILEAPP = '192.168.18.7';
$SERVICEDESK = '192.168.18.9';
$FMCADCVM = '192.168.18.22';
$JUPITER = '192.168.20.10';
$PLUTO = '192.168.18.24';
$MARS = '192.168.18.45';
$FMCAPP2 = '192.168.1.6';
$ZWFSVR = '192.168.1.11';



class CheckDevice {

   //this function checks whether the server is a Windows or Linux OS
    public function myOS(){  //strtoipper() -> converts to uppercase
        if (strtoupper(substr(PHP_OS, 0, 3)) === (chr(87).chr(73).chr(78))) 
            return true;

        return false;
    }


    public function ping($ip_addr){
        if ($this->myOS()){ //checks whether its Linux or Windows
            if (!exec("ping -n 1 -w 1 ".$ip_addr." 2>NUL > NUL && (echo 0) || (echo 1)"))
                return true;
        } 
        /* this is for a linux server machine
        else {

            if (!exec("ping -q -c1 ".$ip_addr." >/dev/null 2>&1 ; echo $?"))
            {
                return true;
            }
        }
        */

        return false;
    }
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Servers</title>

	<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
	</head>
<body>
 
 <main>
 	<h4 class="hdr">Servers Checklist</h4>
 	<div class="logout">
 		<a href="servers.php" class="a">Refresh</a>d
 		<br>
 		<br>
 		<a href="index.php" class="a">Websites</a>
 		<br>
 		<br>
 		<a href="logout.php" class="a">Logout</a>
 	</div>
    
    <div class="servers">
 		<table id="table">

 			<tr>
 			    <th>Server</th>
 			    <th>IP Address</th>
 				<th>Status</th>
 			</tr>

 			<tr>
 				<td>FMCSVR</td>
 				<td>192.168.18.2</td>
 				<td>  
 			        <?php


				    if ((new CheckDevice())->ping($FMCSVR))
				        echo '<font color="Green">'. "Online" .'</font>';
				    else 
				        echo '<font color="Red">'. "Offline" .'</font>';

				  ?>
                </td>
 			</tr>

 			<tr>
 				<td>FMCADC</td>
 				<td>192.168.18.3</td>
 				<td>  
 			        <?php


				    if ((new CheckDevice())->ping($FMCADC))
				        echo '<font color="Green">'. "Online" .'</font>';
				    else 
				        echo '<font color="Red">'. "Offline" .'</font>';

				  ?>
                </td>
 			</tr>

 			<tr>
 				<td>FMCSMART</td>
 				<td>192.168.18.6</td>
 				<td>  
 			        <?php


				    if ((new CheckDevice())->ping($FMCSMART))
				        echo '<font color="Green">'. "Online" .'</font>';
				    else 
				        echo '<font color="Red">'. "Offline" .'</font>';

				  ?>
                </td>
 			</tr>

 			<tr>
 				<td>APPSERVICES</td>
 				<td>192.168.18.11</td>
 				<td>  
 			        <?php


				    if ((new CheckDevice())->ping($APPSERVICES))
				        echo '<font color="Green">'. "Online" .'</font>';
				    else 
				        echo '<font color="Red">'. "Offline" .'</font>';

				  ?>
                </td>
 			</tr>

 			<tr>
 				<td>MOBILEAPP</td>
 				<td>192.168.18.7</td>
 				<td>  
 			        <?php


				    if ((new CheckDevice())->ping($MOBILEAPP))
				        echo '<font color="Green">'. "Online" .'</font>';
				    else 
				        echo '<font color="Red">'. "Offline" .'</font>';

				  ?>
                </td>
 			</tr>

 			<tr>
 				<td>SERVICEDESK</td>
 				<td>192.168.18.9</td>
 				<td>  
 			        <?php


				    if ((new CheckDevice())->ping($SERVICEDESK))
				        echo '<font color="Green">'. "Online" .'</font>';
				    else 
				        echo '<font color="Red">'. "Offline" .'</font>';

				  ?>
                </td>
 			</tr>

 			<tr>
 				<td>FMCADCVM</td>
 				<td>192.168.18.22</td>
 				<td>  
 			        <?php


				    if ((new CheckDevice())->ping($FMCADCVM))
				        echo '<font color="Green">'. "Online" .'</font>';
				    else 
				        echo '<font color="Red">'. "Offline" .'</font>';

				  ?>
                </td>
 			</tr>

 			<tr>
 				<td>JUPITER</td>
 				<td>192.168.20.10</td>
 				<td>  
 			        <?php


				    if ((new CheckDevice())->ping($JUPITER))
				        echo '<font color="Green">'. "Online" .'</font>';
				    else 
				        echo '<font color="Red">'. "Offline" .'</font>';

				  ?>
                </td>
 			</tr>

 			<tr>
 				<td>PLUTO</td>
 				<td>192.168.18.24</td>
 				<td>  
 			        <?php


				    if ((new CheckDevice())->ping($PLUTO))
				        echo '<font color="Green">'. "Online" .'</font>';
				    else 
				        echo '<font color="Red">'. "Offline" .'</font>';

				  ?>
                </td>
 			</tr>

 			<tr>
 				<td>MARS</td>
 				<td>192.168.18.45</td>
 				<td>  
 			        <?php


				    if ((new CheckDevice())->ping($MARS))
				        echo '<font color="Green">'. "Online" .'</font>';
				    else 
				        echo '<font color="Red">'. "Offline" .'</font>';

				  ?>
                </td>
 			</tr>

 			<tr>
 				<td>FMCAPP2</td>
 				<td>192.168.1.6</td>
 				<td>  
 			        <?php


				    if ((new CheckDevice())->ping($FMCAPP2))
				        echo '<font color="Green">'. "Online" .'</font>';
				    else 
				        echo '<font color="Red">'. "Offline" .'</font>';

				  ?>
                </td>
 			</tr>

 			<tr>
 				<td>ZWFSVR</td>
 				<td>192.168.1.11</td>
 				<td>  
 			        <?php


				    if ((new CheckDevice())->ping($ZWFSVR))
				        echo '<font color="Green">'. "Online" .'</font>';
				    else 
				        echo '<font color="Red">'. "Offline" .'</font>';

				  ?>
                </td>
 			</tr>
 			
 		</table>
 		
 	</div>

 </main>
 <footer>
 	<p></p>
 </footer>

</body>
</html>
</body>
</html>