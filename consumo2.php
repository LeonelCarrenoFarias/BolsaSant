<?php

$key="0051D3CCDE7D4B78A49C0BC6AB28913A";


$fp=fopen("tsconfig2.json", "w");

// Se crea un manejador CURL
$ch=curl_init();

// Se establece la URL y algunas opciones
curl_setopt($ch, CURLOPT_URL, "https://startup.bolsadesantiago.com/api/consulta/TickerOnDemand/getIndices?access_token=0051D3CCDE7D4B78A49C0BC6AB28913A");
//determina si descargamos las cabeceras del servidor [0-No mostramos|1-mostramos]
curl_setopt($ch, CURLOPT_HEADER, 0);
//determina si mostramos el resultado en el nevagador [0-mostramos|1-NO mostramos]
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
//determina donde guardar el fichero
curl_setopt($ch, CURLOPT_FILE, $fp);

// Se obtiene la URL indicada
curl_exec($ch);

// Se cierra el recurso CURL y se liberan los recursos del sistema
curl_close($ch);

//se cierra el manejador de ficheros
fclose($fp);