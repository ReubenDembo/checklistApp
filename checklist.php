<?php
// We need to use sessions, so you should always start sessions using the below code.
// session_start();
// // If the user is not logged in redirect to the login page...
// if (!isset($_SESSION['loggedin'])) {
// 	header('Location: index.php');  //redirects to a new page (index.html) if user is not logged
// 	exit;
// }

//WEBSITES
$FmcFinance = 'https://www.fmcfinance.com/';
$Rbz = 'http://bdctrs.rbz.co.zw/';
$cebs = 'https://bureaudechangesoftware.com/fmc-harare/?key=2CEBS2';
$ServiceDesk = 'http://192.168.18.9:8080/';
$RemoteAgency = 'https://portal.craftsilicon.com/MAgency/DefaultLogin.aspx';
$SophosFirewall = 'https://central.sophos.com/manage/login';
$Ndasenda = 'https://ndasenda.azurewebsites.net/ ';
$FmcLive = 'https://zwonline.fmcfinance.com/';
$HelpAdvisor = 'http://192.168.18.22:4500/helpadvisor/login.php';
$BR_ZAM = 'http://192.168.18.6:7730/brclient/General/';
$BR_ZW = 'http://192.168.20.10:10260/brclient/general/'; 
$HelpAdvisor ='http://192.168.18.3:4500/helpadvisor/login.php';
$Eset = 'https://identity.eset.com/login/pwd?ReturnUrl=%2Fconnect%2Fauthorize%2Fcallback%3Fclient_id%3DERA%26response_type%3Dcode%26scope%3Dopenid%2520profile%2520eset_id%2520eca%26ui_locales%3Den-US%26redirect_uri%3Dhttps%253A%252F%252Fprotect.eset.com';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Checklist App</title>

	<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
 
 <main>
 	<h4 class="hdr">Website Checklist</h4>
 	<div class="logout">
 		<a href="checklist.php" class="a">Refresh</a>
 		<br>
 		<br>
 		<a href="servers.php" class="a">Servers</a>
 		<br>
 		<br>
 		<a href="logout.php" class="a">Logout</a>
 	</div>

 	<div class="data">
 		<table id="table">
 			<tr>
 				<th>Website</th>
 				<th>Status</th>
 			</tr>
 			<tr>
 				<td>FMC Finance Website</td>
 				<td>
 				<?php
					 if(@file_get_contents($FmcFinance)){
		
		               echo '<font color="Green">'. "Online" .'</font>';
		
	                   } else {
		
		             echo '<font color="Red">' ."Offline". '</font>';
		
	                 }   
                ?> 
                </td> 
            </tr>
            <tr>
                <td>RBZ System</td>
 				<td><div>
 				<?php
					 if(@file_get_contents($Rbz)){
		
		               echo '<font color="Green">'. "Online" .'</font>';
		
	                   } else {
		
		             echo '<font color="Red">' ."Offline". '</font>';
		
	                 }   
                ?> 
                </td> 
 			</tr>
 			<tr>
 				<td>CEBS Website</td>
 				<td>
 				<?php
					 if(@file_get_contents($cebs)){
		
		               echo '<font color="Green">'. "Online" .'</font>';
		
	                   } else {
		
		             echo '<font color="Red">' ."Offline". '</font>';
		
	                 }   
                ?> 
                </td> 
            </tr>
            <tr>
 				<td>Service Desk Website</td>
 				<td>
 				<?php
					 if(@file_get_contents($ServiceDesk)){
		
		               echo '<font color="Green">'. "Online" .'</font>';
		
	                   } else {
		
		             echo '<font color="Red">' ."Offline". '</font>';
		
	                 }   
                ?> 
                </td> 
            </tr>
            <tr>
 				<td>Remote Agency Website</td>
 				<td>
 				<?php
					 if(@file_get_contents($RemoteAgency)){
		
		               echo '<font color="Green">'. "Online" .'</font>';
	                   } else {
		
		             echo '<font color="Red">' ."Offline". '</font>';
		
	                 }   
                ?> 
                </td> 
            </tr>
             <tr>
 				<td>Sophos Central</td>
 				<td>
 				<?php
					 if(@file_get_contents($SophosFirewall)){
		
		               echo '<font color="Green">'. "Online" .'</font>';
		
	                   } else {
		
		             echo '<font color="Red">' ."Offline". '</font>';
		
	                 }   
                ?> 
                </td> 
            </tr>
             <tr>
 				<td>Ndasenda Website</td>
 				<td>
 				<?php
					 if(@file_get_contents($Ndasenda)){
		
		               echo '<font color="Green">'. "Online" .'</font>';
		
	                   } else {
		
		             echo '<font color="Red">' ."Offline". '</font>';
		
	                 }   
                ?> 
                </td> 
            </tr>
            <tr>
 				<td>FMC Live Website</td>
 				<td>
 				<?php
					 if(@file_get_contents($FmcLive)){
		
		               echo '<font color="Green">'. "Online" .'</font>';
	                   } else {
		
		             echo '<font color="Red">' ."Offline". '</font>';
		
	                 }   
                ?> 
                </td> 
            </tr>
            <tr>
 				<td>Help Advisor Website</td>
 				<td>
 				<?php
					 if(@file_get_contents($HelpAdvisor)){
		
		               echo '<font color="Green">'. "Online" .'</font>';
	                   } else {
		
		             echo '<font color="Red">' ."Offline". '</font>';
		
	                 }   
                ?> 
                </td> 
            </tr>
            <tr>
 				<td>BR Zambia</td>
 				<td>
 				<?php
					 if(@file_get_contents($BR_ZAM)){
		
		               echo '<font color="Green">'. "Online" .'</font>';
		
	                   } else {
		
		             echo '<font color="Red">' ."Offline". '</font>';
		
	                 }   
                ?> 
                </td> 
            </tr>
            <tr>
 				<td>BR Zimbabwe</td>
 				<td>
 				<?php
					 if(@file_get_contents($BR_ZW)){
		
		               echo '<font color="Green">'. "Online" .'</font>';
		
	                   } else {
		
		             echo '<font color="Red">' ."Offline". '</font>';
		
	                 }   
                ?> 
                </td> 
            </tr>
            <tr>
 				<td>Eset Website</td>
 				<td>
 				<?php
					 if(@file_get_contents($Eset)){
		
		               echo '<font color="Green">'. "Online" .'</font>';
		
	                   } else {
		
		             echo '<font color="Red">' ."Offline". '</font>';
		
	                 }   
                ?> 
                </td> 
            </tr>

 		</table>
 	</div>

</main>

</body>
</html>