<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<script type="text/javascript" src="source-of-jquery.js"></script>
<script type="text/javascript" src="source-of-lightbox-plugin.js"></script>
<script type="text/javascript" src="source-of-script-with-your-jquery-code-in.js"></script>
	<?php
		$title = 'Unemployment Insurance Data';
		$nav = "";
		$path = "../";
	    $ybar="<a href='index.asp'>UI</a>&nbsp;>&nbsp;Dashboard" ;
	?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Description" content="UI Data Summary">
<meta name="Keywords" content="unemployment, Unemployment Insurance, UI, OUI, Office of Unemployment Insurance, 
Department of Labor, Doleta, ETA, Employment Training Administration" />
<title> UI Data Summary, Employment &amp; Training Administration (ETA) - U.S. Department of Labor</title>	
<link href="../css/style-layout.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="../css/style-layout-ie7.css" rel='stylesheet' type='text/css' media='screen' />
	<link href="../css/style-screen.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="../css/style-print.css" rel="stylesheet" type="text/css" media="print" />
<script type="text/JavaScript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://webapps.dol.gov/FSPublic/Scripts/W_Helpful.js" type="text/JavaScript"></script>
<script src="assets/js/backup.js" type="text/JavaScript"></script>
<link href="https://webapps.dol.gov/FSPublic/Content/W_Helpful.css" rel="stylesheet" />
</head>
<body>
<?php include($path . "include/metatag.inc"); ?>



<div id="wrapper">
  <?php include($path . "include/header.inc"); ?>
  <div id="container">
  	<?php include($path . "include/localMain.inc"); ?>
    <div id="content"><a name="#content" id="#content"></a>
      <h1><?php echo $title; ?></h1>
      <!---- Content starts ---->  
<p style="text-indent: 2rem; ">The UI Data Summary is produced quarterly from state-reported data contained in 
the Unemployment Insurance Data Base (UIDB) as well as UI-related data from outside 
sources (e.g., Bureau of Labor Statistics data on employment and unemployment and U.S. 
Department of Treasury data on state UI trust fund activities). This report is intended 
to provide the user with a quick overview of the status of the UI system at the national and 
state levels.  If you are having any problems loading the pdf format data charts on this page, 
please contact <a href="mailto:Kim.Hyunchung@dol.gov">Hyunchung Kim</a>.<br /><br />

<font color="#990000">*</font>Attention Data Summary Users – Due to the revised calculation for weeks claimed made back in the 3rd quarter of 2006, the Insured Unemployment Rate (IUR) calculations were inadvertently changed as well. The files have now been updated to use calculations consistent with the published average weekly insured unemployed values where claims are reported in the state of residence. These changes affect IURs from the 3rd quarter of 2006 through the 1st quarter of 2008.

</p>
<strong>Glossary of Data <a href="/unemploy/DEF.pdf">Definitions</a>:</strong>
</br>
</br>
<!-- PHPfinalTABLE -->

    	
<!------Table starts-------
<table>
	<tr>
		<td colspan="2">
			<input type="radio" name="OrderBy" value="OrderBy_Year" id="OrderBy_Year" checked="checked" class="chk-display" />
			<label for="OrderBy_Year">Year</label>
			
		</td>
		<td>
			<input type="radio" name="OrderBy" value="OrderBy_State" id="OrderBy_State" checked="checked" class="chk-display" />
			<label for="OrderBy_State">State</label><br/>
			
		</td>
	</tr>
	<tr>
		<td colspan="2" style="padding-top: 1em;">
			Catagory:
			<br>
			<select name="category">
				<option value="0">Please select a Catagory</option>
				<option value="1" rel="UsSumTable">US Summary Table</option>
				<option value="2" rel="CharDat">Charts</option>
				</select>
		</td>
	</tr>
	<tr>
	<select id="ddl2">
	</select>
</tr>
		</td>
				
	
	</tr>
</table>
Table ends------->

