<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Final exam</title>
<link href="../../oneColFixCtrHdr.css" rel="stylesheet" type="text/css">
<link href="../../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="../../SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css">
<link href="../../SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css">
<script src="../../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../../SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<script src="../../SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>
</head>

<body>
<div class="container">
  <div class="header"><!-- end .header -->
    <h1>Interactive Action Scripting (PHP3)   - Final exam</h1>
  </div>
  <div class="content">
    <form name="form1" method="post" action="exam_processor.php">
    
    <table width="661" border="0" cellspacing="0" cellpadding="7">
      <tr>
        <td width="284" align="right">First name</td>
        <td width="349"><span id="sprytextfield1">
          <input type="text" name="firstName" id="firstName">
          <span class="textfieldRequiredMsg">A first name is required.</span></span></td>
      </tr>
      <tr>
        <td align="right">Last Name</td>
        <td><span id="sprytextfield2">
          <input type="text" name="lastName" id="lastName">
          <span class="textfieldRequiredMsg">A last name is required.</span></span></td>
      </tr>
      <tr>
        <td align="right">Student ID</td>
        <td><span id="sprytextfield3">
          <input type="text" name="sudentId" id="sudentId">
          <span class="textfieldRequiredMsg">A Student id is required.</span></span></td>
      </tr>
    </table>
    <h2>&nbsp;</h2>
    <table border="0" cellspacing="2" cellpadding="10" width="960">
        <tr>
          <td width="51" valign="top" bgcolor="#CCCCCC"><p>#</p></td>
          <td width="201" valign="top" bgcolor="#CCCCCC"><p>T or F</p></td>
          <td width="640" valign="top" bgcolor="#CCCCCC"><p>Statement</p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED"><p>1</p></td>
          <td width="201" valign="top" bgcolor="#E0D9C4"><div id="spryradio1">
            <table width="200">
              <tr>
                <td><label>
                  <input type="radio" name="R01" value="T" id="R01_0">
                  T</label></td>
                </tr>
              <tr>
                <td><label>
                  <input type="radio" name="R01" value="F" id="R01_1">
                  F</label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Please make a selection.</span></div>            <p><br>
            </p></td>
          <td width="340" valign="top"><p>When echoing an XML structure from a SQL query in PHP, we start with the root node</p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED"><p>2</p></td>
          <td width="201" valign="top" bgcolor="#E0D9C4"><div id="spryradio2">
            <table width="200">
              <tr>
                <td><label>
                  <input type="radio" name="R02" value="T" id="R01_2">
                  T</label></td>
                </tr>
              <tr>
                <td><label>
                  <input type="radio" name="R02" value="F" id="R01_3">
                  F</label></td>
                </tr>
              </table>
          <span class="radioRequiredMsg">Please make a selection.</span></div>            <p>&nbsp;</p></td>
          <td width="340" valign="top"><p><strong>a do{ }while()</strong> loop is used only for a range of numbers.</p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED"><p>3</p></td>
          <td width="201" valign="top" bgcolor="#E0D9C4"><div id="spryradio3">
            <table width="200">
              <tr>
                <td><label>
                  <input type="radio" name="R03" value="T" id="R01_4">
                  T</label></td>
                </tr>
              <tr>
                <td><label>
                  <input type="radio" name="R03" value="F" id="R01_5">
                  F</label></td>
                </tr>
              </table>
          <span class="radioRequiredMsg">Please make a selection.</span></div>            <p>&nbsp;</p></td>
          <td width="340" valign="top"><p>in order to   retrieve the third item in an assoc array called $myarray, we can use the   command: <strong>echo $myarray(3);</strong></p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED"><p>4</p></td>
          <td width="201" valign="top" bgcolor="#E0D9C4"><div id="spryradio4">
            <table width="200">
              <tr>
                <td><label>
                  <input type="radio" name="R04" value="T" id="R01_6">
                  T</label></td>
                </tr>
              <tr>
                <td><label>
                  <input type="radio" name="R04" value="F" id="R01_7">
                  F</label></td>
                </tr>
              </table>
          <span class="radioRequiredMsg">Please make a selection.</span></div>            <p>&nbsp;</p></td>
          <td width="340" valign="top"><p>The &lt;canvas&gt; tag is executed only by html5-compatible browsers</p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED"><p>5</p></td>
          <td width="201" valign="top" bgcolor="#E0D9C4"><div id="spryradio5">
            <table width="200">
              <tr>
                <td><label>
                  <input type="radio" name="R05" value="T" id="R01_8">
                  T</label></td>
                </tr>
              <tr>
                <td><label>
                  <input type="radio" name="R05" value="F" id="R01_9">
                  F</label></td>
                </tr>
              </table>
          <span class="radioRequiredMsg">Please make a selection.</span></div>            <p>&nbsp;</p></td>
          <td width="340" valign="top"><p>The HTML5 &lt;canvas&gt; element is used to draw graphics, on the fly, via scripting (usually JavaScript).</p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED"><p>6</p></td>
          <td width="201" valign="top" bgcolor="#E0D9C4"><div id="spryradio6">
            <table width="200">
              <tr>
                <td><label>
                  <input type="radio" name="R06" value="T" id="R01_10">
                  T</label></td>
                </tr>
              <tr>
                <td><label>
                  <input type="radio" name="R06" value="F" id="R01_11">
                  F</label></td>
                </tr>
              </table>
          <span class="radioRequiredMsg">Please make a selection.</span></div>            <p>&nbsp;</p></td>
          <td width="340" valign="top"><p>The &lt;canvas&gt; element is only a container for graphics, and becomes a bitmap-based graphic once it is rendered on the user&rsquo;s browser </p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED"><p>7</p></td>
          <td width="201" valign="top" bgcolor="#E0D9C4"><div id="spryradio7">
            <table width="200">
              <tr>
                <td><label>
                  <input type="radio" name="R07" value="T" id="R01_12">
                  T</label></td>
                </tr>
              <tr>
                <td><label>
                  <input type="radio" name="R07" value="F" id="R01_13">
                  F</label></td>
                </tr>
              </table>
          <span class="radioRequiredMsg">Please make a selection.</span></div>            <p>&nbsp;</p></td>
          <td width="340" valign="top"><p>The function <strong>print_r() </strong>will work only on single-value variables</p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED"><p>8</p></td>
          <td width="201" valign="top" bgcolor="#E0D9C4"><div id="spryradio8">
            <table width="200">
              <tr>
                <td><label>
                  <input type="radio" name="R08" value="T" id="R01_14">
                  T</label></td>
                </tr>
              <tr>
                <td><label>
                  <input type="radio" name="R08" value="F" id="R01_15">
                  F</label></td>
                </tr>
              </table>
          <span class="radioRequiredMsg">Please make a selection.</span></div>            <p>&nbsp;</p></td>
          <td width="340" valign="top"><p>Any text between the opening and closing of the &lt;canvas&gt; tag is meant to be seen only by non HTML5 browsers.</p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED"><p>9</p></td>
          <td width="201" valign="top" bgcolor="#E0D9C4"><div id="spryradio9">
            <table width="200">
              <tr>
                <td><label>
                  <input type="radio" name="R09" value="T" id="R01_16">
                  T</label></td>
                </tr>
              <tr>
                <td><label>
                  <input type="radio" name="R09" value="F" id="R01_17">
                  F</label></td>
                </tr>
              </table>
          <span class="radioRequiredMsg">Please make a selection.</span></div>            <p>&nbsp;</p></td>
          <td width="340" valign="top"><p>It is a better practice to link to a CDN distribution of jQuery than to a local copy</p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED"><p>10</p></td>
          <td width="201" valign="top" bgcolor="#E0D9C4"><div id="spryradio10">
            <table width="200">
              <tr>
                <td><label>
                  <input type="radio" name="R10" value="T" id="R01_18">
                  T</label></td>
                </tr>
              <tr>
                <td><label>
                  <input type="radio" name="R10" value="F" id="R01_19">
                  F</label></td>
                </tr>
              </table>
          <span class="radioRequiredMsg">Please make a selection.</span></div>            <p>&nbsp;</p></td>
          <td width="340" valign="top"><p>The link to jQuery must come before any link to a JavaScript script that uses jQuery</p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED"><p>11</p></td>
          <td width="201" valign="top" bgcolor="#E0D9C4"><div id="spryradio11">
            <table width="200">
              <tr>
                <td><label>
                  <input type="radio" name="R11" value="T" id="R01_20">
                  T</label></td>
                </tr>
              <tr>
                <td><label>
                  <input type="radio" name="R11" value="F" id="R01_21">
                  F</label></td>
                </tr>
              </table>
          <span class="radioRequiredMsg">Please make a selection.</span></div>            <p>&nbsp;</p></td>
          <td width="340" valign="top"><p>The first var in the script that draws on the canvas must be a var that declares the canvas itself, such as:  <strong>var c = $('#myCanvas');</strong></p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED"><p>12</p></td>
          <td width="201" valign="top" bgcolor="#E0D9C4"><div id="spryradio12">
            <table width="200">
              <tr>
                <td><label>
                  <input type="radio" name="R12" value="T" id="R01_22">
                  T</label></td>
                </tr>
              <tr>
                <td><label>
                  <input type="radio" name="R12" value="F" id="R01_23">
                  F</label></td>
                </tr>
              </table>
          <span class="radioRequiredMsg">Please make a selection.</span></div>            <p>&nbsp;</p></td>
          <td width="340" valign="top"><p>The second var in the script that draws on the canvas must be a var that declares the canvas&rsquo;s context, such as:  <strong>var ctx = c.get(0).getContext('2d');</strong></p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED"><p>13</p></td>
          <td width="201" valign="top" bgcolor="#E0D9C4"><div id="spryradio13">
            <table width="200">
              <tr>
                <td><label>
                  <input type="radio" name="R13" value="T" id="R01_24">
                  T</label></td>
                </tr>
              <tr>
                <td><label>
                  <input type="radio" name="R13" value="F" id="R01_25">
                  F</label></td>
                </tr>
              </table>
          <span class="radioRequiredMsg">Please make a selection.</span></div>            <p>&nbsp;</p></td>
          <td width="340" valign="top"><p><strong>moveTo()</strong> has 2 parameters: x and y</p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED"><p>14</p></td>
          <td width="201" valign="top" bgcolor="#E0D9C4"><div id="spryradio14">
            <table width="200">
              <tr>
                <td><label>
                  <input type="radio" name="R14" value="T" id="R01_26">
                  T</label></td>
                </tr>
              <tr>
                <td><label>
                  <input type="radio" name="R14" value="F" id="R01_27">
                  F</label></td>
                </tr>
              </table>
          <span class="radioRequiredMsg">Please make a selection.</span></div>            <p>&nbsp;</p></td>
          <td width="340" valign="top"><p><strong>fillStyle=&quot;rgba(200, 0, 0, 0.5)&rdquo; </strong>will give us a semi-transparent red fill</p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED"><p>15</p></td>
          <td width="201" valign="top" bgcolor="#E0D9C4"><div id="spryradio15">
            <table width="200">
              <tr>
                <td><label>
                  <input type="radio" name="R15" value="T" id="R01_28">
                  T</label></td>
                </tr>
              <tr>
                <td><label>
                  <input type="radio" name="R15" value="F" id="R01_29">
                  F</label></td>
                </tr>
              </table>
          <span class="radioRequiredMsg">Please make a selection.</span></div>            <p>&nbsp;</p></td>
          <td width="340" valign="top"><p>In the method  <strong>createLinearGradient(120,10,250,100);<br>
          </strong>the first 2 numbers are the x and y of the beginning of the gradient on the canvas</p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED"><p>16</p></td>
          <td width="201" valign="top" bgcolor="#E0D9C4"><div id="spryradio16">
            <table width="200">
              <tr>
                <td><label>
                  <input type="radio" name="R16" value="T" id="R01_30">
                  T</label></td>
                </tr>
              <tr>
                <td><label>
                  <input type="radio" name="R16" value="F" id="R01_31">
                  F</label></td>
                </tr>
              </table>
          <span class="radioRequiredMsg">Please make a selection.</span></div>            <p>&nbsp;</p></td>
          <td width="340" valign="top"><p>In the method  <strong>arcTo(150,20,150,70,50); <br>
          </strong>the last number is the width of the stroke</p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED"><p>17</p></td>
          <td width="201" valign="top" bgcolor="#E0D9C4"><div id="spryradio17">
            <table width="200">
              <tr>
                <td><label>
                  <input type="radio" name="R17" value="T" id="R01_32">
                  T</label></td>
                </tr>
              <tr>
                <td><label>
                  <input type="radio" name="R17" value="F" id="R01_33">
                  F</label></td>
                </tr>
              </table>
          <span class="radioRequiredMsg">Please make a selection.</span></div>            <p>&nbsp;</p></td>
          <td width="340" valign="top"><p><strong>status==200</strong> means the status is OK, found, the opposite of status 404</p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED"><p>18</p></td>
          <td width="201" valign="top" bgcolor="#E0D9C4"><div id="spryradio18">
            <table width="200">
              <tr>
                <td><label>
                  <input type="radio" name="R18" value="T" id="R01_34">
                  T</label></td>
                </tr>
              <tr>
                <td><label>
                  <input type="radio" name="R18" value="F" id="R01_35">
                  F</label></td>
                </tr>
              </table>
          <span class="radioRequiredMsg">Please make a selection.</span></div>            <p>&nbsp;</p></td>
          <td width="340" valign="top"><p>in order to use easings such as <strong>easeOutElastic</strong> we need to declare a <strong>timerInterval()</strong> object</p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED"><p>19</p></td>
          <td width="201" valign="top" bgcolor="#E0D9C4"><div id="spryradio19">
            <table width="200">
              <tr>
                <td><label>
                  <input type="radio" name="R19" value="T" id="R01_36">
                  T</label></td>
                </tr>
              <tr>
                <td><label>
                  <input type="radio" name="R19" value="F" id="R01_37">
                  F</label></td>
                </tr>
              </table>
          <span class="radioRequiredMsg">Please make a selection.</span></div>            <p>&nbsp;</p></td>
          <td width="340" valign="top"><p><strong>in a switch() </strong>statement, every <strong>case</strong> must end with a <strong>break;</strong></p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED"><p>20</p></td>
          <td width="201" valign="top" bgcolor="#E0D9C4"><div id="spryradio20">
            <table width="200">
              <tr>
                <td><label>
                  <input type="radio" name="R20" value="T" id="R01_38">
                  T</label></td>
                </tr>
              <tr>
                <td><label>
                  <input type="radio" name="R20" value="F" id="R01_39">
                  F</label></td>
                </tr>
              </table>
          <span class="radioRequiredMsg">Please make a selection.</span></div>            <p>&nbsp;</p></td>
          <td width="340" valign="top"><p>The <strong>closePath() </strong>method creates a path from the current point back to the starting point</p></td>
        </tr>
        <tr>
          <td width="51" valign="top" bgcolor="#EDEDED">&nbsp;</td>
          <td colspan="2" valign="top" bgcolor="#E0D9C4"><p>If you have any comments, message for the instructor, enter here:</p>
            <p>
              <label for="comments"></label>
              <textarea name="comments" cols="50" rows="6" id="comments"></textarea>
              <br>
          </p></td>
        </tr>
        <tr>
          <td valign="top" bgcolor="#EDEDED">&nbsp;</td>
          <td valign="top" bgcolor="#E3E3E3"><span id="sprycheckbox1"> By checking this box, I declare that I carefully checked all my answers, and am ready to submit the exam for grading
              <br>
              <br>
