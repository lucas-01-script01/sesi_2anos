<?php //nomeclatura : snake case 
while(


$banco_usuario="jose@gmail.com";
$banco_senha="123";
$cod_gerado="444";
$marca = ["aura5", "aura10", "aura50", "aura80", "aura85", "aura900", "aura900+++"];
$count = count($marca);
$buscando = "Tesla";
 

$front_usuario= "jose@gmail.com";
$front_senha= "123";
$front_cod_gerado="44";

if ($banco_usuario==$front_usuario && $banco_senha == $front_senha){

    if ($cod_gerado == $front_cod_gerado){     
        echo "acesso liberado";
    }
    else{
    echo"acesso negado cod errado";
    }
}
else{
    echo "usuario ou senha incorreto";)
}
 
print ("====MENU====");

for ($i = 0 ; $i < $count; $i++){
    if($marca [$i] == $buscando){
        echo"[$i] Esse carro é movido a eletricidade ", $marca[$i], "\n";
    }
    else{
        echo"[$i] Esse carro é movido a combustão ", $marca[$i], "\n";
    }
}
 

  