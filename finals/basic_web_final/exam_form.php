<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Basic Web- Final exam</title>
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
    <h1>Basic Web- Final exam</h1>
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
        	<td valign="top" bgcolor="#EDEDED"><p>1</p></td>
        	<td valign="top" bgcolor="#E0D9C4"><div id="spryradio1">
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
        		<span class="radioRequiredMsg">Please make a selection.</span></div>
        		<p><br>
        			</p></td>
        	<td valign="top" bgcolor="#E3E3E3"><p>in CSS, a rule that is named * applies to ALL the elements in the page.</p></td>
        	</tr>
        <tr>
        	<td valign="top" bgcolor="#EDEDED"><p>2</p></td>
        	<td valign="top" bgcolor="#E0D9C4"><div id="spryradio2">
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
        		<span class="radioRequiredMsg">Please make a selection.</span></div>
        		<p>&nbsp;</p></td>
        	<td valign="top" bgcolor="#E3E3E3"><p>&lt;ul&gt; is a list, that by default shows bulleted items.</p></td>
        	</tr>
        <tr>
        	<td valign="top" bgcolor="#EDEDED"><p>3</p></td>
        	<td valign="top" bgcolor="#E0D9C4"><div id="spryradio3">
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
        		<span class="radioRequiredMsg">Please make a selection.</span></div>
        		<p>&nbsp;</p></td>
        	<td valign="top" bgcolor="#E3E3E3"><p>the attribute<br>
        			<strong>box-sizing: border-box;        		</strong><br>
        			will cause borders to show on the inside of boxes<br>
        	</p></td>
        	</tr>
        <tr>
        	<td valign="top" bgcolor="#EDEDED"><p>4</p></td>
        	<td valign="top" bgcolor="#E0D9C4"><div id="spryradio4">
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
        		<span class="radioRequiredMsg">Please make a selection.</span></div>
        		<p>&nbsp;</p></td>
        	<td valign="top" bgcolor="#E3E3E3"><p>we give &lt;li&gt; the attribute<br>
        			<strong>display:block;</strong><br>
        			to make it behave like a box
        	</p></td>
        	</tr>
        <tr>
        	<td valign="top" bgcolor="#EDEDED"><p>5</p></td>
        	<td valign="top" bgcolor="#E0D9C4"><div id="spryradio5">
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
        		<span class="radioRequiredMsg">Please make a selection.</span></div>
        		<p>&nbsp;</p></td>
        	<td valign="top" bgcolor="#E3E3E3"><p>the attribute<br>
        			<strong>clear:both;<br>
        			</strong>is used in order to stop (terminate) a float </p></td>
        	</tr>
        <tr>
        	<td valign="top" bgcolor="#EDEDED"><p>6</p></td>
        	<td valign="top" bgcolor="#E0D9C4"><div id="spryradio6">
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
        		<span class="radioRequiredMsg">Please make a selection.</span></div>
        		<p>&nbsp;</p></td>
        	<td valign="top" bgcolor="#E3E3E3"><p>A CSS style called <strong class="myemph">#mydiv a</strong>    will apply to all the links in the site, no matter where they are located</p></td>
        	</tr>
        <tr>
        	<td valign="top" bgcolor="#EDEDED"><p>7</p></td>
        	<td valign="top" bgcolor="#E0D9C4"><div id="spryradio7">
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
        		<span class="radioRequiredMsg">Please make a selection.</span></div>
        		<p>&nbsp;</p></td>
        	<td valign="top" bgcolor="#E3E3E3"><p><strong>margin: 0 auto;</strong></p>
				<p>is used in order to clear floating elements</p></td>
        	</tr>
        <tr>
        	<td valign="top" bgcolor="#EDEDED"><p>8</p></td>
        	<td valign="top" bgcolor="#E0D9C4"><div id="spryradio8">
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
        		<span class="radioRequiredMsg">Please make a selection.</span></div>
        		<p>&nbsp;</p></td>
        	<td valign="top" bgcolor="#E3E3E3"><p>The name of a class CSS style has to start with #</p></td>
        	</tr>
        <tr>
        	<td valign="top" bgcolor="#EDEDED"><p>9</p></td>
        	<td valign="top" bgcolor="#E0D9C4"><div id="spryradio9">
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
        		<span class="radioRequiredMsg">Please make a selection.</span></div>
        		<p>&nbsp;</p></td>
        	<td valign="top" bgcolor="#E3E3E3"><p>The names of id CSS styles have to start with &nbsp;  <strong>. </strong>(period)</p></td>
        	</tr>
        <tr>
        	<td valign="top" bgcolor="#EDEDED"><p>10</p></td>
        	<td valign="top" bgcolor="#E0D9C4"><div id="spryradio10">
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
        		<span class="radioRequiredMsg">Please make a selection.</span></div>
        		<p>&nbsp;</p></td>
        	<td valign="top" bgcolor="#E3E3E3"><p>When we style a navigation bar inside <strong>&lt;ul&gt;,</strong> we usually write a css rule that gives the <strong>&lt;ul</strong>&gt;  tag the attribute<br>
					<strong class="myemph">list-style-type:   none;</strong></p></td>
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
        	<td width="640" valign="top" bgcolor="#E3E3E3"><p>When naming web files you can not use capital letters</p></td>
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
          <td width="640" valign="top" bgcolor="#E3E3E3"><p><strong>background-color</strong> will show when there is no background image to cover it.</p></td>
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
          <td width="640" valign="top" bgcolor="#E3E3E3"><p>The CSS attribute <strong class="myemph">float</strong> can only apply to divs</p></td>
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
          <td width="640" valign="top" bgcolor="#E3E3E3"><p>padding is on the outside of the selector, margin is on the inside</p></td>
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
          <td width="640" valign="top" bgcolor="#E3E3E3"><p>in the <strong>a:hover</strong> rule we need to specify only the changes from <strong>a</strong></p></td>
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
          <td width="640" valign="top" bgcolor="#E3E3E3"><p>if a css element has the attribute <strong class="myemph">display:block</strong> it will always float right </p></td>
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
          <td width="640" valign="top" bgcolor="#E3E3E3"><p>When we create a navigation bar   using a <strong>ul</strong> , we redefine the li   tag to <strong>nav:showLink;</strong></p></td>
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
          <td width="640" valign="top" bgcolor="#E3E3E3"><p>in order for links not to show an underline, the attribute <strong class="myemph">text-decoration</strong> must be set to<strong> </strong><strong class="myemph">none</strong></p></td>
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
          <td width="640" valign="top" bgcolor="#E3E3E3"><p>the first file in a site needs to be called index.html</p></td>
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
          <td width="640" valign="top" bgcolor="#E3E3E3"><p>If we write a css rule that looks like:<br>
				<span class="myemph"><strong>*{</strong><br>
				<strong>padding:0px</strong>;<br>
				<strong>}</strong></span><br>
then all the tags and selectors will inherit this attribute unless specified   otherwise</p></td>
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
var spryradio4 = new Spry.Widget.ValidationRadio("spryradio4");
var spryradio3 = new Spry.Widget.ValidationRadio("spryradio3");
var spryradio2 = new Spry.Widget.ValidationRadio("spryradio2");
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1");
var spryradio10 = new Spry.Widget.ValidationRadio("spryradio10");
var spryradio9 = new Spry.Widget.ValidationRadio("spryradio9");
var spryradio8 = new Spry.Widget.ValidationRadio("spryradio8");
var spryradio7 = new Spry.Widget.ValidationRadio("spryradio7");
var spryradio6 = new Spry.Widget.ValidationRadio("spryradio6");
var spryradio5 = new Spry.Widget.ValidationRadio("spryradio5");
</script>
</body>
</html>
