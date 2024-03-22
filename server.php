<?php
// comando usato per prendere e leggere il file dischi e prendere la stringa e successivamente andremo a convertirlo da json a array php
$Stringa_json = file_get_contents('dischi.json');

// convertiamo l eleemnto preso da json
$dischi= json_decode($Stringa_json,true);
// comando usato per vedere se abbiamo "preso" 

// controlliamo se stiamo ricevendo un parametro diskindex e vediamo anche il fatto che il suddetto parametro non sia vuoto
if(isset($_GET['discIndex']) && $_GET['discIndex'] != ''){
    // dopo esserci passati l'index tramite js qui andiamo a salvarlo in una variabile
    $discIndex=$_GET['discIndex'];

    // mi prendo l'album dalla lista tramite il mio index che mi sono passato
    $selectedDisc = $dischi[$discIndex];
    
    // riporto tutto in pagina
    header("Content-Type: application/json");
    // riporto in json i parametri cosi che il mio programma lo passa leggere 
    echo json_encode($selectedDisc);
}
else{
    // noi andiamo a fare tutto cio per permetterci in un secondo momento la possibilità di modificarlo con filtri ecc e anche per più sicurezza quando forniamo questa specie di apy
// restituiamo un  elemento json 
//  stringa di codce utile per farci cominucare con questo array
header("Content-Type: application/json");

echo json_encode($dischi);
}



?>