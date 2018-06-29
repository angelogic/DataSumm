<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html  xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
      <?php
        $title = 'Unemployment Insurance Data';
        $nav = "";
        $path = "../";
        $ybar="<a href='index.asp'>UI</a>&nbsp;>&nbsp;Dashboard" ;
    ?>
    <link rel="stylesheet" type="text/css" href="/assets/css/tablestyle.css">
    <script src="sticky.js" type="text/JavaScript"></script>
    <script src="stickyfill-master/dist/stickyfill.min.js"></script>
    <script type="text/javascript" >
        function goBack() {
              window.history.back();
          }
  var elements = document.querySelectorAll('table thead');
Stickyfill.add(elements);
    </script>
    <!-- <style type="text/css">
  
      table {
    
  font-family: 'Arial';
  margin: 25px auto;
  border-collapse: collapse;
  border: 1px solid black;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1), 0px 10px 20px rgba(0, 0, 0, 0.05), 0px 20px 20px rgba(0, 0, 0, 0.05), 0px 30px 20px rgba(0, 0, 0, 0.05);


}
table tr:hover {
  background: #d6d6d6;
}
table tr:hover td {
  color: #555;
}
table th, table td {
  color: black;
  border: 1px solid black;
  padding: 5px 5px;
  
   text-align: center;
   
}
table th {
color: white;
  text-align: center;
  font-size: 15px;
 background: #5a76a8;

  }
table th.last {
  border-right: none;
}
table tr td:first-child  {
 background-color: #DBE7FD;


}
.fixed-side{

}
 .container thead{

}
table tbody {
 
}
.container {
 overflow-x: scroll;
  overflow-y: scroll;
  height: 400px;
position: relative;
}

* {box-sizing:border-box; border-collapse:collapse;}

    </style> -->
    <style type="text/css">
  
      table {
    
  font-family: 'Arial';
  margin: 25px auto;
  border-collapse: collapse;
  border: 1px solid black;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1), 0px 10px 20px rgba(0, 0, 0, 0.05), 0px 20px 20px rgba(0, 0, 0, 0.05), 0px 30px 20px rgba(0, 0, 0, 0.05);


}
table tr:hover {
  background: #d6d6d6;
}
table tr:hover td {
  color: #555;
}
table th, table td {
  color: black;
  border: 1px solid black;
  padding: 5px 5px;
  
   text-align: center;
   
}
table th {
color: white;
  text-align: center;
  font-size: 15px;
 background: #5a76a8;

  }
table th.last {
  border-right: none;
}
table tr td:first-child  {
 background-color: #DBE7FD;


}
.fixed-side{

}
 .container thead{

}
table tbody {
 
}
.container {
 overflow-x: scroll;
  overflow-y: scroll;
  height: 400px;
position: relative;
}

* {box-sizing:border-box; border-collapse:collapse;}

    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Description" content="UI Data Summary">
<meta name="Keywords" content="unemployment, Unemployment Insurance, UI, OUI, Office of Unemployment Insurance, 
Department of Labor, Doleta, ETA, Employment Training Administration" />
<title> UI Data Summary, Employment &amp; Training Administration (ETA) - U.S. Department of Labor</title>  
<link href="/css/style-layout.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/style-layout-ie7.css" rel='stylesheet' type='text/css' media='screen' />
    <link href="/css/style-screen.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/style-print.css" rel="stylesheet" type="text/css" media="print" />
<script type="text/JavaScript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://webapps.dol.gov/FSPublic/Scripts/W_Helpful.js" type="text/JavaScript"></script>
<link href="https://webapps.dol.gov/FSPublic/Content/W_Helpful.css" rel="stylesheet" />
<script type="text/javascript">
 
</script>
</head>
<body>
<?php include($path . "include/metatag.inc"); ?>
<div id="wrapper">
  <?php include($path . "include/header.inc"); ?>
  <div id="container">
    <?php include($path . "include/localMain.inc"); ?>
    <div id="content"><a name="#content" id="#content"></a>
      <h1><?php echo $title; ?></h1>
       <h2><?php 
        if (isset($_POST["year_Select"]))  print_r($_POST["year_Select"]);
        else print_r($_POST["state_Select"]);
        ?> Reports</h2>
<button onclick="goBack()">Go Back</button>
<button name="create_excel" id="create_excel" class="btn btn-success" disabled>Create Excel File</button> 
</br>
</br>

 
<?PHP
$optionFirstYear =  $_POST['firstYear'] ;
$optionLastYear =  $_POST['lastYear'];
$year_Select = $_POST['year_Select']= isset($_POST['year_Select'])?$_POST['year_Select']:null;
 $state_Select= $_POST['state_Select']= isset($_POST['state_Select'])?$_POST['state_Select']:null;
       if ($state_Select) {
        switch ($state_Select) {
          case 'Labor Force Data':
            include 'CrosswalkPHP/Labor_Force_Data.php';
           break;
           case 'Benefits paid':
            include 'CrosswalkPHP/BenefitData.php';
           break;
           case 'Claims Data':
            include 'CrosswalkPHP/ClaimData.php';
           break;
           case 'Wage Data':
            include 'CrosswalkPHP/WageData.php';
           break;
           case 'Trust Fund Data':
            include 'CrosswalkPHP/TrustFundData.php';
           break;
           case 'Extended Benefits':
            include 'CrosswalkPHP/ExtendedData.php';
           break;
             case 'Loan':
            include 'CrosswalkPHP/LoanData.php';
           break;
              case 'Tax Revene':
           echo "Webpage under Construction ";
           break;
           default:
            include 'CrosswalkPHP/default.php';
      }
    }
    if ($year_Select){
      switch ($year_Select) {
          case 'Labor Force':
            include 'CrosswalkPHP/Labor_Force_Data.php';
           break;
           case 'Benefit and Duration':
            include 'CrosswalkPHP/BenefitData.php';
           break;
           case 'Claim Data':
            include 'CrosswalkPHP/ClaimData.php';
           break;
           case 'Wage and Tax Rate':
            include 'CrosswalkPHP/WageData.php';
           break;
           case 'Trust Fund':
            include 'CrosswalkPHP/TrustFundData.php';
           break;

       }
    }
?>


</body>
</html>