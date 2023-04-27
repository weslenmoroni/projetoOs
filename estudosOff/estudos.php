<?php

$x = 4;
While ($x<30) {

    echo "X é igual a  $x" . '<br>';

    if($x === 24){
      echo "Terminando Loop While e IF";
break;
    }
    
    $x = $x+2;

} 

/*

$x = ["Matheus", 10.5, 85, "Joao", 74,"Vnicius", 697.8521, "Capitao", "Coronel", "General"];
While (is_string($x == 10)) {

    echo $x."" . '<br>';
    $x = $x+1;

} 

$v = 3;
switch ($v) {
  case 0:
    echo "è igual a Zero!" . '<br>';
    break;
  case 1:
    echo "è igual a Um!" . '<br>';
    break;
  default:
    echo "Nenhuma das Opções" . '<br>';
} 


$velocidade = 41;
$velocidadeLimite = 40;

if($velocidade < $velocidadeLimite){

  echo "Velocidade Correta".'<br>';

}else if($velocidade == $velocidadeLimite){
  
  echo "Motorista Tomar Cuidado".'<br>';

}else {
  
  echo "Motorista Ganhou multa".'<br>';
}


$arr = ['Batata', 'Maçã', 'Pera', 'Feijão', 'Arroz'];
$removidos = array_splice($arr,2,2);

print_r($arr);
echo '<br>';


print_r($removidos);


list($marca, $motor, $cor, $idade, $acessorio, $cambio) = $arr;
print_r($arr);
echo '<br>';

echo $marca.'<br>';
echo $motor.'<br>';
echo $cor.'<br>';
echo $idade.'<br>';
echo $acessorio.'<br>';
echo $cambio;


function dividir($mumero){
    $metade = $mumero / 2;
    echo $metade."<br/>";
    if($metade >0){
        
    }

}
dividir(100);


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