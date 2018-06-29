
<?PHP


$optionFirstYear =  $_POST['firstYear'] ;
$optionLastYear =  $_POST['lastYear'];
$row = 1;
if (($handle = fopen('DataSummaryOption/WageData.csv', 'r')) !== FALSE){
   echo '<div >';
    echo '<table >';
   // $data = fgetcsv($handle, 1000, ',');
    // // Get headers
    //  if ( $data!== FALSE ){
       // echo '<tr><th class="fixed-side">'.implode('</th><th class="fixed-side">', $data).'</th></tr>';
        echo '<tr>';
        echo '<th class="fixed-side">State</th>';
        echo '<th class="fixed-side">Year</th>';
        echo '<th class="fixed-side">Quarter</th>';
        echo '<th class="fixed-side">Total Wages</th>';
        echo '<th class="fixed-side">Total Wages Taxable Employers</th>';
        echo '<th class="fixed-side">Taxable Wages </th>';
        echo '<th class="fixed-side">Average Weekly wage</th>';
        echo '</tr>';
    // }
    // Get the rest
     while (($data = fgetcsv($handle, 124217728, ',')) !== FALSE   ){
        if(($_POST['OrderBy'])== "OrderBy_State"){
        if ( ($_POST['state'] == $data[0]) && ( $optionFirstYear <= $data[1] && $optionLastYear >= $data[1] ) ) {
            unset($data[1]);
            echo '<tr><td>'.implode('</td><td>', $data).'</td></tr>';
        }
        } else if ( $optionFirstYear <= $data[1] && $optionLastYear >= $data[1] ) {
            unset($data[1]);
        echo '<tr><td>'.implode('</td><td>', $data).'</td></tr>';
        }
    }
    fclose($handle);
    echo '</table>';
     echo '</div>';
}
else {
    echo "File can not be found";
}

// important

?>
