<?php
	$sectionA = array(
		''=> '&#8212&#8212&#8212&#8212&#8212&#8212&#8212',
		'Labor Force' => 'Labor Force',
		'Claim Data' => 'Claim Data',
		'Benefit and Duration' => 'Benefit and Duration',
		'Trust Fund' => 'Trust Fund',
		'Wage and Tax Rate' => 'Wage and Tax Rate',
		
	);
	
	$sectionB = array(
		'' => '&#8212&#8212&#8212&#8212&#8212&#8212&#8212&#8212',
		'All Categories' => 'All Categories',
		'Labor Force Data' => 'Labor Force Data',
		'Benefits paid' => 'Benefits paid',
		'Claims Data' => 'Claims Data',
		'Wage Data' => 'Wage Data',
		'Tax Revene' => 'Tax Revene',
		'Trust Fund Data' => 'Trust Fund Data',
		'Extended Benefits' => 'Extended Benefits',
		'Loan' => 'Loan'
	
	);
	
	$states = array(
		'US' => 'All States',
		'AL' => 'Alabama',
		'AK' => 'Alaska',
		'AZ' => 'Arizona',
		'AR' => 'Arkansas',
		'CA' => 'California',
		'CO' => 'Colorado',
		'CT' => 'Connecticut',
		'DE' => 'Delaware',
		'DC' => 'District of Columbia',
		'FL' => 'Florida',
		'GA' => 'Georgia',
		'HI' => 'Hawaii',
		'ID' => 'Idaho',
		'IL' => 'Illinois',
		'IN' => 'Indiana',
		'IA' => 'Iowa',
		'KS' => 'Kansas',
		'KY' => 'Kentucky',
		'LA' => 'Louisiana',
		'ME' => 'Maine',
		'MD' => 'Maryland',
		'MA' => 'Massachusetts',
		'MI' => 'Michigan',
		'MN' => 'Minnesota',
		'MS' => 'Mississippi',
		'MO' => 'Missouri',
		'MT' => 'Montana',
		'NE' => 'Nebraska',
		'NV' => 'Nevada',
		'NH' => 'New Hampshire',
		'NJ' => 'New Jersey',
		'NM' => 'New Mexico',
		'NY' => 'New York',
		'NC' => 'North Carolina',
		'ND' => 'North Dakota',
		'OH' => 'Ohio',
		'OK' => 'Oklahoma',
		'OR' => 'Oregon',
		'PA' => 'Pennsylvania',
		'PR' => 'Puerto Rico',
		'RI' => 'Rhode Island',
		'SC' => 'South Carolina',
		'SD' => 'South Dakota',
		'TN' => 'Tennessee',
		'TX' => 'Texas',
		'UT' => 'Utah',
		'VT' => 'Vermont',
		'VI' => 'Virgin Islands',
		'VA' => 'Virginia',
		'WA' => 'Washington',
		'WV' => 'West Virginia',
		'WI' => 'Wisconsin',
		'WY' => 'Wyoming'
	);
?>
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
<script src="assets/js/validation.js" type="text/JavaScript"></script>
<script src="assets/js/validaton2.js" type="text/JavaScript"></script>
<link href="https://webapps.dol.gov/FSPublic/Content/W_Helpful.css" rel="stylesheet" />
<img alt="header" src="assets/image/header.png" width="100%" height="100%">
</head>
<body >
<!-- php include($path . "include/metatag.inc"); -->
<div id="wrapper">
  <!-- php include($path . "include/header.inc");  -->
  <div id="container">
  	<!-- php include($path . "include/localMain.inc"); -->
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
<!-- 
<font color="#990000">*</font>Attention Data Summary Users – Due to the revised calculation for weeks claimed made back in the 3rd quarter of 2006, the Insured Unemployment Rate (IUR) calculations were inadvertently changed as well. The files have now been updated to use calculations consistent with the published average weekly insured unemployed values where claims are reported in the state of residence. These changes affect IURs from the 3rd quarter of 2006 through the 1st quarter of 2008.
</p>
<strong>Glossary of Data <a href="/unemploy/DEF.pdf">Definitions</a>:</strong> -->
</br>
</br>
	<form id="dataSummary" action="submitForm.php" method="post"onsubmit="return validateForm()">
	<table style="background-color: #DBE7FD;margin-left:20%; 
    margin-right:auto; ">
		<tr>
		<td>
		Sort by:
		</td>
	</tr>
	<tr>
		<td colspan="1">
			<input type="radio" name="OrderBy" value="OrderBy_Year" id="OrderBy_Year" onclick="selectYear();"  class="chk-display" required/>
			<label for="OrderBy_Year">Quarter/Year</label>
		</td>
		<td>
			<input type="radio" name="OrderBy" value="OrderBy_State" id="OrderBy_State" onclick="selectState();" class="chk-display" required/>
			<label for="OrderBy_State">State</label><br/>
       </td>
	</tr>
		<tr>
			<td colspan="2">
				<label for="category" >Please select a category: </label><br />
				<p id="categoryError" style="color:red;"></p>
				<!-- Year Option -->
				<select aria-label="year Select" id="year_Select" name ="year_Select"disabled="true" style="display:inline-block; " required  >
					
				<?php
					foreach($sectionA as $key => $value){
						echo '<option value="', $key, '">', $value, '</option>';
					}
				?>
				</select>
				<!-- State Option -->
				<select id="state_Select" aria-label="state Select" name ="state_Select" disabled="true"style="display:none;" required>
					<label></label>
					<?php
						
						foreach($sectionB as $key => $value){
							echo '<option value="', $key, '">', $value, '</option>';
							}
					?>
				</select>
				
				<br />
			</td>
		</tr>
				<!-- State List Selection -->
		<tr>
			<td colspan="2">
				
				<label for="state">State:</label> <br />
				<br>
			<span id="states_disable"  style="visibility:hidden;" >
					<input type="text"  name="USTot" placeholder="All States" disabled="disabled" style ="width:140px;">
				</span>
			<br>
				<select aria-label="statelist Select" name="state" id="state" size="4" multiple="multiple" style="visibility:hidden;" >
					
				<?php
					foreach($states as $key => $value){
						echo '<option value="', $key, '"> ', $value, '</option>', PHP_EOL;
					}
				?>
				</select>
				<br />
				<br />
			</td>
		<tr>
		<td>
			Starts:
			<br>
				<select aria-label="Start yearlist Select" id="startYears" name="firstYear" required>
					
					<option value="">&#8212;</option>
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
				<select aria-label="end yearlist Select" id="endYear" name="lastYear" required>
					
					<option value="">&#8212;</option>
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
	<p id="yearError" style="color:red;"></p>
		<tr>
			<td>
				<input type="submit" id="submit" name="submit"  value="Submit" style="float: right;" />
			</td>
		</tr>
	</table>
	</form>
<!--  content end    -->
	</div>
	</div>
	<?php include($path . "include/footer.inc"); ?>
</div>
</body>
</html>