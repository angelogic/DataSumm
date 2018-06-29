<!DOCTYPE html>
<html  xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Report</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/tablestyle.css">
    <script type="text/javascript" >
        function goBack() {
              window.history.back();
          }
   
    </script>
    <style type="text/css">
      table {
  font-family: 'Arial';
  margin: 25px auto;
  border-collapse: collapse;
  border: 1px solid #eee;
  border-bottom: 2px solid #00cccc;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1), 0px 10px 20px rgba(0, 0, 0, 0.05), 0px 20px 20px rgba(0, 0, 0, 0.05), 0px 30px 20px rgba(0, 0, 0, 0.05);
  overflow: auto;
}
table tr:hover {
  background: #d6d6d6;
}
table tr:hover td {
  color: #555;
}
table th, table td {
  color: black;
  border: 1px solid #eee;
  padding: 5px 5px;
  border-collapse: collapse;
  overflow: auto;
   text-align: center;
}
table th {
  background: #5a76a8;
  color: #fff;
  text-align: center;
  font-size: 15px;
  }
table th.last {
  border-right: none;
}
table tr td:first-child  {
  background-color: #DBE7FD;
}
.fixed-side{
   position: sticky;top:20px; height:3rem;width: 6rem;
}
* {box-sizing:border-box; border-collapse:collapse;}
    </style>
</head>
<body>
<h1>Unemployment Insurance Quarterly Data Summary Report </h1>
        <p>State Name</p>
        <h2><?php 
        $_POST['year_Select']= isset($_POST['year_Select'])?$_POST['year_Select']:null;
        $_POST['state_Select']= isset($_POST['state_Select'])?$_POST['state_Select']:null;
        if (isset($_POST["year_Select"]))  print_r($_POST["year_Select"]);
        else print_r($_POST["state_Select"]);
        ?></h2>

<button onclick="goBack()"style ="overflow: auto;position: fixed;">Go Back</button>
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
           echo "File not found";
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