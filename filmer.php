<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Godisbutikens filmer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

</head>
<body>
    
</body>
</html>
<?php

echo "<h1>Godisbutikens filmer</h1>";


// Steg 1: hämtat data via endpoint (RESTful API)
 // videobutikens endpointadress lagras i egen endpoint-variabel
$endpoint = "http://localhost/Modul-3-API/videobutik.se/api/movies/";
$data = file_get_contents($endpoint);

// echo $data;

// if(empty($data)){
//     echo "<h2>Problem med att hämta data!</h2>";
//     exit;
// }


// Steg 2: JSON -> PHP-array
$array = json_decode($data, true);

echo $array;
if(!is_array($array)){
    echo "<h2>Problem att skapa array.</h2>";
 }


// Steg 3. Välj data att skriva ut / presentera. Loop.
echo "<table class='table table-bordered table-striped'>";
echo "<tr><th>ID</th><th>Titel</th><th>Pris</th></tr>";

foreach ($array as $key => $value):{
    echo "<tr><td>" . $value['filmID']."</td>";
    echo "<td>" . $value['Titel'] . "</td>";
    echo "<td>" . $value['Pris'] . "</td></tr>";
} endforeach;

 "</table>";

?>