<!-- Mlyard's example -->
<script type="text/javascript">

    // function configureDropDownLists(ddl1, ddl2) {
    //     var USSumdat = ['Summary Benefits Data', 'Summary Financial Data', 'Benefits & Duration Data', 'Summary Labor Force Data', 'Wage and Tax Rate Data'];
    //     var Chartdat = ['Regular Benefits', 'Trust Fund Balance', 'Revenues', 'Regular AWBA', 'Initial Claims', 'Weeks Claimed', 'First Payments', 'Exhaustions'];
    //     var years = ['2015', '2016', '2017'];
       
    //     switch (ddl1.value) {
    //         case 'USSumdat':
    //             ddl2.options.length = 0;
    //             for (i = 0; i < USSumdat.length; i++) {
    //                 createOption(ddl2, USSumdat[i], USSumdat[i]);
    //             }

    //             break;
    //         case 'Chartdat':
    //             ddl2.options.length = 0;
    //             for (i = 0; i < Chartdat.length; i++) {
    //                 createOption(ddl2, Chartdat[i], Chartdat[i]);
    //             }
    //             break;
    //         case 'Years':
    //             ddl3.options.length = 0;
    //             for (i = 0; i < years.length; i++) {
    //                 createOption(ddl3, years[i], years[i]);
    //             }
    //             break;
    //         default:
    //             ddl2.options.length = 0;

    //             break;
    //     }

    //     function createOption(ddl, text, value) {
    //         var opt = document.createElement('option');
    //         opt.value = value;
    //         opt.text = text;
    //         ddl.options.add(opt);
    //     }
    // } 
    // function yearOption(){
    // 	$(":submit").click(function () { alert("sdfsdfd");}
    // }
    function submitData() {
    	alert("fjldahfdsj");
    	
        // var e = document.getElementById("state_Select");
        // var subcata = e.options[e.selectedIndex].value;
        // // alert(subcata);

        // var e = document.getElementById("states_enabled");
        // var states = e.options[e.selectedIndex].value;
      
    
        
        // var e = document.getElementById("endYear");
        // var endYearz = e.options[e.selectedIndex].value;
        //  alert(endYearz);

        // var filename = subcata + states + strtYearz+endYearz + ".pdf";
        // //alert(filename);
        // window.open(filename);

    }

   
</script>

    

<table bgcolor="#dbe7fd">
	<form id="my-form" action="test.php" onSubmit="test.php" method="post">
	<tr>
		<td>
		Sort by:
		</td>
	</tr>
	<tr id="selection">
		<td colspan="1">
			
<div id="test">
      <input type="radio" name="category" value="Year" />Quarter/Year 
      <input type="radio" name="category" value="State" />State
      
</div>
			
		</td>
	</tr>
	<tr>
		<td >
			<div id="selectList">
			Category:
			<br>
			<select id="year_Select" required>
					 <option value="">Please select a category</option>
    				<option value="Labor Force">Labor Force</option>
   					 <option value=">Claim Data">Claim Data</option>
   					<option value="Benefits and Duration">Benefit and Duration</option>
  					 <option value="Trust Fund">Trust Fund</option>
   					<option value="Wage and Tax Rate">Wage and Tax Rate</option>
</select>
</div>
<select id="state_Select" disabled="true"style="display:none;"required>
     				<option value="">Please select a category</option>
    				<option value="All Categories">All Categories</option>
    				<option value="Labor Force Data">Labor Force Data</option>
    				<option value="Benefits paid">Benefits paid</option>
    				<option value="Claims Data">Claims Data</option>
    				<option value="Wage Data">Wage Data</option>
    				<option value="Tax Revene">Tax Revene</option>
    				<option value="Trust Fund Data">Trust Fund Data </option>
    				<option value="Extended Benefits">Extended Benefits</option>
    				<option value="Loans">Loans</option>
