<?php 
session_start();
$fout = fopen("counter.txt", 'r');
if(!$fout){ 
    echo"Error 404 File Not Found" ;
            } else {
    $counter = (int)fread($fout,20);
    $counter++;
    $_SESSION['counter']=$counter;
    $fin = fopen("counter.txt", "w" );
    fwrite($fin,$counter);
    fclose($fout);
    fclose($fin);
    header("Location:home.html");
    }
?>