<input type="checkbox" name="agree" id="agree">
            
           <span class="checkboxRequiredMsg"><br>
           You must check this box before submitting the exam</span></span></td>
          <td align="right" valign="bottom" bgcolor="#E3E3E3"><input type="submit" name="button" id="button" value="Submit"></td>
        </tr>
      </table>
    </form>
    <!-- end .content --></div>
  <div class="footer">
    <p>All Rights Reserved®</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1");
var spryradio2 = new Spry.Widget.ValidationRadio("spryradio2");
var spryradio3 = new Spry.Widget.ValidationRadio("spryradio3");
var spryradio4 = new Spry.Widget.ValidationRadio("spryradio4");
var spryradio5 = new Spry.Widget.ValidationRadio("spryradio5");
var spryradio6 = new Spry.Widget.ValidationRadio("spryradio6");
var spryradio7 = new Spry.Widget.ValidationRadio("spryradio7");
var spryradio8 = new Spry.Widget.ValidationRadio("spryradio8");
var spryradio9 = new Spry.Widget.ValidationRadio("spryradio9");
var spryradio10 = new Spry.Widget.ValidationRadio("spryradio10");
var spryradio11 = new Spry.Widget.ValidationRadio("spryradio11");
var spryradio12 = new Spry.Widget.ValidationRadio("spryradio12");
var spryradio13 = new Spry.Widget.ValidationRadio("spryradio13");
var spryradio14 = new Spry.Widget.ValidationRadio("spryradio14");
var spryradio15 = new Spry.Widget.ValidationRadio("spryradio15");
var spryradio16 = new Spry.Widget.ValidationRadio("spryradio16");
var spryradio17 = new Spry.Widget.ValidationRadio("spryradio17");
var spryradio18 = new Spry.Widget.ValidationRadio("spryradio18");
var spryradio19 = new Spry.Widget.ValidationRadio("spryradio19");
var spryradio20 = new Spry.Widget.ValidationRadio("spryradio20");
var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1");
</script>
</body>
</html>
