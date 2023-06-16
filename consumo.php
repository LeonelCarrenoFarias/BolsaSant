<?php

$key="0051D3CCDE7D4B78A49C0BC6AB28913A";
$data =file_get_contents('https://startup.bolsadesantiago.com/api/consulta/TickerOnDemand/getIndices?access_token='.$key);
if($data){
    $data2=json_decode($data,true);
    unlink("tsconfig.json");
    file_put_contents("tsconfig.json", json_encode($data2));

    echo "<script>alert('Exito'); window.location.replace('grafico.html');</script>";

}else{
    echo "<script>alert('Error al cargar la API'); window.location.replace('index.html');</script>";

}


