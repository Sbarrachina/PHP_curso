<?php 
// Eliminar la Cookie ( Tiempo en negativo)
// cookie creada

setcookie("Idioma","es", time()+60*60*24*365,"/","localhost",
false,true);

// Para elimminar la cookie 
setcookie("Idioma","es", time()-60,"/","localhost",
false,true);


?>