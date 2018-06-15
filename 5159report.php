<?php
/**************************************************************
* @File Name		:   5159report.asp
* @Created By		:   Heather Choi, Base Technologies, Inc.
* @Date				:   12/13/2005
*
* @Description		:   Monthly report form handler (ar5159 report)
*
* @Revision History	:
* Who               Date            Changes
* Heather			12/13/2005		ODBC connection from informix conneciton
* Heather			01/20/2006		ODBC DB connection closing
***************************************************************/
$referrer = isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:"";
//echo $referrer, '<br>';
if(strpos($referrer, "unemploy/claimssum.asp")===false){
	exit('Incorrect Access');
}

function stripChars($var){
	$var = trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9 ]/', ' ', urldecode(html_entity_decode(strip_tags($var))))));
	return $var;
}

function noDataMessage(){
	?>
	<p style="color: #900">There are no results from the database for the input selected.<p>
	<?php
}

	$title = 'Monthly Program and Financial Data';
	$ybar = '<a href="">UI</a>&nbsp;>&nbsp;<a href="finance.asp">Program Statistics</a>&nbsp;>' . $title;
	$path="../" ;
	$nav="" ;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Description" content="<?=$title ?>">
<?php include($path . "include/metatag.inc"); ?>
</head>
<body>

<div id="wrapper">
  <?php include($path . "include/header.inc"); ?>
  <div id="container">
  	<?php include($path . "include/localMain.inc"); ?>
    <div id="content"><a name="#content" id="#content"></a>
      <h1><?php echo $title; ?></h1>
      <!---- Content starts ---->
      <?php
//receiving parameters due to switched off for global variables
$level = isset($_POST['level'])?stripChars($_POST['level']):null;
$_POST['states']= isset($_POST['states'])?$_POST['states']:null;

$states = array();
for ($i = 0; $i < count($_POST['states']); $i++ ){
$all = ($_POST['states'][$i] == 'All')?true:false;
	$states[$i] = substr(stripChars($_POST['states'][$i]), 0, 2);//sanitize code and cut down to 2 chars for state abbreviations
if($all) $states[$i] = 'All';
}

$strtyear = isset($_POST['strtyear'])?$_POST['strtyear']:null;
$strtmonth = isset($_POST['strtmonth'])?$_POST['strtmonth']:null;

$endyear = isset($_POST['endyear'])?$_POST['endyear']:null;
$endmonth = isset($_POST['endmonth'])?$_POST['endmonth']:null;

// Set the variables for the database access:
include ("connect.inc");
include ("odbcfetcharray.inc");

$tot_c1 = $tot_c51 = $tot_wks_clm = $tot_c38 = $tot_c46 = $tot_c39 = $tot_c45 = $tot_c56 = 0;

//function for a leap year and validate
function is_leap_year ($year)
{
        return ((($year%4) == 0 && ($year%100) != 0) || ($year%400) ==0);
}


if (!($dblink = new PDO($DSN, $User, $Password)))
{
	echo 'Unable to to connect!<br />', PHP_EOL;
	exit();
}

//checking a leap year and validate
if ((is_leap_year($endyear)) AND ($endmonth == '02/28'))
   $endmonth = '02/29';


//creating strings for intervals

$begin = $strtmonth ."/" . $strtyear;
$end = $endmonth  . "/" . $endyear;

$begin_us = $strtyear . "/" . $strtmonth;
$end_us = $endyear . "/" . $endmonth;

