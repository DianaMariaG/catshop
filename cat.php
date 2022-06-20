<?php 
include './database/connection.php';
include './model/model.php';

$sqlStatement = $conn->prepare("Select * from cat");
$sqlStatement->execute();
$results = $sqlStatement->get_result();
$rows = $results->fetch_all();

$all_cats = array();
if (count($rows) > 0) {
    foreach ($rows as $row) {
        $cat = new Cat($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
        array_push($all_cats, $cat);
    }
} else {
echo "0 results";
}
        
?>