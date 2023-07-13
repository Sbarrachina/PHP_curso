<?php 

$clave="HolaMundo123";
echo md5($clave); // se utilizaban antes

echo "<br>";

echo sha1($clave);

echo "<br>";

echo hash("md5" ,$clave) ."<br>";// esta soporta multiples algoritmos 

echo md5($clave); // solo soporta un algoritmo md5

foreach(hash_algos() as $algoritmos){
    echo $algoritmos . " - " . hash($algoritmos, $clave) . "<br>";


}

?>

<br>
<!-- Para trabajar con un valor fijo y la que se suele trabajar -->
<!-- actualmente  -->
<?php 

$clave="HolaMundo123";

echo password_hash($clave,PASSWORD_DEFAULT); 

// Cada vez que actualicemos genera una nueva contraseña

echo "<br>";
echo password_hash($clave,PASSWORD_BCRYPT,["cost"=>10]); 


?>

<br>
<!-- Para verificar el hash- >
// comprueba que la contraseña coincida con un hash password_verify

<?php 

$clave="HolaMundo123";


$clave_procesada=password_hash($clave,PASSWORD_BCRYPT,["cost"=>10]); 

if (password_verify($clave,$clave_procesada)){
    echo "Las claves coinciden";

}


?>