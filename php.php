<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>php</title>
    <style>

</style>
</head>
<body style="background: #f4f4f9;">

    
<div style="align-items: center; margin-left: 40%; margin-top: 13%; border: 5px solid; border-color: #5a5a5a; margin-right: 40%; padding: 1%;  border-radius: 10px; background-color: rgb(218, 218, 218);">
    <div style="margin-left: 10%; align-items: center;">
    <h1>Dados Coletados</h1>
<?php
$nome = $_POST["nome_cliente"];
$PRODUTO1 = $_POST["nome_produto"];
$VPRODUTO1 = $_POST["Vproduto1"];
$PRODUTO2 = $_POST["nomeproduto2"];
$VPRODUTO2 = $_POST["Vproduto2"];
$V = $_POST["V"];
$total = $VPRODUTO1 + $VPRODUTO2;
$troco = $V - $total;

echo "seu nome é :". $nome;
echo "<br>";
echo "<br>";
echo "nome produto1 é :". $PRODUTO1;
echo "<br>";
echo "<br>";
echo "Valor produto1 é :". $VPRODUTO1;
echo "<br>";
echo "<br>";
echo "nome produto1 é :". $PRODUTO1;
echo "<br>";
echo "<br>";
echo "Valor produto1 é :". $VPRODUTO1;
echo "<br>";
echo "<br>";
echo "o valor é :". $V;
echo "<br>";
echo "<br>";
echo "o total :". $total;
echo "<br>";
echo "<br>";
echo "o troco é :". $troco;

?>
</div>
</div>
