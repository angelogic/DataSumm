<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="/assets/css/tablestyle.css">
    <script type="text/javascript" >
        function goBack() {
              window.history.back();
          }
    </script>
</head>
<body>
<h1>Unemployment Insurance Quarterly Data Summary Report </h1>
        <p>State Name</p>
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

</body>
</html>