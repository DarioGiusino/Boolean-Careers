<?php
// get data from "fake" database
$data = file_get_contents('data.json');

// translate data from JSON to PHP (in case i will do something with those data)
$discs = json_decode($data, true);

// declare that from now all the exported data will be converted again in JSON
header('Content-Type: application/json');

// print the exported data
echo json_encode($discs);
