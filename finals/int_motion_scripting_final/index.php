<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Midterm exam</title>
<link href="../../oneColFixCtrHdr.css" rel="stylesheet" type="text/css">
<link href="../../SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css">
<script src="../../SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>
</head>

<body>
<div class="container">
  <div class="header"><!-- end .header -->
    <h1>Interactive Motion Scripting- Final exam</h1>
  </div>
  <div class="content">
 
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
