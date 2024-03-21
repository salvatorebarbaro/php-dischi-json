<?php
// comando usato per prendere e leggere il file dischi e prendere la stringa e successivamente andremo a convertirlo da json a array php
$Stringa_json = file_get_contents('dischi.json');

// convertiamo l eleemnto preso da json
$dischi= json_decode($Stringa_json,true);
// comando usato per vedere se abbiamo "preso" 


// noi andiamo a fare tutto cio per permetterci in un secondo momento la possibilità di modificarlo con filtri ecc e anche per più sicurezza quando forniamo questa specie di apy 

// restituiamo un  elemento json 
//  stringa di codce utile per farci cominucare con questo array
header("Content-Type: application/json");

echo json_encode($dischi);
?>