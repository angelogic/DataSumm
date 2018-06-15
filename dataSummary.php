<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
    $title = 'Unemployment Insurance Data';
    $nav = "";
    $path = "../";
      $ybar="<a href='index.asp'>UI</a>&nbsp;>&nbsp;Dashboard" ;
  ?>
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
      <p style="text-indent: 2rem; ">The UI Data Summary is produced quarterly from state-reported data contained in 
the Unemployment Insurance Data Base (UIDB) as well as UI-related data from outside 
sources (e.g., Bureau of Labor Statistics data on employment and unemployment and U.S. 
Department of Treasury data on state UI trust fund activities). This report is intended 
to provide the user with a quick overview of the status of the UI system at the national and 
state levels.  If you are having any problems loading the pdf format data charts on this page, 
please contact <a href="mailto:Kim.Hyunchung@dol.gov">Hyunchung Kim</a>.<br /><br />
  <?php
		require("dataQuarter.php");
	  ?>
      <!---- Content ends  --->
    </div>
  </div>
 
  <?php include($path . "include/footer.inc"); ?>
</div>
</body>
</html>