<!DOCTYPE html>
<html>
<head>
    <?php
        $title = 'Unemployment Insurance Data';
        $nav = "";
        $path = "../";
        $ybar="<a href='index.asp'>UI</a>&nbsp;>&nbsp;Dashboard" ;
    ?>
    <style type="text/css">
     table
{
border-collapse: collapse;
border-spacing: 0px;
}
table, th, td
{
padding: 5px;
border: 1px solid black;
text-align: center;
}
.validaion {
    background-color: red;
}
    </style>
    <script type="text/javascript" >
        function goBack() {
              window.history.back();
          }
    </script>
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
        ?></h2>

<button onclick="goBack()">Go Back</button>
</br>
</br>
<?PHP
$optionFirstYear =  $_POST['firstYear'] ;
$optionLastYear =  $_POST['lastYear'];
$row = 1;
if (($handle = fopen('Final_UIDS_History.csv', 'r')) !== FALSE){
    echo '<table>';
    $data = fgetcsv($handle, 1000, ',');
    // Get headers
     if ( $data!== FALSE ){
       echo '<tr><th>'.implode('</th><th>', $data).'</th></tr>';
    }
    // Get the rest
     while (($data = fgetcsv($handle, 124217728, ',')) !== FALSE   ){
        if(($_POST['OrderBy'])== "OrderBy_State"){
        if ( ($_POST['state'] == $data[0]) && ( $optionFirstYear <= $data[1] && $optionLastYear >= $data[1] ) ) {
        echo '<tr><td>'.implode('</td><td>', $data).'</td></tr>';
        }
        } else if ( $optionFirstYear <= $data[1] && $optionLastYear >= $data[1] ) {
        echo '<tr><td>'.implode('</td><td>', $data).'</td></tr>';
        }
    }
    fclose($handle);
    echo '</table>';
}
else {
    echo "File can not be found";
}

// important

?>
</div>
    </div>
    <?php include($path . "include/footer.inc"); ?>
</div>
</body>
</html>