


<SCRIPT LANGUAGE="Javascript">

        function show() {
                document.getElementById('hideme').style.visibility='visible';
                return true;
        }

        function hide() {
                document.getElementById('hideme').style.visibility='hidden';
                return true;
        }

</script>

 
	


<?php
print("<table bgcolor='#dbe7fd'>\n");
print("<tr><td>\n");
print("<form name = \"choice\" method=\"post\" action=\"5159report.php\">\n");
//print("<font STYLE=\"font-family: Verdana, Arial, Helvetica, Sans-serif; font-size: 10pt; color: black\">\n");
?>
<div align=left>Select:<br>
<input type="radio" name="level" value="state" onclick="show();" alt="Choose State">State
<input type="radio" name="level" value="us" onclick="hide();" alt="Choose US Total">US Total
</div>
<br><br>


<div id="hideme">
Please select State(s):<br>
<select  NAME="states[]" multiple>
     	<option value="All">All States</option> 
        <option value="AL">Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AR">Arkansas</option>
        <option value="AZ">Arizona</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="DC">District of Columbia</option>
        <option value="FL">Florida</option>
        <option value="GA">Georgia</option>
        <option value="HI">Hawaii</option>
        <option value="ID">Idaho</option>
        <option value="IL">Illinois</option>
        <option value="IN">Indiana</option>
        <option value="IA">Iowa</option>
        <option value="KS">Kansas</option>
        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>
        <option value="ME">Maine</option>
        <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option>
        <option value="MI">Michigan</option>
        <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>
        <option value="MO">Missouri</option>
        <option value="MT">Montana</option>
        <option value="NC">North Carolina</option>
        <option value="ND">North Dakota</option>
        <option value="NE">Nebraska</option>
        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>
        <option value="NM">New Mexico</option>
        <option value="NV">Nevada</option>
        <option value="NY">New York</option>
        <option value="OH">Ohio</option>
        <option value="OK">Oklahoma </option>
		<option value="OR">Oregon</option>  
        <option value="PA">Pennsylvania</option>
        <option value="PR">Puerto Rico</option>
        <option value="RI">Rhode Island</option>
        <option value="SC">South Carolina</option>
        <option value="SD">South Dakota</option>
        <option value="TN">Tennessee</option>
        <option value="TX">Texas</option>   
        <option value="UT">Utah</option>
        <option value="VT">Vermont</option> 
        <option value="VI">Virgin Islands</option>
        <option value="VA">Virginia</option>   
        <option value="WA">Washington</option>
        <option value="WV">West Virginia</option>
        <option value="WI">Wisconsin</option>
        <option value="WY">Wyoming</option>
    </font>
    </select>
</div>
<br><br>
<?php
print("Please select a date range(YYYY/MM):<br>\n");
print("Starts:<br>\n");
print("<select NAME=\"strtyear\">\n alt=\"select Start year\" ");

//print("<font STYLE=\"font-family: Verdana, Arial, Helvetica, Sans-serif; font-size: 10pt; color: black\">\n");
   	
$strt_year = 1971;
$year = date("Y");
while($strt_year <= $year) {
print("<option value=$year>$year</option>\n");
$year--;
}	
print("</font>\n");
print("</select>\n");

print("<select NAME=\"strtmonth\">\n alt=\"select Start month\" ");
//print("<font STYLE=\"font-family: Verdana, Arial, Helvetica, Sans-serif; font-size: 10pt; color: black\">\n");


print("<option value='01/01'>1</option>\n");
print("<option value='02/01'>2</option>\n");
print("<option value='03/01'>3</option>\n");
print("<option value='04/01'>4</option>\n");
print("<option value='05/01'>5</option>\n");
print("<option value='06/01'>6</option>\n");
print("<option value='07/01'>7</option>\n");
print("<option value='08/01'>8</option>\n");
print("<option value='09/01'>9</option>\n");
print("<option value='10/01'>10</option>\n");
print("<option value='11/01'>11</option>\n");
print("<option value='12/01'>12</option>\n");


print("</font>\n");
print("</select>\n");
print("</font>\n");
print("<br><br>\n");

//print("<font STYLE=\"font-family: Verdana, Arial, Helvetica, Sans-serif; font-size: 10pt; color: black\">\n");
print("Ends:</font><br>\n");
print("<select NAME=\"endyear\">\n  alt=\"select End year\"");
//print("<font STYLE=\"font-family: Verdana, Arial, Helvetica, Sans-serif; font-size: 10pt; color: black\">\n");
  
$end_year = 1971;
$year = date("Y");
while($end_year <= $year) {
print("<option value=$year>$year</option>\n");
$year--;
}
print("</font>\n");
print("</select>\n");


print("<select NAME=\"endmonth\">\n alt=\"select End month\" ");
//print("<font STYLE=\"font-family: Verdana, Arial, Helvetica, Sans-serif; font-size: 10pt; color: black\">\n");
    
print("<option value='01/31'>1</option>\n");
print("<option value='02/28'>2</option>\n");
print("<option value='03/31'>3</option>\n");
print("<option value='04/30'>4</option>\n");
print("<option value='05/31'>5</option>\n");
print("<option value='06/30'>6</option>\n");
print("<option value='07/31'>7</option>\n");
print("<option value='08/31'>8</option>\n");
print("<option value='09/30'>9</option>\n");
print("<option value='10/31'>10</option>\n");
print("<option value='11/30'>11</option>\n");
print("<option value='12/31'>12</option>\n");

print("</font>\n");
print("</select>\n");
print("</font>\n");
print ("<br><br>\n");

print ("<INPUT TYPE=SUBMIT NAME=\"submit\" VALUE=\"Submit\">\n");
//End Content Here
print ("</font>\n");
print ("</td></tr></table>\n");
print ("<br><br>\n");
?>

