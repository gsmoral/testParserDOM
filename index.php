
<?php
require('simple_html_dom.php');
$html = file_get_html('https://www.flightradar24.com/data/airports/bcn/departures/');

// Descomentar echo para ver web parseada
//echo $html;
//exit;


$rowData = array();

    foreach($html->find('table tr') as $row) {
        // initialize array to store the cell data from each row
        $flight = array();
        foreach($row->find('td') as $cell) {
            // push the cell's text to the array
            echo 'Inicio';
            print_r($cell->plaintext);
            echo 'Fin';
            $flight[] = $cell->plaintext;
        }
        $rowData[] = $flight;
    }

//var_dump($rowData);

// echo '<table>';
// foreach ($rowData as $row => $tr) {
//     echo '<tr>'; 
//     foreach ($tr as $td)
//         echo '<td>' . $td .'</td>';
//     echo '</tr>';
// }
// echo '</table>';