</select>
		</td>
	</tr>
		

	<tr>
		<td>
		<div id="stateSelection">
		<br>
			State(s): <span id="states_disable"  disabled="true" style="display:none;" >
					US Total
				</span>
			<br>
				<select id="states_enabled" name="optionState" ;"multiple required>
					<option value="UStot">US Total</option>
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Conneticut</option>
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
					<option value="MN">Minesotta</option>
					<option value="MS">Misissippi</option>
					<option value="MS">Misouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="ND">Nevada</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NY">New York</option>
					<option value="NC">North Carolina</option>
					<option value="NK">North Dakota</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="OR">Pennsylvania</option>
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
				</select>
			
			</div>
		</td>
</tr>
	
<tr>
	<td>
		Please select a Year range:
	</td>
</tr>
	<div id="yearRange">
	<tr>
		<td>
			Starts:
			<br>
				<select id="startYears" name="firstYear" required>
					<option value="">-Select-</option>
					<option value="2017.4">Q4 2017</option>
					<option value="2017.3">Q3 2017</option>
					<option value="2017.2">Q2 2017</option>
					<option value="2017.1">Q1 2017</option>
					
					<option value="2016.4">Q4 2016</option>
					<option value="2016.3">Q3 2016</option>
					<option value="2016.2">Q2 2016</option>
					<option value="2016.1">Q1 2016</option>
					
					<option value="2015.4">Q4 2015</option>
					<option value="2015.3">Q3 2015</option>
					<option value="2015.2">Q2 2015</option>
					<option value="2015.1">Q1 2015</option>
					
					<option value="2014.4">Q4 2014</option>
					<option value="2014.3">Q3 2014</option>
					<option value="2014.2">Q2 2014</option>
					<option value="2014.1">Q1 2014</option>
					
					<option value="2013.4">Q4 2013</option>
					<option value="2013.3">Q3 2013</option>
					<option value="2013.2">Q2 2013</option>
					<option value="2013.1">Q1 2013</option>
					
					<option value="2012.4">Q4 2012</option>
					<option value="2012.3">Q3 2012</option>
					<option value="2012.2">Q2 2012</option>
					<option value="2012.1">Q1 2012</option>
				
				</select>
				
			
		</td>
		<td>
			Ends:
			<br>
				<select id="endYear" name="lastYear" required>
					<option value="" >-Select-</option>
					<option value="2017.4">Q4 2017</option>
					<option value="2017.3">Q3 2017</option>
					<option value="2017.2">Q2 2017</option>
					<option value="2017.1">Q1 2017</option>
					
					<option value="2016.4">Q4 2016</option>
					<option value="2016.3">Q3 2016</option>
					<option value="2016.2">Q2 2016</option>
					<option value="2016.1">Q1 2016</option>
					
					<option value="2015.4">Q4 2015</option>
					<option value="2015.3">Q3 2015</option>
					<option value="2015.2">Q2 2015</option>
					<option value="2015.1">Q1 2015</option>
					
					<option value="2014.4">Q4 2014</option>
					<option value="2014.3">Q3 2014</option>
					<option value="2014.2">Q2 2014</option>
					<option value="2014.1">Q1 2014</option>
					
					<option value="2013.4">Q4 2013</option>
					<option value="2013.3">Q3 2013</option>
					<option value="2013.2">Q2 2013</option>
					<option value="2013.1">Q1 2013</option>
					
					<option value="2012.4">Q4 2012</option>
					<option value="2012.3">Q3 2012</option>
					<option value="2012.2">Q2 2012</option>
					<option value="2012.1">Q1 2012</option>
					
				</select>
			
		</td>
	</tr>
	</div>
	<tr>
		<td>
			<p id="yearError" style="color:red;"></p>
			<input type="submit" value="Submit" onclick="submitData();" ></input>
		</td>
	</tr>
</form>
</table>
<br>
<br>
Note: Blank cells appearing in any section of this report indicates that information is unavailable.

<p>To view PDF files you need Acrobat Reader. (<a href= "<?=$path ?>redirect.asp?link=get.adobe.com/reader/?promoid=BUIGO">Download Adobe Reader</a>.)</p>
<!---- Content ends  --->
    </div>
  </div>
 
  <?php include($path . "include/footer.inc"); ?>
</div>
<script src="test.js"></script>
</body>
</html>
