<?php
if(isset($_POST['firstName'])){
$percent=0;//initialize
$q_count=20;//count
$points_per_q=5;
////////////////////////////////////////////////
if($_POST['R01']=="F"){
$percent+=$points_per_q;	
$A01='Correct';
}else{
$A01='Incorrect';
}
//////////////////
if($_POST['R02']=="T"){
$percent+=$points_per_q;	
$A02='Correct';
}else{
$A02='Incorrect';
}
//////////////////
if($_POST['R03']=="F"){
$percent+=$points_per_q;	
$A03='Correct';
}else{
$A03='Incorrect';
}
//////////////////
if($_POST['R04']=="T"){
$percent+=$points_per_q;	
$A04='Correct';
}else{
$A04='Incorrect';
}
///////////////////////////////////////////////
if($_POST['R05']=="T"){
$percent+=$points_per_q;	
$A05='Correct';
}else{
$A05='Incorrect';
}
//////////////////
if($_POST['R06']=="T"){
$percent+=$points_per_q;	
$A06='Correct';
}else{
$A06='Incorrect';
}
//////////////////
if($_POST['R07']=="T"){
$percent+=$points_per_q;	
$A07='Correct';
}else{
$A07='Incorrect';
}
//////////////////
if($_POST['R08']=="T"){
$percent+=$points_per_q;	
$A08='Correct';
}else{
$A08='Incorrect';
}
//////////////////////////////////////////////////
if($_POST['R09']=="T"){
$percent+=$points_per_q;	
$A09='Correct';
}else{
$A09='Incorrect';
}
//////////////////
if($_POST['R10']=="T"){
$percent+=$points_per_q;	
$A10='Correct';
}else{
$A10='Incorrect';
}
//////////////////
if($_POST['R11']=="T"){
$percent+=$points_per_q;	
$A11='Correct';
}else{
$A11='Incorrect';
}
//////////////////
if($_POST['R12']=="F"){
$percent+=$points_per_q;	
$A12='Correct';
}else{
$A12='Incorrect';
}
///////////////////////////////////////////////////
if($_POST['R13']=="T"){
$percent+=$points_per_q;	
$A13='Correct';
}else{
$A13='Incorrect';
}
//////////////////
if($_POST['R14']=="T"){
$percent+=$points_per_q;	
$A14='Correct';
}else{
$A14='Incorrect';
}
//////////////////
if($_POST['R15']=="T"){
$percent+=$points_per_q;	
$A15='Correct';
}else{
$A15='Incorrect';
}
//////////////////
if($_POST['R16']=="T"){
$percent+=$points_per_q;	
$A16='Correct';
}else{
$A16='Incorrect';
}
//////////////////////////////////////////////////////
if($_POST['R17']=="F"){
$percent+=$points_per_q;	
$A17='Correct';
}else{
$A17='Incorrect';
}
//////////////////
if($_POST['R18']=="T"){
$percent+=$points_per_q;	
$A18='Correct';
}else{
$A18='Incorrect';
}
//////////////////
if($_POST['R19']=="T"){
$percent+=$points_per_q;	
$A19='Correct';
}else{
$A19='Incorrect';
}
//////////////////
if($_POST['R20']=="F"){
$percent+=$points_per_q;	
$A20='Correct';
}else{
$A20='Incorrect';
}

///////////////email details
$to="benezzer@gmail.com";
$subject="Wordpress final, ".$_POST['firstName'].' '.$_POST['lastName']. ' '.$percent;
$ebody="<html><body>";
$ebody.="<h2>First name: ".$_POST['firstName']."</h2>";
$ebody.="<h2>Last name: ".$_POST['lastName']."</h2>";
$ebody.="<h2>Student ID: ".$_POST['sudentId']."</h2>";
$ebody.="<h2>Total points: $percent Out of 100. </h2>";
$ebody.="<p>Question 1: $A01</p>"; 
$ebody.="<p>Question 2: $A02</p>"; 
$ebody.="<p>Question 3: $A03</p>"; 
$ebody.="<p>Question 4: $A04</p>"; 
$ebody.="<p>Question 5: $A05</p>"; 
$ebody.="<p>Question 6: $A06</p>";
$ebody.="<p>Question 7: $A07</p>";
$ebody.="<p>Question 8: $A08</p>";
$ebody.="<p>Question 9: $A09</p>";
$ebody.="<p>Question 10: $A10</p>";
$ebody.="<p>Question 11: $A11</p>"; 
$ebody.="<p>Question 12: $A12</p>"; 
$ebody.="<p>Question 13: $A13</p>"; 
$ebody.="<p>Question 14: $A14</p>"; 
$ebody.="<p>Question 15: $A15</p>"; 
$ebody.="<p>Question 16: $A16</p>";
$ebody.="<p>Question 17: $A17</p>";
$ebody.="<p>Question 18: $A18</p>";
$ebody.="<p>Question 19: $A19</p>";
$ebody.="<p>Question 20: $A20</p>"; 
$ebody.="<p>Comments: ".$_POST['comments']."</p>";
$ebody.="</body></html>";


$headers="MIME-Version: 1.0\r\n";//"the foollowing content complies with the MIME standard
$headers.="Content-type:text/html;charset=utf-8\r\n";
//hey, email client, this email is in html, and in utf-8
$fullName=$_POST['firstName'].' '.$_POST['lastName'];
$headers.="From: $fullName<dontreply@startframe.com>";
//finally send the email
mail($to,$subject,$ebody,$headers);
//mail(recipient(s),subject,the content itself,optional headers)

}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Final exam results</title>
<link href="../../oneColFixCtrHdr.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">
  <div class="header"><!-- end .header -->
    <h1>Wordpress- Final exam</h1>
  </div>
  <div class="content">
  <?php
  if(isset($_POST['firstName'])){ ?>
    <table width="661" border="0" cellspacing="0" cellpadding="7">
      <tr>
        <td width="56" align="right">&nbsp;</td>
        <td width="577"><h2><span class="myemph">Results: Feel free to print for your records</span></h2>
        <h2>First name: <?php echo $_POST['firstName'];?></h2></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td><h2>Last Name: <?php echo $_POST['lastName'];?></h2></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td><h2>Student ID: <?php echo $_POST['sudentId'];?></h2></td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td><p>Question 1 : <?php echo $A01;?></p>
          <p>Question 2 : <?php echo $A02;?></p>
          <p>Question 3 : <?php echo $A03;?></p>
          <p>Question 4 : <?php echo $A04;?></p>
          <p>Question 5 : <?php echo $A05;?></p>
          <p>Question 6 : <?php echo $A06;?></p>
          <p>Question 7 : <?php echo $A07;?></p>
          <p>Question 8 : <?php echo $A08;?></p>
          <p>Question 9 : <?php echo $A09;?></p>
          <p>Question 10 : <?php echo $A10;?></p>
          <p>Question 11 : <?php echo $A11;?></p>
          <p>Question 12: <?php echo $A12;?></p>
          <p>Question 13: <?php echo $A13;?></p>
          <p>Question 14: <?php echo $A14;?></p>
          <p>Question 15 : <?php echo $A15;?></p>
          <p>Question 16: <?php echo $A16;?></p>
          <p>Question 17: <?php echo $A17;?></p>
          <p>Question 18: <?php echo $A18;?></p>
          <p>Question 19: <?php echo $A19;?></p>
        <p>Question 20: <?php echo $A20;?></p>
        <p> Comments: <?php echo $_POST['comments'];?>
        <h2>Total points: <?php echo $percent;?> Out of 100. </h2>
        <p class="myemph">These results were sent to your teacher. Thank you!</p></td>
      </tr>
    </table>
   <!-- end .content -->
    <?php
  }else{
	  echo "<p>Form incomplete</p>";
  }
  ?>
  </div>
  <div class="footer">
    <p>All Rights Reserved®</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
