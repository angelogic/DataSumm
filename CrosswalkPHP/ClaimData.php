
<?PHP


$optionFirstYear =  $_POST['firstYear'] ;
$optionLastYear =  $_POST['lastYear'];
$row = 1;
if (($handle = fopen('DataSummaryOption/ClaimData.csv', 'r')) !== FALSE){
    echo '<div class="container">';
    echo '<table >';
    // $data = fgetcsv($handle, 1000, ',');
    // // Get headers
    //  if ( $data!== FALSE ){
       // echo '<tr><th class="fixed-side">'.implode('</th><th class="fixed-side">', $data).'</th></tr>';
    // echo '<thead>';
        echo '<tr>';
        echo '<th class="fixed-side">State</th>';
        echo '<th class="fixed-side">Year</th>';
        echo '<th class="fixed-side">Quarter</th>';
        echo '<th class="fixed-side">Initial Claims</th>';
        echo '<th class="fixed-side">Total Weeks Claimed</th>';
        echo '<th class="fixed-side">Total Weeks compensated</th>';
        echo '<th class="fixed-side">Exhaustions</th>';
        echo '<th class="fixed-side">Exhaustions Rate</th>';
        echo '<th class="fixed-side">Rank</th>';
        echo '<th class="fixed-side">Average Duration</th>';
        echo '<th class="fixed-side">Rank</th>';
        echo '<th class="fixed-side">Insured Unemployment Rate</th>';
        echo '<th class="fixed-side">Rank</th>';
        echo '</tr>';
        // echo '</thead>';
    // }
    // Get the rest
     while (($data = fgetcsv($handle, 124217728, ',')) !== FALSE   ){
        if(($_POST['OrderBy'])== "OrderBy_State"){
        if ( ($_POST['state'] == $data[0]) && ( $optionFirstYear <= $data[1] && $optionLastYear >= $data[1] ) ) {
            unset($data[1]);
            // echo '<tbody>';
            echo '<tr><td>'.implode('</td><td>', $data).'</td></tr>';
            // echo '</tbody>';
        }
        } else if ( $optionFirstYear <= $data[1] && $optionLastYear >= $data[1] ) {
            unset($data[1]);
            // echo '<tbody>';
        echo '<tr><td>'.implode('</td><td>', $data).'</td></tr>';
        // echo '</tbody>';
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
