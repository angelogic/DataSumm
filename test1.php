<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="/tablestyle.css">
</head>
<body>
<h1>Unemployment Insurance Quarterly Data Summary Report </h1>
        <p>State Name</p>
        <h2>Benefits Data</h2>

<?PHP

print_r($_POST);
$GLOBALS['state'] =  $_POST['state'] ;
$GLOBALS['optionFirstYear'] =  $_POST['firstYear'] ;
$GLOBALS['optionLastYear'] =  $_POST['lastYear'];
print_R($state);

 // important
$row = 0;
if (($handle = fopen('Final_UIDS_History.csv', 'r')) !== FALSE)
{
    echo '<table>';
    $data = fgetcsv($handle, 1000, ',');
    // Get headers
     if ( $data!== FALSE )
    {
        unset($data[1]);
        echo '<tr><th>'.implode('</th><th>', $data).'</th></tr>';
    }
    // Get the rest
     while (($data = fgetcsv($handle, 124217728, ',')) !== FALSE   )
    {
        print_r($data[0]);
        print_r($state);
        if ( ($state == $data[0]) && ( $optionFirstYear <= $data[2] && $optionLastYear >= $data[2] ) ) {
            
            unset($data[1]);
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