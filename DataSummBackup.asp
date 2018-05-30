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
<p>The UI Data Summary is produced quarterly from state-reported data contained in 
the Unemployment Insurance Data Base (UIDB) as well as UI-related data from outside 
sources (e.g., Bureau of Labor Statistics data on employment and unemployment and U.S. 
Department of Treasury data on state UI trust fund activities). This report is intended 
to provide the user with a quick overview of the status of the UI system at the national and 
state levels.  If you are having any problems loading the pdf format data charts on this page, 
please contact <a href="mailto:Kim.Hyunchung@dol.gov">Hyunchung Kim</a>.<br /><br />

<font color="#990000">*</font>Attention Data Summary Users – Due to the revised calculation for weeks claimed made back in the 3rd quarter of 2006, the Insured Unemployment Rate (IUR) calculations were inadvertently changed as well. The files have now been updated to use calculations consistent with the published average weekly insured unemployed values where claims are reported in the state of residence. These changes affect IURs from the 3rd quarter of 2006 through the 1st quarter of 2008.</p>
<strong>Glossary of Data <a href="/unemploy/DEF.pdf">Definitions</a>:</strong>
<br>

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
     function configureDropDownLists(ddl1,ddl2) {
    var USSumdat = ['Summary Benefits Data', 'Summary Financial Data', 'Benefits & Duration Data', 'Summary Labor Force Data', 'Wage and Tax Rate Data' ];
    var Chartdat = ['Regular Benefits', 'Trust Fund Balance', 'Revenues', 'Regular AWBA', 'Initial Claims', 'Weeks Claimed', 'First Payments', 'Exhaustions'];
    var years = ['2015', '2016', '2017'];

    switch (ddl1.value) {
        case 'USSumdat':
            ddl2.options.length = 0;
            for (i = 0; i < USSumdat.length; i++) {
                createOption(ddl2, USSumdat[i], USSumdat[i]);
            }
            
            break;
        case 'Chartdat':
            ddl2.options.length = 0; 
        for (i = 0; i < Chartdat.length; i++) {
            createOption(ddl2, Chartdat[i], Chartdat[i]);
            }
            break;
        case 'Years':
            ddl3.options.length = 0;
            for (i = 0; i < years.length; i++) {
                createOption(ddl3, years[i], years[i]);
            }
            break;
            default:
                ddl2.options.length = 0;
				
            break;
			}

    function createOption(ddl, text, value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        ddl.options.add(opt);
    }
	}function retPDF(){
		
		var e = document.getElementById("ddl2");
		var subcata = e.options[e.selectedIndex].value;
		//alert(subcata);
		
		var e = document.getElementById("states");
		var states = e.options[e.selectedIndex].value;
		//alert(states);
		
		var e = document.getElementById("ddl3");
		var yearz = e.options[e.selectedIndex].value;
		//alert(yearz);
		
		
		
		var filename = subcata+states+yearz+".pdf";
		//alert(filename);
		window.open(filename);
		
	}

</script>


<table bgcolor="#dbe7fd">
	<form id="my-form" method="post">
	<tr>
		<td>
		Sort by:
		</td>
	</tr>
	<tr>
		<td colspan="1">
			<input type="radio" name="OrderBy" value="OrderBy_Year" id="OrderBy_Year" checked="checked" class="chk-display" />
			<label for="OrderBy_Year">Year</label>
			
		</td>
		<td>
			<input type="radio" name="OrderBy" value="OrderBy_State" id="OrderBy_State"  class="chk-display" />
			<label for="OrderBy_State">State</label><br/>
			
		</td>
	</tr>
	<tr>
		<td>
			Catagory:
			<br>
			<select id="ddl" onchange="configureDropDownLists(this,document.getElementById('ddl2'))">
				<option value="">Please select a catagory</option>
				<option value="USSumdat">US Summary Table</option>
				<!-- <option value="Chartdat">Charts</option> -->
			</select>
		</td>
	</tr>
	<tr>
		<td>
		
		<br>
			Sub-Catagory:
			<br>
			<select id="ddl2">
			</select>
		</td>
	</tr>	

	<tr>
		<td>
		
		<br>
			State(s):
			<br>
				<select id="states" multiple>
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
		</td>
</tr>
	
<tr>
	<td>
		Please select a Year range:
	</td>
