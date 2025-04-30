<body>
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