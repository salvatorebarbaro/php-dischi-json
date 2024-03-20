<?php
// comando usato per prendere e leggere il file dischi e prendere la stringa e successivamente andremo a convertirlo da json a array php
$Stringa_json = file_get_contents('dischi.json');

// convertiamo l eleemnto preso da json
$dischi= json_decode($Stringa_json,true);
// comando usato per vedere se abbiamo "preso" 

// restituiamo un  elemento json 
//  stringa di codce utile per farci cominucare con questo array
header("Content-Type: application/json");

echo json_encode($dischi);
?>