</tr>
	
	<tr>
		<td>
			Starts:
			<br>
				<select id="strtYear">
					<option value="">                </option>
					<option value="2017q4">Q4 2017</option>
					<option value="2017q3">Q3 2017</option>
					<option value="2017q2">Q2 2017</option>
					<option value="2017q1">Q1 2017</option>
					
					<option value="2016q4">Q4 2016</option>
					<option value="2016q3">Q3 2016</option>
					<option value="2016q2">Q2 2016</option>
					<option value="2016q1">Q1 2016</option>
					
					<option value="2015q4">Q4 2015</option>
					<option value="2015q3">Q3 2015</option>
					<option value="2015q2">Q2 2015</option>
					<option value="2015q1">Q1 2015</option>
					
					<option value="2014q4">Q4 2014</option>
					<option value="2014q3">Q3 2014</option>
					<option value="2014q2">Q2 2014</option>
					<option value="2014q1">Q1 2014</option>
					
					<option value="2013q4">Q4 2013</option>
					<option value="2013q3">Q3 2013</option>
					<option value="2013q2">Q2 2013</option>
					<option value="2013q1">Q1 2013</option>
					
					<option value="2012q4">Q4 2012</option>
					<option value="2012q3">Q3 2012</option>
					<option value="2012q2">Q2 2012</option>
					<option value="2012q1">Q1 2012</option>
					
				</select>
			
		</td>
		<td>
			Ends:
			<br>
				<select id="endYear">
					<option value="">                </option>
					<option value="2017q4">Q4 2017</option>
					<option value="2017q3">Q3 2017</option>
					<option value="2017q2">Q2 2017</option>
					<option value="2017q1">Q1 2017</option>
					
					<option value="2016q4">Q4 2016</option>
					<option value="2016q3">Q3 2016</option>
					<option value="2016q2">Q2 2016</option>
					<option value="2016q1">Q1 2016</option>
					
					<option value="2015q4">Q4 2015</option>
					<option value="2015q3">Q3 2015</option>
					<option value="2015q2">Q2 2015</option>
					<option value="2015q1">Q1 2015</option>
					
					<option value="2014q4">Q4 2014</option>
					<option value="2014q3">Q3 2014</option>
					<option value="2014q2">Q2 2014</option>
					<option value="2014q1">Q1 2014</option>
					
					<option value="2013q4">Q4 2013</option>
					<option value="2013q3">Q3 2013</option>
					<option value="2013q2">Q2 2013</option>
					<option value="2013q1">Q1 2013</option>
					
					<option value="2012q4">Q4 2012</option>
					<option value="2012q3">Q3 2012</option>
					<option value="2012q2">Q2 2012</option>
					<option value="2012q1">Q1 2012</option>
					
				</select>
			
		</td>
	</tr>
	
	<tr>
		<td>
			Please select a Year:
			<br>
			<select id="ddl3">
					<option value="">                </option>
					<option value="2017">2017</option>
					<option value="2016">2016</option>
					<option value="2015">2015</option>
					<option value="2014">2014</option>
					<option value="2013">2013</option>
					<option value="2012">2012</option>
					<option value="2011">2011</option>
					<option value="2010">2010</option>
					<option value="2009">2009</option>
					<option value="2008">2008</option>
					<option value="2007">2007</option>
					<option value="2006">2006</option>
					<option value="2005">2005</option>
					<option value="2004">2004</option>
					<option value="2003">2003</option>
					<option value="2002">2002</option>
					<option value="2001">2001</option>
					<option value="2000">2000</option>
					<option value="1999">1999</option>
					<option value="1998">1998</option>
			</select>
		</td> 
	</tr>
	<tr>
		<td>
			<input type="submit" value="Submit" onclick="retPDF();" ></input>
		</td>
	</tr>
</form>
</table>
<br>
<br>
Note: Blank cells appearing in any section of this report indicates that information is unavailable.

<!-- End of Mlyard's example -->







<p>To view PDF files you need Acrobat Reader. (<a href= "<?=$path ?>redirect.asp?link=get.adobe.com/reader/?promoid=BUIGO">Download Adobe Reader</a>.)</p>
<!---- Content ends  --->
    </div>
  </div>
 
  <?php include($path . "include/footer.inc"); ?>
</div>
</body>
</html>
