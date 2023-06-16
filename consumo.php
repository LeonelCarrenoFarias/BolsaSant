<?php

$key=$_POST['key'];
$data =file_get_contents('https://startup.bolsadesantiago.com/api/consulta/TickerOnDemand/getIndices?access_token='.$key.'');
if($data){
    $data2=json_decode($data,true);
    unlink("tsconfig.json");
    file_put_contents("tsconfig.json", json_encode($data2));

    header('Location: grafico.html');

}else{
    echo "<script>alert('Error al cargar la API')</script>";
    header('Location: index.html');

}


