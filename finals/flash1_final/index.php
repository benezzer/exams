<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Final exam</title>
<link href="../../oneColFixCtrHdr.css" rel="stylesheet" type="text/css">
<link href="../../SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css">
<script src="../../SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>
</head>

<body>
<div class="container">
  <div class="header"><!-- end .header -->
    <h1>Interactive Motion Graphics/time based - Final exam</h1>
  </div>
  <div class="content">
 
 <div id="ip">
  <?php
/*function getRealIpAddr()
{
  if (!empty($_SERVER['HTTP_CLIENT_IP']))
  //check ip from share internet
  {
    $ip=$_SERVER['HTTP_CLIENT_IP'];
  }
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
  //to check ip is pass from proxy
  {
    $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  else
  {
    $ip=$_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}
$studentIP=getRealIpAddr();

$details = json_decode(file_get_contents("http://ipinfo.io/{$studentIP}"));


echo "<h2>Your IP address is $studentIP , request sent from city: ".$details->city." . This was recorded and sent to the Instructor </h2>";
*/

?>
  
  
  
  </div>
  <!--end div ip-->
  
 
 
    <h1>to ensure and prevent no early access to exam, your computer ID (IP address+time stamp) is sent to the instructor when you enter the exam.</h1>
    <h1>&nbsp;</h1>
    <h1>Instructions: </h1>
    <ol>
      <li>By clicking &quot;Start&quot; you will be taken to the exam page.</li>
      <li>Once you complete the exam, go over your answers carefully. you will only be able to submit once.</li>
      <li>on the page following the exam, you will see the results, the number of questions you got correctly and incorrectly. </li>
      <li>At the same time, these results are sent to the instructor via email.</li>
      <li><strong>Important: if I get 2 email different email results from the same student, this means the student tried to take the test a second time, and will be considered cheating.</strong></li>
    </ol>
    <form name="form1" method="post" action="exam_form.php">
    <table width="941" border="0" cellspacing="0" cellpadding="7">
  <tr>
    <td colspan="2"><span id="sprycheckbox1">
      <label for="agree_start">I have read, and understood the exam instructions</label>
      &nbsp; 
      &nbsp; 
      <input type="checkbox" name="agree_start" id="agree_start">
      <span class="checkboxRequiredMsg">Please check to begin.</span></span></td>
    </tr>
  <tr>
    <td width="451">&nbsp;</td>
    <td width="462" align="right"><input type="submit" name="button" id="button" value="Start"></td>
  </tr>
</table>
      
      <p>&nbsp;</p>
    </form>
    <p>&nbsp;</p>
    <!-- end .content --></div>
  <div class="footer">
    <p>All Rights Reserved®</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
<script type="text/javascript">
var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1");
</script>
</body>
</html>
