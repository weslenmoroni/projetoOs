<?php
function dividir($mumero){
    $metade = $mumero / 2;
    echo $metade."<br/>";
    if($metade >0){
        
    }

}
dividir(100);

/*
função arrow@@@
$dizimo = fn($valor) => $valor*0.1;
echo $dizimo(7300);


função Anonima@@
$dizimo = function (int $valor){
return $valor* 0.1; 
};
$funcao = $dizimo;
echo $funcao(80);


função @@
function x($n1,$n2){
$total = $n1.$n2;
return $total;
}
$xx = x(10,25);
echo "Total: ".$xx;


loop forechea@@
$ingredientes = [
'açucar',
'farinha',
'ovo',
'leite',
'fermento em po',
];
foreach($ingredientes as $ingredientes){
echo "Item ".$ingredientes."<br/>";
}

$numero = 0;

for($numero = 0; $numero < 10; $numero += 1){
    echo "N: ".$numero."<br/>";

}

loop while @@@
$x = 1;
while ($x <= 10) {
  for($i = 1; $i <= 10; $i++) {
    echo '-';
  }
  echo "</br>";
  $x++;
}

<?php

$linha = null ;
    for($i='0';$i<20;$i++) {
        echo $linha.= '-';
        echo '<br/>';
       
   
   
}


*/