// error handling for the period
if ($strtyear > $endyear){
	echo 'The beginning year should be smaller than the ending year.',PHP_EOL;
	echo 'Please click <a href ="javascript:history.go(-1)">here</a> to go back.', PHP_EOL;

}
else if (($strtyear == $endyear) AND ($strtmonth > $endmonth)){
    echo 'The beginning month should be smaller than the ending month.', PHP_EOL;
	echo 'Please click <a href ="javascript:history.go(-1)">here</a> to go back.', PHP_EOL;

}
else {
$strtmonth = substr($strtmonth, 0, 2);
$endmonth = substr($endmonth, 0, 2);
if ($strtyear == $endyear){
	$num_month = $endmonth - $strtmonth + 1;
}
else {
    $num_month = (12 - $strtmonth +1) + ($endyear - $strtyear -1)*12 + $endmonth;
}


//For US Total Calculation  ----------------------------------------------------
if ($level == 'us') {
	
$query = "select max(rptdate) from ar5159u";
$result = $dblink->prepare($query);
$result->execute();
$max_date = $result->fetch(PDO::FETCH_NUM);

$query = "select rptdate, c1, c38, c51, c56, c39, c46, c45 from ar5159u where rptdate >= '1/1/1971' order by rptdate";
//$result = ifx_query($query, $dblink);
$result = $dblink->prepare($query);
$result->execute();

$rows = $result->fetchAll();

if( strtotime($max_date[0]) > strtotime($begin) ){
//Create a Table.
?>
<h2>State UI Program Data <br /> US Totals</h2>
<table width='750' border='0' summary="US Total Table" STYLE='font-family: Verdana, Arial, Helvetica, Sans-serif; font-size: 10pt; color: #000000'>
	<tr bgcolor='#b3b3b3'>
		<td colspan=4 align=left>&nbsp;</td>
		<td colspan=3 align=center>--  12 month average  --</td>
		<td colspan=3 align=center>--  &nbsp;&nbsp;12 month total&nbsp;&nbsp;  --</td>
	</tr>

	<tr bgcolor='#d9d9d9'>
		<th width=50 align=left>&nbsp;</th>
		<th id="" width=50 align=left>&nbsp;</th>
		<th id="" width=75 align=left>&nbsp;</th>
		<th id="" width=80 align=left>&nbsp;</th>
		<th id="" width=50 align=left>&nbsp;</th>
		<th id="" width=50 align=left>&nbsp;</th>
		<th id="Weekly" width=75 align=left>Weekly</th>
		<th id="" width=80 align=left>&nbsp;</th>
		<th id="" width=50 align=left>&nbsp;</th>
		<th id="" width=75 align=left>&nbsp;</th>
	</tr>

	<tr bgcolor='#d9d9d9'>
		<th width=50 align=left>Month</th>
		<th id="First" width=50 align=left>First</th>
		<th id="Final" width=75 align=left>Final</th>
		<th id="Benefits" width=80 align=left>Benefits</th>
		<th id="Exhaustion" width=50 align=left>Exh.</th>
		<th id="" width=50 align=left>&nbsp;</th>
		<th id="Benefit" width=75 align=left>Benefit</th>
		<th id="Benefits" width=80 align=left>Benefits</th>
		<th id="First" width=50 align=left>First</th>
		<th id="Final" width=75 align=left>Final</th>
	</tr>

	<tr bgcolor='#d9d9d9'>
		<th width=50 align=left>Ending</th>
		<th id="Payments" width=50 align=left>Payments</th>
		<th id="Payments" width=75 align=left>Payments</th>
		<th id="Paid (thousand)" width=80 align=left>Paid(000)</th>
		<th id="Rate" width=50 align=left>Rate</th>
		<th id="Duration" width=50 align=left>Duration</th>
		<th id="Amount" width=75 align=left>Amount</th>
		<th id="Paid (thousand)" width=80 align=left>Paid(000)</th>
		<th id="Payments" width=50 align=left>Payments</th>
		<th id="Payments" width=75 align=left>Payments</th>
	</tr>
<?php

$c38_array = array(0,0,0,0,0,0,0,0,0,0,0,0,0);
$c39_array = array(0,0,0,0,0,0,0,0,0,0,0,0,0);
$c46_array = array(0,0,0,0,0,0,0,0,0,0,0,0,0);
$c51_array = array(0,0,0,0,0,0,0,0,0,0,0,0,0);
$c56_array = array(0,0,0,0,0,0,0,0,0,0,0,0,0);
$c45_array = array(0,0,0,0,0,0,0,0,0,0,0,0,0);

$i = 12;

$c38_array_tot=array(0,0,0,0,0,0,0,0,0,0,0,0,0);
$c39_array_tot=array(0,0,0,0,0,0,0,0,0,0,0,0,0);
$c46_array_tot=array(0,0,0,0,0,0,0,0,0,0,0,0,0);
$c51_array_tot=array(0,0,0,0,0,0,0,0,0,0,0,0,0);
$c56_array_tot=array(0,0,0,0,0,0,0,0,0,0,0,0,0);
$c45_array_tot=array(0,0,0,0,0,0,0,0,0,0,0,0,0);

$line=0;
//while ($Row = ifx_fetch_row($result)) {
//while ($Row = $result->fetch(PDO::FETCH_ASSOC)) {
foreach($rows as $Row){
		$Row = array_change_key_case($Row, CASE_LOWER);
	if ($i == 0 ) {
		$i =12;
	}


	$c51 = number_format($Row['c51']);
	$c51_array[12] = $Row['c51'];
	$c51_array_tot[12] += $c51_array[12]- $c51_array[0];


	$c56 = number_format($Row['c56']);
	$c56_array[12] = $Row['c56'];
    $c56_array_tot[12] += $c56_array[12]- $c56_array[0];


	$c45 = number_format($Row['c45']/1000);
	$c45_array[12] = $Row['c45'];
	$c45_array_tot[12] += $c45_array[12] - $c45_array[0];



	if ((!isset($c51_array_tot[6])) or ($c51_array_tot[6] == 0)) {
		$er = 0;
	}
	else {
		$er = ($c56_array_tot[12]/$c51_array_tot[6])*100;
	}

	$er = number_format($er, 2);


	$c38_array[12] = $Row['c38'];
	$c38_array_tot[12] += $c38_array[12] - $c38_array[0];
	$duration = $c38_array_tot[12]/$c51_array_tot[12];
	$duration = number_format($duration,2);


	$c46_array[12] = $Row['c46'];
	$c39_array[12] = $Row['c39'];
	$c46_array_tot[12] += $c46_array[12] - $c46_array[0];
	$c39_array_tot[12] += $c39_array[12] - $c39_array[0];
	$wba = $c46_array_tot[12]/$c39_array_tot[12];
	$wba = number_format($wba, 2);

	$temp = $c45_array_tot[12]/1000;
	$ben = number_format($temp);


	$first_tot = number_format($c51_array_tot[12]);


	$final_tot = number_format($c56_array_tot[12]);

	$i--;
	for ($j = 0; $j <12 ; $j++) {
     		$c51_array[$j] = $c51_array[$j+1];
     		$c56_array[$j] = $c56_array[$j+1];
     		$c45_array[$j] = $c45_array[$j+1];
     		$c51_array_tot[$j] = $c51_array_tot[$j+1];
     		$c56_array_tot[$j] = $c56_array_tot[$j+1];
     		$c45_array_tot[$j] = $c45_array_tot[$j+1];
     		$c38_array[$j] = $c38_array[$j+1];
     		$c39_array[$j] = $c39_array[$j+1];
     		$c46_array[$j] = $c46_array[$j+1];
     		$c38_array_tot[$j] = $c38_array_tot[$j+1];
     		$c39_array_tot[$j] = $c39_array_tot[$j+1];
     		$c46_array_tot[$j] = $c46_array_tot[$j+1];
	}//end of for

	list ($year1, $month1, $day1) = explode ("-", $Row['rptdate']);
	$new_fmt_date = $month1 . "/" . $day1 . "/" . $year1;
	$mydate = $year1 . "/" . $month1 . "/" . $day1;
	if (($mydate >= $begin_us) AND ($mydate <= $end_us)){
		if ($mydate < '1972/06/30'){
			$er = '&nbsp;';
			$wba = '&nbsp;';
			$duration = '&nbsp;';
            $ben = '&nbsp;';
			$first_tot = '&nbsp;';
            $final_tot = '&nbsp;';
		}//end of inner if

		if ($line%2 !=0){
			echo '<tr bgcolor="#f3f3f3">';
		}
		else{
			echo '<tr>';
		}
		$line++;
		
		echo '<th id="',$new_fmt_date,'"  align=left>',$new_fmt_date,'</th>', PHP_EOL;
		echo '<td headers="',$new_fmt_date,' first_payments" align=right>',$c51,'</td>', PHP_EOL;
		echo '<td headers="',$new_fmt_date,' final_payments" align=right>',$c56,'</td>', PHP_EOL;
		echo '<td headers="',$new_fmt_date,' benefits_paid" align=right>',$c45,'</td>', PHP_EOL;
		echo '<td headers="',$new_fmt_date,' Exhaustion Rate" align=right>',$er,'</td>', PHP_EOL;
		echo '<td headers="',$new_fmt_date,' Duration" align=right>',$duration,'</td>', PHP_EOL;
		echo '<td headers="',$new_fmt_date,' Weekly Benefit Amount" align=right>',$wba,'</td>', PHP_EOL;
		echo '<td headers="',$new_fmt_date,' 12 months total benefits_paid" align=right>',$ben,'</td>', PHP_EOL;
		echo '<td headers="',$new_fmt_date,' 12 months total First Payments" align=right>',$first_tot,'</td>', PHP_EOL;
		echo '<td headers="',$new_fmt_date,' 12 months total Final Payments" align=right>',$final_tot,'</td>', PHP_EOL;
		echo '</tr>', PHP_EOL;
	}//end of if
}//end of while $Row
echo '</table>';
}//Has Data
else{
	noDataMessage();
}//No Data
}//end of if ($level = 'us')

//End of US TOTAL -------------------------------------------------------------

//For State Level Calculation -------------------------------------------------


else {
//Multiple states are selected...
if ($states[0] !="All"){
	$data = array();
	$hasData = false;
	
	for ($i = 0; $i < count($states); $i++){
	$query = "select st_name, rptdate, c1, (c21 + c22) wks_clm,  c38, c39, c45, c46, c51, c56 from ar5159e, g_states_1" .
        " where rptdate between '$begin'  and  '$end'  and ar5159e.st = '$states[$i]' and g_states_1.st = '$states[$i]' " .
	" ORDER BY st_name, rptdate";
	

	//$result[$i] = ifx_query($query, $dblink);
		$result[$i] = $dblink->prepare($query);
		$result[$i]->execute();
		$data[$i] = $result[$i]->fetchAll();
		if(count($data[$i])) $hasData = true;
	}
	
	if($hasData){
// Create a Table.
?>
<h2>SUMMARY DATA FOR STATE PROGRAMS, BY SELECTION OF THE STATE(S), REPORT PERIOD BETWEEN <?=$begin?> AND <?=$end?></h2>
<table width='750' border='0' summary="Claims Summary Table" STYLE='font-family: Verdana, Arial, Helvetica, Sans-serif; font-size: 10pt; color: #000000'>
	<tr bgcolor='#d9d9d9'>
		<th width=150 rowspan=2 align=left valign=middle>STATE</th>
		<th id="initial" width=50 align=right>Initial</th>
		<th id="First" width=75 align=right>First</th>
		<th id="Weeks" width=75 align=right>Weeks</th>
		<th id="Weeks" width=100 align=right>Weeks</th>
		<th id="Average_Weekly" width=75 align=right>Avg. Wkly</th>
		<th id="Benefits" width=75 align=right>Benefits</th>
		<th id="Final" width=75 align=right>Final</th>
	</tr>
	<tr bgcolor='#d9d9d9'>
		<th id="claims" width=50 align=right>Claims</th>
		<th id="payments" width=75 align=right>Payments</th>
		<th id="claimed" width=75 align=right>Claimed</th>
		<th id="compensated" width=100 align=right>Compensated</th>
		<th id="benefit" width=75 align=right>Benefit<a href='#ftnote'>*</a></th>
		<th id="paid" width=75  align=right>Paid</th>
		<th id="payments" width=75 align=right>Payments</th>
	</tr>
<?php

//initializing variables
$line=0;
$st_name="";
for ($i = 0; $i < count($states); $i++){
	//while ($Row = ifx_fetch_row($result[$i])) {
	//while ($Row = $result[$i]->fetch(PDO::FETCH_ASSOC)) {
	foreach($data[$i] as $Row) {
		$Row = array_change_key_case($Row, CASE_LOWER);
		list ($year1, $month1, $day1) = explode ("-", $Row['rptdate']);
		$new_fmt_date = $month1 . "/" . $day1 . "/" . $year1;

		if ($st_name != $Row['st_name']) {
            $st_name = $Row['st_name'];
            echo '<tr>', PHP_EOL;
			echo '<th id="',$st_name,'" colspan=8 align=left>',$st_name,'</th>', PHP_EOL;
		 	echo '</tr>', PHP_EOL;
		}

		if ($line%2 !=0){
			echo '<tr bgcolor="#f3f3f3">', PHP_EOL;
		}
		else{
			echo '<tr>', PHP_EOL;
		}
		$line++;
		echo '<th id="',$new_fmt_date,'" align=left>',$new_fmt_date,'</th>', PHP_EOL;

		$c1 = number_format($Row['c1']);
		echo '<td headers="',$st_name,' ',$new_fmt_date,' initial_claims" align=right>',$c1,'</td>', PHP_EOL;

		$c51 = number_format($Row['c51']);
		echo '<td headers="',$st_name,' ',$new_fmt_date,' first_payments" align=right>',$c51,'</td>', PHP_EOL;

		$wks_clm = number_format($Row['wks_clm']);
		echo '<td headers="',$st_name,' ',$new_fmt_date,' weeks_claimed" align=right>',$wks_clm,'</td>', PHP_EOL;

		$c38 = number_format($Row['c38']);
		echo '<td headers="',$st_name,' ',$new_fmt_date,' weeks_compensated" align=right>',$c38,'</td>', PHP_EOL;

		if ($Row['c39'] == 0)
		$temp = 0;
		else
		$temp = $Row['c46']/$Row['c39'];

		$avg = number_format($temp, 2);
		echo '<td headers="',$st_name,' ',$new_fmt_date,' average_weekly_benefit" align=right>$',$avg,'</td>', PHP_EOL;

		$c45 = number_format($Row['c45']);
		echo '<td headers="',$st_name,' ',$new_fmt_date,' benefits_paid" align=right>',$c45,'</td>', PHP_EOL;

		$c56 = number_format($Row['c56']);
		echo '<td headers="',$st_name,' ',$new_fmt_date,' final_payments" align=right>',$c56,'</td>', PHP_EOL;
		echo '</tr>', PHP_EOL;

	}//end of while
}//end of for loop
?>
</table>
<br /><br />
<p STYLE='font-family: Verdana, Arial, Helvetica, Sans-serif; font-size: 10pt; color: #000000'>Run Date: <?=date("n/j/Y")?><br /><br /> 
<a name='ftnote'>*</a> Average Weekly Benefit for weeks of total unemployment.</p>
<br /><br />
<?php
	}//end $hasData=true
	else {
		noDataMessage();
	}
}//if ($states[0] !="All")

else if (($states[0] == "All") AND (!isset($states[1]))){

	$strtmonth = substr($strtmonth, 0, 2);
	$endmonth = substr($endmonth, 0, 2);
	if (($strtyear == $endyear) AND ($strtmonth == $endmonth)){
	$query = "select st_name, rptdate, c1, (c21 + c22) wks_clm,  c38, c39, c45, c46, c51, c56 from ar5159e, g_states_1".
	" where YEAR(rptdate)= $strtyear  and MONTH(rptdate)= $strtmonth  and ar5159e.st = g_states_1.st ORDER BY st_name";
	//$result = ifx_query($query, $dblink);
	$result = $dblink->prepare($query);
	$result->execute();
	
	$data = $result->fetchAll();
			
	if($data){
	

// Create a Table.
?>
<h2>SUMMARY DATA FOR STATE PROGRAMS, BY STATE, REPORT PERIOD FOR <?=$strtmonth?>/<?=$strtyear?></h2>
<table width='750' border='0' summary="Claims Summary Table" STYLE='font-family: Verdana, Arial, Helvetica, Sans-serif; font-size: 10pt; color: #000000'>
	<tr bgcolor='#d9d9d9'>
		<th width=150 rowspan=2 align=left valign=middle>STATE</th>
		<th id="initial" width=50 align=right>Initial</th>
		<th id="First" width=75 align=right>First</th>
		<th id="Weeks" width=75 align=right>Weeks</th>
		<th id="Weeks" width=100 align=right>Weeks</th>
		<th id="Average_Weekly" width=75 align=right>Avg. Wkly</th>
		<th id="Benefits" width=75 align=right>Benefits</th>
		<th id="Final" width=75 align=right>Final</th>
	</tr>


	<tr bgcolor='#d9d9d9'>
		<th id="claims" width=50 align=right>Claims</th>
		<th id="payments" width=75 align=right>Payments</th>
		<th id="claimed" width=75 align=right>Claimed</th>
		<th id="compensated" width=100 align=right>Compensated</th>
		<th id="benefit" width=75 align=right>Benefit<a href='#ftnote'>*</a></th>
		<th id="paid" width=75  align=right>Paid</th>
		<th id="payments" width=75 align=right>Payments</th>
	</tr>

<?php
//initializing variables
$line=0;
	//while ($Row = ifx_fetch_row($result)) {
	//while ($Row = $result->fetch(PDO::FETCH_ASSOC)){
	foreach ($data as $Row){
		$Row = array_change_key_case($Row, CASE_LOWER);

	$line++;
    if ($line%2 !=0){
		echo '<tr bgcolor="#f3f3f3"><th id="',$Row['st_name'],'" align=left>',$Row['st_name'],'</th>', PHP_EOL;
	}
	else{
		echo '<tr><th id="',$Row['st_name'],'" align=left>',$Row['st_name'],'</th>', PHP_EOL;
	}
	$c1 = number_format($Row['c1']);
	$tot_c1+=$Row['c1'];
	echo '<td headers="',$Row['st_name'],' initial_claims" align=right>',$c1,'</td>', PHP_EOL;

	$c51 = number_format($Row['c51']);
	$tot_c51+=$Row['c51'];
	echo '<td headers="',$Row['st_name'],' first_payments" align=right>',$c51,'</td>', PHP_EOL;

	$wks_clm = number_format($Row['wks_clm']);
	$tot_wks_clm+=$Row['wks_clm'];
	echo '<td headers="',$Row['st_name'],' weeks_claimed" align=right>',$wks_clm,'</td>', PHP_EOL;

	$c38 = number_format($Row['c38']);
	$tot_c38+=$Row['c38'];
	echo '<td headers="',$Row['st_name'],' weeks_compensated" align=right>',$c38,'</td>', PHP_EOL;

	$tot_c46+=$Row['c46'];
	$tot_c39+=$Row['c39'];
	if ($Row['c39'] == 0) $temp = 0;
	else $temp = $Row['c46']/$Row['c39'];

	$avg = number_format($temp, 2);
	echo '<td headers="',$Row['st_name'],' average_weekly_benefit" align=right>$',$avg,'</td>', PHP_EOL;

	$c45 = number_format($Row['c45']);
	$tot_c45+=$Row['c45'];
	echo '<td headers="',$Row['st_name'],' benefits_paid" align=right>',$c45,'</td>', PHP_EOL;

	$c56 = number_format($Row['c56']);
	$tot_c56+=$Row['c56'];
	echo '<td headers="',$Row['st_name'],' final_payments" align=right>',$c56,'</td>', PHP_EOL;
	echo '</tr>', PHP_EOL;

	}//end of while

$line=$line+1;
if ($line%2 !=0){
	echo '<tr bgcolor="#f3f3f3"><th id="United_States" align=left>United_States</th>', PHP_EOL;
}
else{
	echo '<tr><th id="United_States" align=left>United_States</th>', PHP_EOL;
}

$tot_c1 = number_format($tot_c1);
echo '<td headers="United_States initial_claims" align=right>',$tot_c1,'</td>', PHP_EOL;

$tot_c51 = number_format($tot_c51);
echo '<td headers="United_States first_payments" align=right>',$tot_c51,'</td>', PHP_EOL;

$tot_wks_clm = number_format($tot_wks_clm);
echo '<td headers="United_States weeks_claimed" align=right>',$tot_wks_clm,'</td>', PHP_EOL;

$tot_c38 = number_format($tot_c38);
echo '<td headers="United_States weeks_compensated" align=right>',$tot_c38,'</td>', PHP_EOL;

if ($tot_c39 == 0)
    $temp = 0;
else
	$temp = $tot_c46/$tot_c39;

$avg = number_format($temp, 2);
echo '<td headers="United_States average_weekly_benefit" align=right>$',$avg,'</td>', PHP_EOL;

$tot_c45 = number_format($tot_c45);
echo '<td headers="United_States benefits_paid" align=right>',$tot_c45,'</td>', PHP_EOL;

$tot_c56 = number_format($tot_c56);
?>
<td headers="United_States final_payments" align=right><?=$tot_c56?></td>
</tr>
</table>


<br /><br />
<p STYLE='color: #000000'>Run Date: <?=date("n/j/Y")?><br /><br />
<a name='ftnote'>*</a> Average Weekly Benefit for weeks of total unemployment.</p>
<br /><br />
<?php
	}//end Has Data
	else{
		noDataMessage();
	}//end no data

}//end of if($strtyear = $endyear....)

else {
	echo 'Please input <font color= #990000>single month</font> when you choose All States.<br />', PHP_EOL;
	echo 'Please click <a href ="javascript:history.go(-1)">here</a> to go back.', PHP_EOL;
}
}//end of else if ($states[0] == "All")

else {
	echo 'Please do not make multiple choice when you choose All States.<br />', PHP_EOL;
	echo 'Please click <a href ="javascript:history.go(-1)">here</a> to go back.', PHP_EOL;
}
}
}
$dblink = null;
?>
      <!---- Content ends  --->
    </div>
  </div>

  <?php include($path . "include/footer.inc"); ?>
</div>
</body>
</html>
