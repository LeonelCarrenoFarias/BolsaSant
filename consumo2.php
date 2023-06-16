<?php

$key="0051D3CCDE7D4B78A49C0BC6AB28913A";
$fp=fopen("tsconfig2.json", "w");
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, "https://startup.bolsadesantiago.com/api/consulta/TickerOnDemand/getIndices?access_token=0051D3CCDE7D4B78A49C0BC6AB28913A");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_exec($ch);
curl_close($ch);
fclose($fp);